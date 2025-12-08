<?php 

namespace App\Policies;

use App\Models\User;
use App\Models\Langue;

class LanguePolicy
{
    /**
     * Voir toutes les langues
     */
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Voir une langue
     */
    public function view(User $user, Langue $langue): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Créer une langue
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Mettre à jour une langue
     */
    public function update(User $user, Langue $langue): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Supprimer une langue
     */
    public function delete(User $user, Langue $langue): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Restaurer une langue
     */
    public function restore(User $user, Langue $langue): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Supprimer définitivement une langue
     */
    public function forceDelete(User $user, Langue $langue): bool
    {
        return $user->role === 'admin';
    }
}
