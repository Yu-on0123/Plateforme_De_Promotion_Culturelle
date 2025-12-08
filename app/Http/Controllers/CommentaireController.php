<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\User;
use App\Models\Contenu;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    // Liste des commentaires (admin uniquement)
    public function index()
    {
        $commentaires = Commentaire::with(['utilisateur', 'contenu'])->get();
        return view('admin.commentaires.index', compact('commentaires'));
    }

    public function create()
    {
        $contenus = Contenu::all();
        $users = User::all();

        return view('admin.commentaires.create', compact('users', 'contenus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'texte' => 'required|string',
            'note' => 'nullable|integer|min:0|max:5',
            'date' => 'nullable|date',
            'id_contenu' => 'required|exists:contenus,id',
            'id_utilisateur' => 'required|exists:users,id',
        ]);

        $validated['date'] = $validated['date'] ?? now();

        Commentaire::create($validated);

        return redirect()->route('admin.commentaires.index')
                         ->with('success', 'Commentaire ajouté.');
    }

    public function edit(Commentaire $commentaire)
    {
        $contenus = Contenu::all();
        $users = User::all();

        return view('admin.commentaires.edit', compact('commentaire', 'users', 'contenus'));
    }

    public function update(Request $request, Commentaire $commentaire)
    {
        $validated = $request->validate([
            'texte' => 'required|string',
            'note' => 'nullable|integer|min:0|max:5',
            'date' => 'nullable|date',
            'id_contenu' => 'required|exists:contenus,id',
            'id_utilisateur' => 'required|exists:users,id',
        ]);

        $commentaire->update($validated);

        return redirect()->route('admin.commentaires.index')
                         ->with('success', 'Commentaire mis à jour.');
    }

    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();

        return redirect()->route('admin.commentaires.index')
                         ->with('success', 'Commentaire supprimé.');
    }
}
