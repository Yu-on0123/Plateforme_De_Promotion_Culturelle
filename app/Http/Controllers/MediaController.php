<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\TypeMedia;
use App\Models\Contenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorizeResource(Media::class, 'media');
    // }

    // Liste des médias (admin uniquement)
    public function index()
    {
        $typesMedia = TypeMedia::all();
        $contenus = Contenu::all();
        $medias = Media::with(['typeMedia', 'contenu'])->paginate(12);

        return view('admin.medias.index', compact('medias', 'typesMedia', 'contenus'));
    }

    // Formulaire création
    public function create()
    {
        $types = TypeMedia::all();
        $contenus = Contenu::all();

        return view('admin.medias.create', compact('types', 'contenus'));
    }

    // Stockage nouveau média
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_typemedia' => 'required|exists:types_medias,id',
            'media_file'   => 'required|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:20480',
            'description'  => 'nullable|string',
            'id_contenu'   => 'required|exists:contenus,id',
        ]);

        // Enregistrer le fichier dans storage/app/public/medias
        $path = $request->file('media_file')->store('medias', 'public');

        // Créer le média dans la base
        Media::create([
            'id_typemedia' => $validated['id_typemedia'],
            'chemin'       => $path,
            'description'  => $validated['description'] ?? null,
            'id_contenu'   => $validated['id_contenu'],
        ]);

        return redirect()->route('admin.medias.index')
                         ->with('success', 'Média créé avec succès.');
    }

    // Formulaire édition
    public function edit(Media $media)
    {
        $types = TypeMedia::all();
        $contenus = Contenu::all();

        return view('admin.medias.edit', compact('media', 'types', 'contenus'));
    }

    // Mise à jour
    public function update(Request $request, Media $media)
    {
        $validated = $request->validate([
            'id_typemedia' => 'required|exists:types_medias,id',
            'media_file'   => 'nullable|file|mimes:jpg,jpeg,png,mp4,pdf,webp|max:20480',
            'description'  => 'nullable|string',
            'id_contenu'   => 'required|exists:contenus,id',
        ]);

        // Si un nouveau fichier est uploadé, supprimer l'ancien et enregistrer le nouveau
        if ($request->hasFile('media_file')) {
            if ($media->chemin && Storage::disk('public')->exists($media->chemin)) {
                Storage::disk('public')->delete($media->chemin);
            }

            $validated['chemin'] = $request->file('media_file')->store('medias', 'public');
        }

        $media->update([
            'id_typemedia' => $validated['id_typemedia'],
            'chemin'       => $validated['chemin'] ?? $media->chemin,
            'description'  => $validated['description'] ?? null,
            'id_contenu'   => $validated['id_contenu'],
        ]);

        return redirect()->route('admin.medias.index')
                         ->with('success', 'Média mis à jour.');
    }

    // Suppression
    public function destroy(Media $media)
    {
        // Supprimer le fichier du storage
        if ($media->chemin && Storage::disk('public')->exists($media->chemin)) {
            Storage::disk('public')->delete($media->chemin);
        }

        $media->delete();

        return redirect()->route('admin.medias.index')
                         ->with('success', 'Média supprimé.');
    }
}
