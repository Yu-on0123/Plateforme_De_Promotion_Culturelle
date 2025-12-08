<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeMediaFactory extends Factory
{
    protected $model = \App\Models\TypeMedia::class;

    protected $types = [
        'Image',
        'Vidéo',
        'Audio',
        'Document PDF',
        'Présentation',
        'GIF',
        'Capture d’écran',
        'Infographie',
        'Podcast',
        'Animation',
        'Clip musical',
        'Archive zip',
        'Fichier Word',
        'Fichier Excel',
        'Lien externe'
    ];

    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement($this->types),
        ];
    }
}
