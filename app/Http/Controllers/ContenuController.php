<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use App\Models\TypeContenu;
use App\Models\User;
use App\Models\Region;
use App\Models\Langue;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    // Liste des contenus (admin uniquement)
    public function index()
    {
        $contenus = Contenu::with(['type', 'auteur', 'region', 'langue'])->get();
        return view('admin.contenus.index', compact('contenus'));
    }

    public function create()
    {
        $types = TypeContenu::all();
        $users = User::all();
        $regions = Region::all();
        $langues = Langue::all();

        return view('admin.contenus.create', compact('types', 'users', 'regions', 'langues'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'id_type' => 'required|exists:types_contenus,id',
            'id_auteur' => 'required|exists:users,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
            'texte' => 'nullable|string',
            'statut' => 'nullable|string',
        ]);

        Contenu::create($validated);

        return redirect()->route('admin.contenus.index')
                         ->with('success', 'Contenu créé avec succès.');
    }

    public function edit(Contenu $contenu)
    {
        $types = TypeContenu::all();
        $users = User::all();
        $regions = Region::all();
        $langues = Langue::all();

        return view('admin.contenus.edit', compact('contenu', 'types', 'users', 'regions', 'langues'));
    }

    public function update(Request $request, Contenu $contenu)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'id_type' => 'required|exists:types_contenus,id',
            'id_auteur' => 'required|exists:users,id',
            'id_region' => 'required|exists:regions,id',
            'id_langue' => 'required|exists:langues,id',
            'texte' => 'nullable|string',
            'statut' => 'nullable|string',
        ]);

        $contenu->update($validated);

        return redirect()->route('admin.contenus.index')
                         ->with('success', 'Contenu mis à jour avec succès.');
    }

    public function destroy(Contenu $contenu)
    {
        $contenu->delete();

        return redirect()->route('admin.contenus.index')
                         ->with('success', 'Contenu supprimé avec succès.');
    }
}
