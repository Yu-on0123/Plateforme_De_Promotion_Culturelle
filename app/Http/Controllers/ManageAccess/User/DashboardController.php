<?php

namespace App\Http\Controllers\ManageAccess\User;

use App\Http\Controllers\Controller;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Affiche le dashboard utilisateur simple
     */
    public function dashboard()
    {
        $userId = Auth::id();
        
        $stats = [
            'total_commentaires' => Commentaire::where('id_utilisateur', $userId)->count(),
            'commentaires_recents' => Commentaire::where('id_utilisateur', $userId)
                ->with(['contenu.type', 'contenu.region'])
                ->latest()
                ->limit(5)
                ->get(),
        ];
        
        return view('user.dashboard', compact('stats'));
    }
}