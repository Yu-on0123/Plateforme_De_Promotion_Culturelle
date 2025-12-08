<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'password',
        'role',
        'sexe',
        'id_langue',
        'date_inscription',
        'date_naissance',
        'statut',
        'photo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'date_inscription' => 'datetime',
            'date_naissance' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relations
    public function langue()
    {
        return $this->belongsTo(Langue::class, 'id_langue');
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'id_auteur');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_utilisateur');
    }

    // Méthodes helper
    public function isContributor()
    {
        return $this->can('is-contributor');
    }

    public function isAdmin()
    {
        return $this->can('is-admin');
    }

    public function canCreateContent()
    {
        return $this->can('create-contenu');
    }

    // Méthode pour obtenir le type d'utilisateur (pour affichage)
    public function getUserTypeAttribute()
    {
        if ($this->can('is-admin')) {
            return 'Administrateur';
        } elseif ($this->can('is-contributor')) {
            return 'Contributeur';
        } else {
            return 'Visiteur';
        }
    }

    // Méthode pour le badge de rôle (couleurs selon la palette)
    public function getRoleBadgeAttribute()
    {
        if ($this->can('is-admin')) {
            return [
                'text' => 'Admin',
                'color' => 'bg-gradient-to-r from-red-700 to-red-900',
                'icon' => 'fas fa-crown'
            ];
        } elseif ($this->can('is-contributor')) {
            return [
                'text' => 'Contributeur',
                'color' => 'bg-gradient-to-r from-yellow-600 to-yellow-800',
                'icon' => 'fas fa-pen-fancy'
            ];
        } else {
            return [
                'text' => 'Membre',
                'color' => 'bg-gradient-to-r from-gray-600 to-gray-800',
                'icon' => 'fas fa-user'
            ];
        }
    }

}


