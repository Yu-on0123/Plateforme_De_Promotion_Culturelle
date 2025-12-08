<?php

namespace App\Http\Controllers;

use App\Models\TypeMedia;
use Illuminate\Http\Request;

class TypeMediaController extends Controller
{
    public function index()
    {
        $types = TypeMedia::all();
        return view('admin.typemedias.index', compact('types'));
    }

    public function create()
    {
        return view('admin.typemedias.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|in:image,audio,video,document|unique:types_medias,nom',
        ]);

        TypeMedia::create($validated);

        return redirect()->route('admin.types_medias.index')
            ->with('success', 'Type de média ajouté avec succès.');
    }

    public function edit(TypeMedia $types_media)
    {
        return view('admin.typemedias.edit', [
            'type' => $types_media
        ]);
    }

    public function update(Request $request, TypeMedia $types_media)
    {
        $validated = $request->validate([
            'nom' => 'required|string|in:image,audio,video,document|unique:types_medias,nom,' . $types_media->id,
        ]);

        $types_media->update($validated);

        return redirect()->route('admin.types_medias.index')
            ->with('success', 'Type de média mis à jour avec succès.');
    }

    public function destroy(TypeMedia $types_media)
    {
        $types_media->delete();

        return redirect()->route('admin.types_medias.index')
            ->with('success', 'Type de média supprimé avec succès.');
    }
}
