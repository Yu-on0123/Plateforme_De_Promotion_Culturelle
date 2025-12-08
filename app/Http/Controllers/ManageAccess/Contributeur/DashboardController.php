<?php

namespace App\Http\Controllers\ManageAccess\Contributeur;

use App\Http\Controllers\Controller;
use App\Models\Contenu;
use App\Models\Commentaire;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Affiche le dashboard contributeur
     */
    public function dashboard()
    {
        $userId = Auth::id();
        
        $stats = [
            'total_contenus' => Contenu::where('id_auteur', $userId)->count(),
            'contenus_publies' => Contenu::where('id_auteur', $userId)
                ->where('statut', 'publié')
                ->count(),
            'contenus_brouillon' => Contenu::where('id_auteur', $userId)
                ->where('statut', 'brouillon')
                ->count(),
            'total_medias' => Media::whereHas('contenu', function($query) use ($userId) {
                $query->where('id_auteur', $userId);
            })->count(),
            'total_commentaires' => Commentaire::where('id_utilisateur', $userId)->count(),
            'commentaires_recents' => Commentaire::where('id_utilisateur', $userId)
                ->with(['contenu'])
                ->latest()
                ->limit(5)
                ->get(),
            'contenus_recents' => Contenu::where('id_auteur', $userId)
                ->with(['type', 'region'])
                ->latest()
                ->limit(5)
                ->get(),
        ];
        
        return view('contributeur.dashboard', compact('stats'));
    }
}