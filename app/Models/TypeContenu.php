<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeContenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    protected $table = 'types_contenus';

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'id_type');
    }
}
