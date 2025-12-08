<?php

namespace App\Http\Controllers;

use App\Models\TypeContenu;
use Illuminate\Http\Request;

class TypeContenuController extends Controller
{
    public function index()
    {
        $types = TypeContenu::all();
        return view('admin.typecontenus.index', compact('types'));
    }

    public function create()
    {
        return view('admin.typecontenus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:types_contenus,nom',
        ]);

        TypeContenu::create($validated);

        return redirect()->route('admin.types_contenus.index')
            ->with('success', 'Type de contenu ajouté avec succès.');
    }

    public function edit(TypeContenu $types_contenu)
    {
        return view('admin.typecontenus.edit', [
            'type' => $types_contenu
        ]);
    }

    public function update(Request $request, TypeContenu $types_contenu)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:types_contenus,nom,' . $types_contenu->id,
        ]);

        $types_contenu->update($validated);

        return redirect()->route('admin.types_contenus.index')
            ->with('success', 'Type de contenu mis à jour avec succès.');
    }

    public function destroy(TypeContenu $types_contenu)
    {
        $types_contenu->delete();

        return redirect()->route('admin.types_contenus.index')
            ->with('success', 'Type de contenu supprimé avec succès.');
    }
}
