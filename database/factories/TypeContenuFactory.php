<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeContenuFactory extends Factory
{
    protected $model = \App\Models\TypeContenu::class;

    protected $types = [
        'Article',
        'Vidéo',
        'Podcast',
        'Interview',
        'Tutoriel',
        'Revue',
        'Reportage',
        'Chronique',
        'Annonce',
        'Critique',
        'Dossier',
        'Analyse',
        'Infographie',
        'Galerie photo',
        'Édito',
        'Recette',
        'Événement',
        'Billet de blog',
        'Avis',
        'Newsletter'
    ];

    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement($this->types),
        ];
    }
}
