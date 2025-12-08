<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    /**
     * Redirige selon le rôle UNIQUEMENT quand nécessaire
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $role = $user->role;

        // Route cible
        $route = $request->route()->getName();

        // Dashboards spécifiques - SEULEMENT les routes de dashboard
        $dashboards = [
            'admin'   => 'admin.dashboard',
            'manager' => 'manager.dashboard',
            'user'    => 'user.dashboard',
        ];

        // Cas 1 → POST du bouton "Continuer" de welcome
        if ($route === 'welcome.redirect') {
            return redirect()->route($dashboards[$role]);
        }

        // Cas 2 → Accès direct à un dashboard non autorisé
        // UNIQUEMENT si c'est une route de dashboard
        if (in_array($route, array_values($dashboards))) {
            if ($dashboards[$role] !== $route) {
                return redirect()->route($dashboards[$role])
                    ->with('error', 'Accès non autorisé.');
            }
        }

        // Pour toutes les autres routes, laisser passer
        return $next($request);
    }
}