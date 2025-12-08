<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Region;

class RegionPolicy
{
    /**
     * Autorise uniquement les administrateurs
     */
    private function isAdmin(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Voir toutes les régions
     */
    public function viewAny(User $user): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Voir une région
     */
    public function view(User $user, Region $region): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Créer une région
     */
    public function create(User $user): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Mettre à jour une région
     */
    public function update(User $user, Region $region): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Supprimer une région
     */
    public function delete(User $user, Region $region): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Restaurer une région
     */
    public function restore(User $user, Region $region): bool
    {
        return $this->isAdmin($user);
    }

    /**
     * Supprimer définitivement une région
     */
    public function forceDelete(User $user, Region $region): bool
    {
        return $this->isAdmin($user);
    }
}
