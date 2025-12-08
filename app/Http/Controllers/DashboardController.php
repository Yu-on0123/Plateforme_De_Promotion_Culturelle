<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contenu;
use App\Models\Media;
use App\Models\Commentaire;
use App\Models\Langue;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // -----------------------------
        // 1️⃣ Compteurs globaux
        // -----------------------------
        $counts = [
            'users'        => User::count(),
            'contenus'     => Contenu::count(),
            'medias'       => Media::count(),
            'commentaires' => Commentaire::count(),
            'langues'      => Langue::count(),
            'regions'      => Region::count(),
        ];

        // -----------------------------
        // 2️⃣ Derniers éléments
        // -----------------------------
        $latestUsers = User::orderBy('created_at', 'desc')
                            ->take(6)
                            ->get(['id','nom','prenom','email','created_at']);

        $latestMedias = Media::with('typeMedia')
                             ->orderBy('created_at','desc')
                             ->take(6)
                             ->get();

        $latestCommentaires = Commentaire::with('utilisateur','contenu')
                                         ->orderBy('created_at','desc')
                                         ->take(8)
                                         ->get();

        $recentChanges = Contenu::orderBy('updated_at','desc')
                                ->take(8)
                                ->get(['id','titre','updated_at']);

        // -----------------------------
        // 3️⃣ Contenus publiés par jour (7 derniers jours)
        // -----------------------------
        $contenusByDay = Contenu::select(
                                DB::raw('DATE(created_at) as day'),
                                DB::raw('COUNT(*) as total')
                            )
                            ->where('created_at', '>=', now()->subDays(7))
                            ->groupBy('day')
                            ->orderBy('day','asc')
                            ->pluck('total','day')
                            ->toArray();

        // -----------------------------
        // 4️⃣ Variation du nombre de langues par région
        // -----------------------------
        $languesParRegion = Region::withCount('langues')
                                  ->orderBy('nom')
                                  ->pluck('langues_count', 'nom')
                                  ->toArray();

        // -----------------------------
        // 5️⃣ Top type de contenu
        // -----------------------------
        $topTypeContenu = Contenu::select('id_type', DB::raw('COUNT(*) as total'))
                                  ->groupBy('id_type')
                                  ->orderBy('total','desc')
                                  ->with('type')
                                  ->first();

        $topTypeContenuData = $topTypeContenu 
                              ? [$topTypeContenu->type->nom => $topTypeContenu->total]
                              : [];

        // -----------------------------
        // 6️⃣ Contenus les plus appréciés / moins appréciés / utilisateurs les plus actifs
        // -----------------------------
        // Contenus les plus appréciés (note moyenne >= 4)
        $mostLikedContents = Contenu::withAvg('commentaires', 'note')
            ->having('commentaires_avg_note', '>=', 4)
            ->orderBy('commentaires_avg_note', 'desc')
            ->take(3)
            ->get();

        // Contenus les moins appréciés (note moyenne <= 2)
        $leastLikedContents = Contenu::withAvg('commentaires', 'note')
             ->having('commentaires_avg_note', '<=', 2)
            ->orderBy('commentaires_avg_note', 'asc')
            ->take(3)           
            ->get();

        // Utilisateurs les plus actifs (nb contenus publiés)
        $topUsers = User::withCount('contenus')
            ->orderBy('contenus_count','desc')
            ->take(3)
            ->get();

        // -----------------------------
        // Retour de la vue
        // -----------------------------
        return view('admin.home', compact(
            'counts',
            'latestUsers',
            'latestMedias',
            'latestCommentaires',
            'recentChanges',
            'contenusByDay',
            'languesParRegion',
            'topTypeContenuData',
            'mostLikedContents',
            'leastLikedContents',
            'topUsers'
        ));
    }
}
