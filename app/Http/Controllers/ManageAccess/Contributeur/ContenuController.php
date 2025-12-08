<?php

namespace App\Http\Controllers\ManageAccess\Contributeur;

use App\Http\Controllers\Controller;
use App\Models\Contenu;
use App\Models\TypeContenu;
use App\Models\Region;
use App\Models\Langue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ContenuController extends Controller
{
    /**
     * Affiche la liste des contenus du contributeur
     */
    public function index()
    {
        $contenus = Contenu::where('id_auteur', Auth::id())
            ->with(['type', 'region', 'langue', 'medias'])
            ->latest()
            ->paginate(10);
        
        return view('contributeur.contenus.index', compact('contenus'));
    }

    /**
     * Affiche le formulaire de création
     */
    public function create()
    {
        $types = TypeContenu::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contributeur.contenus.create', compact('types', 'regions', 'langues'));
    }

    /**
     * Enregistre un nouveau contenu
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'id_type' => 'required|exists:types_contenus,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
            'texte' => 'required|string|min:10',
            'statut' => 'nullable|string|in:brouillon,publié',
        ]);

        $contenu = Contenu::create([
            'titre' => $validated['titre'],
            'id_type' => $validated['id_type'],
            'id_region' => $validated['id_region'],
            'id_langue' => $validated['id_langue'],
            'texte' => $validated['texte'],
            'statut' => $validated['statut'] ?? 'brouillon',
            'id_auteur' => Auth::id(),
            'date_creation' => now(),
        ]);

        return redirect()->route('contributeur.contenus.index')
            ->with('success', 'Contenu créé avec succès. Statut : ' . $contenu->statut);
    }

    /**
     * Affiche un contenu (prévisualisation)
     */
    public function show(Contenu $contenu)
    {
        // Vérifier que l'utilisateur est l'auteur
        if ($contenu->id_auteur !== Auth::id()) {
            abort(403, 'Vous ne pouvez voir que vos propres contenus.');
        }

        $contenu->load(['type', 'region', 'langue', 'medias', 'commentaires.utilisateur']);
        
        return view('contributeur.contenus.show', compact('contenu'));
    }

    /**
     * Affiche le formulaire d'édition
     */
    public function edit(Contenu $contenu)
    {
        // Vérifier que l'utilisateur est l'auteur
        if ($contenu->id_auteur !== Auth::id()) {
            abort(403, 'Vous ne pouvez modifier que vos propres contenus.');
        }

        $types = TypeContenu::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contributeur.contenus.edit', compact('contenu', 'types', 'regions', 'langues'));
    }

    /**
     * Met à jour un contenu
     */
    public function update(Request $request, Contenu $contenu)
    {
        // Vérifier que l'utilisateur est l'auteur
        if ($contenu->id_auteur !== Auth::id()) {
            abort(403, 'Vous ne pouvez modifier que vos propres contenus.');
        }

        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'id_type' => 'required|exists:types_contenus,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
            'texte' => 'required|string|min:10',
            'statut' => 'required|string|in:brouillon,publié',
        ]);

        $contenu->update($validated);

        return redirect()->route('contributeur.contenus.index')
            ->with('success', 'Contenu mis à jour avec succès.');
    }

    /**
     * Supprime un contenu
     */
    public function destroy(Contenu $contenu)
    {
        // Vérifier que l'utilisateur est l'auteur
        if ($contenu->id_auteur !== Auth::id()) {
            abort(403, 'Vous ne pouvez supprimer que vos propres contenus.');
        }

        $contenu->delete();

        return redirect()->route('contributeur.contenus.index')
            ->with('success', 'Contenu supprimé avec succès.');
    }
}