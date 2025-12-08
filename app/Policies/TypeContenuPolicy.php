<?php

namespace App\Policies;

use App\Models\TypeContenu;
use App\Models\User;

class TypeContenuPolicy
{
    /**
     * Tout le monde peut voir la liste
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Tout le monde peut voir un type de contenu
     */
    public function view(User $user, TypeContenu $typeContenu): bool
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
    public function update(User $user, TypeContenu $typeContenu): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Seul l’admin peut supprimer
     */
    public function delete(User $user, TypeContenu $typeContenu): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, TypeContenu $typeContenu): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, TypeContenu $typeContenu): bool
    {
        return $user->role === 'admin';
    }
}
