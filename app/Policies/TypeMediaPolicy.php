<?php

namespace App\Policies;

use App\Models\TypeMedia;
use App\Models\User;

class TypeMediaPolicy
{
    /**
     * Tout le monde peut voir la liste
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Tout le monde peut voir un type de média
     */
    public function view(User $user, TypeMedia $typeMedia): bool
    {
        return true;
    }

    /**
     * Seul l’admin peut créer
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Seul l’admin peut modifier
     */
    public function update(User $user, TypeMedia $typeMedia): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Seul l’admin peut supprimer
     */
    public function delete(User $user, TypeMedia $typeMedia): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, TypeMedia $typeMedia): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, TypeMedia $typeMedia): bool
    {
        return $user->role === 'admin';
    }
}
