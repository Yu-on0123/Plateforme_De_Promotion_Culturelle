<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'population',
        'superficie',
        'localisation',
    ];

    public function parler()
    {
        return $this->hasMany(Parler::class, 'id_region');
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'id_region');
    }

    // ✅ Relation avec les langues
    public function langues()
    {
        return $this->hasMany(Langue::class, 'region_id');
    }
}
