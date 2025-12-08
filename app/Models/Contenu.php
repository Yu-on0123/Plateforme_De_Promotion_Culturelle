<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'id_type',
        'texte',
        'date_creation',
        'statut',
        'id_auteur',
        'parent_id',
        'id_region',
        'id_langue',
        'id_moderateur',
        'date_validation',
    ];

    protected $casts = [
        'date_creation' => 'datetime',
    ];
    

    protected $table = 'contenus';

    public function auteur()
    {
        return $this->belongsTo(User::class, 'id_auteur');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region');
    }

    public function langue()
    {
        return $this->belongsTo(Langue::class, 'id_langue');
    }

    public function medias()
    {
        return $this->hasMany(Media::class, 'id_contenu');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_contenu');
    }

    public function parent()
    {
        return $this->belongsTo(Contenu::class, 'parent_id');
    }

    public function type()
    {
        return $this->belongsTo(TypeContenu::class, 'id_type');
    }
}
