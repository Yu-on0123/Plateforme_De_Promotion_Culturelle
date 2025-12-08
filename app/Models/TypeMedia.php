<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    protected $table = 'types_medias';

    public function medias()
    {
        return $this->hasMany(Media::class, 'id_typemedia');
    }
}
