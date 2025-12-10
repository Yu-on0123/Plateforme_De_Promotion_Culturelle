<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
// Modèles
use App\Models\Langue;
use App\Models\Contenu;
use App\Models\Commentaire;
use App\Models\TypeContenu;
use App\Models\TypeMedia;

// Policies
use App\Policies\LanguePolicy;
use App\Policies\ContenuPolicy;
use App\Policies\CommentairePolicy;
use App\Policies\TypeContenuPolicy;
use App\Policies\TypeMediaPolicy;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        // Définir une Gate pour l'accès admin
        Gate::define('access-admin', function ($user) {
            return $user->role === 'admin'; // Assure-toi d'avoir un champ 'role' dans users
        });


        // Enregistrer les policies manuellement
        Gate::policy(Langue::class, LanguePolicy::class);
        Gate::policy(Contenu::class, ContenuPolicy::class);
        Gate::policy(Commentaire::class, CommentairePolicy::class);
        Gate::policy(TypeContenu::class, TypeContenuPolicy::class);
        Gate::policy(TypeMedia::class, TypeMediaPolicy::class);

    }
}
