<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_typemedia',
        'chemin',
        'description',
        'id_contenu',
    ];

    public function contenu()
    {
        return $this->belongsTo(Contenu::class, 'id_contenu');
    }

    public function typeMedia()
    {
        return $this->belongsTo(TypeMedia::class, 'id_typemedia');
    }

    protected $table = 'medias';
}
