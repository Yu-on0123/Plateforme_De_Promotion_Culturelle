<?php

namespace App\Http\Controllers\ManageAccess;

use App\Http\Controllers\Controller;
use App\Models\Contenu;
use App\Models\Commentaire;
use App\Models\Region;
use App\Models\Langue;
use App\Models\TypeContenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExplorerController extends Controller
{
    /**
     * Affiche tous les contenus publiés avec filtres
     */
    public function index(Request $request)
    {
        $query = Contenu::with(['type', 'auteur', 'region', 'langue', 'medias'])
                        ->where('statut', 'publié')
                        ->latest();

        // Filtres
        if ($request->filled('region')) {
            $query->where('id_region', $request->region);
        }
        if ($request->filled('langue')) {
            $query->where('id_langue', $request->langue);
        }
        if ($request->filled('type')) {
            $query->where('id_type', $request->type);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('titre', 'LIKE', "%{$search}%")
                  ->orWhere('texte', 'LIKE', "%{$search}%")
                  ->orWhereHas('auteur', fn($q2) => $q2->where('name', 'LIKE', "%{$search}%"));
            });
        }

        $contenus = $query->paginate(12);
        $regions = Region::all();
        $langues = Langue::all();
        $types = TypeContenu::all();

        return view('explorer.index', compact('contenus', 'regions', 'langues', 'types'));
    }

    /**
     * Affiche un contenu publié avec ses commentaires
     */
    public function show(Contenu $contenu)
    {
        if ($contenu->statut !== 'publié') {
            abort(404, 'Ce contenu n\'est pas disponible.');
        }

        $contenu->load([
            'type', 
            'auteur', 
            'region', 
            'langue', 
            'medias', 
            'commentaires' => function($query) {
                $query->with('utilisateur')->latest();
            }
        ]);

        // Vérifier si l'utilisateur a déjà commenté ce contenu
        $dejaCommente = false;
        if (Auth::check()) {
            $dejaCommente = Commentaire::where('id_utilisateur', Auth::id())
                ->where('id_contenu', $contenu->id)
                ->exists();
        }

        return view('explorer.show', compact('contenu', 'dejaCommente'));
    }

    /**
     * Affiche le formulaire pour commenter un contenu
     */
    public function commenterForm(Contenu $contenu)
    {
        if ($contenu->statut !== 'publié') {
            abort(404);
        }

        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('info', 'Veuillez vous connecter pour commenter.');
        }

        // Vérifier si l'utilisateur a déjà commenté ce contenu
        $dejaCommente = Commentaire::where('id_utilisateur', Auth::id())
            ->where('id_contenu', $contenu->id)
            ->exists();

        if ($dejaCommente) {
            return redirect()->route('explorer.show', $contenu)
                ->with('warning', 'Vous avez déjà commenté ce contenu.');
        }

        return view('explorer.commenter', compact('contenu'));
    }

    /**
     * Traite l'ajout d'un commentaire
     */
    public function commenter(Request $request, Contenu $contenu)
    {
        if ($contenu->statut !== 'publié') {
            abort(404);
        }

        // Vérifier que l'utilisateur est connecté
        if (!Auth::check()) {
            abort(403, 'Vous devez être connecté pour commenter.');
        }

        // Vérifier si l'utilisateur a déjà commenté
        $existe = Commentaire::where('id_utilisateur', Auth::id())
            ->where('id_contenu', $contenu->id)
            ->exists();
            
        if ($existe) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Vous avez déjà commenté ce contenu.']);
        }

        $validated = $request->validate([
            'texte' => 'required|string|max:1000',
            'note' => 'nullable|integer|min:0|max:5',
        ]);

        Commentaire::create([
            'texte' => $validated['texte'],
            'note' => $validated['note'] ?? null,
            'id_utilisateur' => Auth::id(),
            'id_contenu' => $contenu->id,
            'date' => now(),
        ]);

        return redirect()->route('explorer.show', $contenu)
            ->with('success', 'Votre commentaire a été ajouté avec succès.');
    }

    /**
     * Contenus filtrés par région
     */
    public function parRegion(Region $region)
    {
        $contenus = Contenu::with(['type', 'auteur', 'langue', 'medias'])
                           ->where('id_region', $region->id)
                           ->where('statut', 'publié')
                           ->latest()
                           ->paginate(12);

        return view('explorer.region', compact('contenus', 'region'));
    }

    /**
     * Contenus filtrés par langue
     */
    public function parLangue(Langue $langue)
    {
        $contenus = Contenu::with(['type', 'auteur', 'region', 'medias'])
                           ->where('id_langue', $langue->id)
                           ->where('statut', 'publié')
                           ->latest()
                           ->paginate(12);

        return view('explorer.langue', compact('contenus', 'langue'));
    }

    /**
     * Contenus filtrés par type
     */
    public function parType(TypeContenu $type)
    {
        $contenus = Contenu::with(['auteur', 'region', 'langue', 'medias'])
                           ->where('id_type', $type->id)
                           ->where('statut', 'publié')
                           ->latest()
                           ->paginate(12);

        return view('explorer.type', compact('contenus', 'type'));
    }

    /**
     * Recherche avancée
     */
    public function recherche(Request $request)
    {
        $validated = $request->validate([
            'q' => 'required|string|min:2|max:100',
            'region' => 'nullable|exists:regions,id',
            'langue' => 'nullable|exists:langues,id',
            'type' => 'nullable|exists:types_contenus,id',
        ]);

        $query = Contenu::with(['type', 'auteur', 'region', 'langue'])
                        ->where('statut', 'publié');

        // Recherche texte
        $query->where(function($q) use ($validated) {
            $q->where('titre', 'LIKE', "%{$validated['q']}%")
              ->orWhere('texte', 'LIKE', "%{$validated['q']}%")
              ->orWhereHas('auteur', function($q2) use ($validated) {
                  $q2->where('name', 'LIKE', "%{$validated['q']}%");
              });
        });

        // Filtres supplémentaires
        if (!empty($validated['region'])) {
            $query->where('id_region', $validated['region']);
        }
        if (!empty($validated['langue'])) {
            $query->where('id_langue', $validated['langue']);
        }
        if (!empty($validated['type'])) {
            $query->where('id_type', $validated['type']);
        }

        $contenus = $query->latest()->paginate(12);
        $regions = Region::all();
        $langues = Langue::all();
        $types = TypeContenu::all();

        return view('explorer.recherche', compact('contenus', 'regions', 'langues', 'types', 'validated'));
    }
}