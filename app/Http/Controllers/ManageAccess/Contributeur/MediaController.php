<?php

namespace App\Http\Controllers\ManageAccess\Contributeur;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Contenu;
use App\Models\TypeMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Affiche la liste des médias du contributeur
     */
    public function index()
    {
        // Récupérer les contenus de l'utilisateur avec leurs médias
        $contenus = Contenu::where('id_auteur', Auth::id())
            ->with(['medias.typeMedia'])
            ->has('medias')
            ->latest()
            ->paginate(10);
        
        // Compter le total des médias
        $totalMedias = Media::whereHas('contenu', function($query) {
            $query->where('id_auteur', Auth::id());
        })->count();
        
        return view('contributeur.medias.index', compact('contenus', 'totalMedias'));
    }

    /**
     * Affiche le formulaire de création d'un média
     */
    public function create(Request $request)
    {
        $typesMedia = TypeMedia::all();
        
        // Récupérer les contenus de l'utilisateur
        $contenus = Contenu::where('id_auteur', Auth::id())
            ->orderBy('titre')
            ->get();
        
        // Si un contenu est spécifié dans l'URL
        $contenu = null;
        if ($request->has('contenu_id')) {
            $contenu = Contenu::where('id_auteur', Auth::id())
                ->findOrFail($request->contenu_id);
        }
        
        return view('contributeur.medias.create', compact('typesMedia', 'contenus', 'contenu'));
    }

    /**
     * Enregistre un nouveau média
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:500',
            'id_typemedia' => 'required|exists:types_medias,id',
            'id_contenu' => 'required|exists:contenus,id',
            'media' => 'required|file|max:5120', // 5MB max
        ]);

        // Vérifier que le contenu appartient à l'utilisateur
        $contenu = Contenu::where('id_auteur', Auth::id())
            ->findOrFail($validated['id_contenu']);

        // Traiter le fichier
        $file = $request->file('media');
        $extension = $file->getClientOriginalExtension();
        $fileName = 'media_' . time() . '_' . uniqid() . '.' . $extension;
        
        // Déterminer le type de média
        $typeMedia = TypeMedia::find($validated['id_typemedia']);
        $typeDossier = $this->getDossierParType($typeMedia->nom);
        
        // Enregistrer le fichier
        $chemin = $file->storeAs($typeDossier, $fileName, 'public');

        // Créer l'enregistrement dans la base de données
        $media = Media::create([
            'description' => $validated['description'],
            'id_typemedia' => $validated['id_typemedia'],
            'id_contenu' => $validated['id_contenu'],
            'chemin' => $chemin,
        ]);

        return redirect()->route('contributeur.medias.index')
            ->with('success', 'Média ajouté avec succès.');
    }

    /**
     * Affiche les détails d'un média
     */
    public function show(Media $media)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu associé
        $this->authorizeMedia($media);

        $media->load(['typeMedia', 'contenu.type', 'contenu.region']);
        
        return view('contributeur.medias.show', compact('media'));
    }

    /**
     * Affiche le formulaire d'édition d'un média
     */
    public function edit(Media $media)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu associé
        $this->authorizeMedia($media);

        $typesMedia = TypeMedia::all();
        
        // Récupérer les contenus de l'utilisateur
        $contenus = Contenu::where('id_auteur', Auth::id())
            ->orderBy('titre')
            ->get();
        
        return view('contributeur.medias.edit', compact('media', 'typesMedia', 'contenus'));
    }

    /**
     * Met à jour un média
     */
    public function update(Request $request, Media $media)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu associé
        $this->authorizeMedia($media);

        $validated = $request->validate([
            'description' => 'required|string|max:500',
            'id_typemedia' => 'required|exists:types_medias,id',
            'id_contenu' => 'required|exists:contenus,id',
            'media' => 'nullable|file|max:5120',
        ]);

        // Vérifier que le nouveau contenu appartient à l'utilisateur
        if ($validated['id_contenu'] != $media->id_contenu) {
            $nouveauContenu = Contenu::where('id_auteur', Auth::id())
                ->findOrFail($validated['id_contenu']);
        }

        // Gérer le remplacement du fichier si fourni
        if ($request->hasFile('media')) {
            // Supprimer l'ancien fichier
            Storage::disk('public')->delete($media->chemin);
            
            // Enregistrer le nouveau fichier
            $file = $request->file('media');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'media_' . time() . '_' . uniqid() . '.' . $extension;
            
            $typeMedia = TypeMedia::find($validated['id_typemedia']);
            $typeDossier = $this->getDossierParType($typeMedia->nom);
            
            $chemin = $file->storeAs($typeDossier, $fileName, 'public');
            $validated['chemin'] = $chemin;
        }

        $media->update($validated);

        return redirect()->route('contributeur.medias.index')
            ->with('success', 'Média mis à jour avec succès.');
    }

    /**
     * Supprime un média
     */
    public function destroy(Media $media)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu associé
        $this->authorizeMedia($media);

        // Supprimer le fichier physique
        Storage::disk('public')->delete($media->chemin);
        
        // Supprimer l'enregistrement
        $media->delete();

        return redirect()->route('contributeur.medias.index')
            ->with('success', 'Média supprimé avec succès.');
    }

    /**
     * Affiche les médias d'un contenu spécifique
     */
    public function parContenu(Contenu $contenu)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu
        if ($contenu->id_auteur !== Auth::id()) {
            abort(403, 'Accès non autorisé.');
        }

        $medias = $contenu->medias()->with('typeMedia')->latest()->get();
        
        return view('contributeur.medias.par-contenu', compact('contenu', 'medias'));
    }

    /**
     * Télécharge un média
     */
    public function download(Media $media)
    {
        // Vérifier que l'utilisateur est l'auteur du contenu associé
        $this->authorizeMedia($media);

        if (!Storage::disk('public')->exists($media->chemin)) {
            abort(404, 'Fichier non trouvé.');
        }

        return Storage::disk('public')->download($media->chemin, 
            $this->generateDownloadName($media));
    }

    /**
     * Vérifie que l'utilisateur peut accéder au média
     */
    private function authorizeMedia(Media $media)
    {
        if ($media->contenu->id_auteur !== Auth::id()) {
            abort(403, 'Vous ne pouvez gérer que les médias de vos contenus.');
        }
    }

    /**
     * Détermine le dossier de stockage selon le type
     */
    private function getDossierParType(string $type): string
    {
        $types = [
            'Image' => 'images',
            'Vidéo' => 'videos',
            'Audio' => 'audios',
            'Document' => 'documents',
            'PDF' => 'pdf',
        ];

        return $types[$type] ?? 'autres';
    }

    /**
     * Génère un nom de fichier pour le téléchargement
     */
    private function generateDownloadName(Media $media): string
    {
        $extension = pathinfo($media->chemin, PATHINFO_EXTENSION);
        $contenuTitre = Str::slug($media->contenu->titre);
        $description = Str::slug(substr($media->description, 0, 50));
        
        return "{$contenuTitre}_{$description}.{$extension}";
    }
    
}