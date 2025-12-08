<?php

namespace App\Http\Controllers\ManageAccess;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use App\Models\Contenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Affiche la liste des commentaires de l'utilisateur
     */
    public function index()
    {
        $commentaires = Commentaire::where('id_utilisateur', Auth::id())
            ->with(['contenu', 'contenu.type', 'contenu.region'])
            ->latest()
            ->paginate(15);
        
        return view('commentaires.index', compact('commentaires'));
    }

    /**
     * Affiche le formulaire de création d'un commentaire
     */
    public function create(Request $request)
    {
        // Récupérer le contenu si spécifié
        $contenu = null;
        if ($request->has('contenu_id')) {
            $contenu = Contenu::where('statut', 'publié')
                ->findOrFail($request->contenu_id);
        }
        
        // Liste des contenus publiés disponibles pour commenter
        $contenus = Contenu::where('statut', 'publié')
            ->with(['type', 'region'])
            ->orderBy('titre')
            ->get();
        
        return view('commentaires.create', compact('contenus', 'contenu'));
    }

    /**
     * Enregistre un nouveau commentaire
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'texte' => 'required|string|max:1000',
            'note' => 'nullable|integer|min:0|max:5',
            'id_contenu' => 'required|exists:contenus,id',
        ]);

        // Vérifier que le contenu est publié
        $contenu = Contenu::findOrFail($validated['id_contenu']);
        if ($contenu->statut !== 'publié') {
            return redirect()->back()
                ->withInput()
                ->withErrors(['id_contenu' => 'Vous ne pouvez commenter que les contenus publiés.']);
        }

        // Vérifier si l'utilisateur a déjà commenté ce contenu
        $existe = Commentaire::where('id_utilisateur', Auth::id())
            ->where('id_contenu', $validated['id_contenu'])
            ->exists();
            
        if ($existe) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['id_contenu' => 'Vous avez déjà commenté ce contenu.']);
        }

        // Créer le commentaire
        $commentaire = Commentaire::create([
            'texte' => $validated['texte'],
            'note' => $validated['note'],
            'id_utilisateur' => Auth::id(),
            'id_contenu' => $validated['id_contenu'],
            'date' => now(),
        ]);

        // Redirection selon le contexte
        if ($request->has('from_explorer')) {
            return redirect()->route('explorer.show', $contenu)
                ->with('success', 'Commentaire ajouté avec succès.');
        }
        
        return redirect()->route('commentaires.index')
            ->with('success', 'Commentaire ajouté avec succès.');
    }

    /**
     * Affiche un commentaire (détail)
     */
    public function show(Commentaire $commentaire)
    {
        // Vérifier que l'utilisateur est l'auteur du commentaire
        if ($commentaire->id_utilisateur !== Auth::id()) {
            abort(403, 'Vous ne pouvez voir que vos propres commentaires.');
        }

        $commentaire->load(['contenu.type', 'contenu.region', 'contenu.langue', 'utilisateur']);
        
        return view('commentaires.show', compact('commentaire'));
    }

    /**
     * Affiche le formulaire d'édition d'un commentaire
     */
    public function edit(Commentaire $commentaire)
    {
        // Vérifier que l'utilisateur est l'auteur du commentaire
        if ($commentaire->id_utilisateur !== Auth::id()) {
            abort(403, 'Vous ne pouvez modifier que vos propres commentaires.');
        }

        // Récupérer le contenu associé
        $contenu = $commentaire->contenu;
        
        return view('commentaires.edit', compact('commentaire', 'contenu'));
    }

    /**
     * Met à jour un commentaire
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        // Vérifier que l'utilisateur est l'auteur du commentaire
        if ($commentaire->id_utilisateur !== Auth::id()) {
            abort(403, 'Vous ne pouvez modifier que vos propres commentaires.');
        }

        $validated = $request->validate([
            'texte' => 'required|string|max:1000',
            'note' => 'nullable|integer|min:0|max:5',
        ]);

        // Vérifier que le contenu est toujours publié
        if ($commentaire->contenu->statut !== 'publié') {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Le contenu associé n\'est plus publié.']);
        }

        $commentaire->update($validated);

        // Redirection selon le contexte
        if ($request->has('from_explorer')) {
            return redirect()->route('explorer.show', $commentaire->contenu)
                ->with('success', 'Commentaire modifié avec succès.');
        }
        
        return redirect()->route('commentaires.index')
            ->with('success', 'Commentaire modifié avec succès.');
    }

    /**
     * Supprime un commentaire
     */
    public function destroy(Commentaire $commentaire, Request $request)
    {
        // Vérifier que l'utilisateur est l'auteur du commentaire
        if ($commentaire->id_utilisateur !== Auth::id()) {
            abort(403, 'Vous ne pouvez supprimer que vos propres commentaires.');
        }

        $contenuId = $commentaire->id_contenu;
        $commentaire->delete();

        // Redirection selon le contexte
        if ($request->has('from_explorer')) {
            return redirect()->route('explorer.show', $contenuId)
                ->with('success', 'Commentaire supprimé avec succès.');
        }
        
        return redirect()->route('commentaires.index')
            ->with('success', 'Commentaire supprimé avec succès.');
    }
}