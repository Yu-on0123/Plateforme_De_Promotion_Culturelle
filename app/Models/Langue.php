<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'code_langue',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_langue');
    }

    public function parler()
    {
        return $this->hasMany(Parler::class, 'id_langue');
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'id_langue');
    }
}
