<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contenu;
use App\Models\TypeMedia;

class MediaFactory extends Factory
{
    protected $model = \App\Models\Media::class;

    public function definition(): array
    {
        return [
            'id_typemedia' => TypeMedia::inRandomOrder()->first()?->id ?? null,
            // Utiliser faker pour générer une URL d'image aléatoire (via picsum.photos)
            'chemin' => $this->faker->imageUrl(
                $width = 640,
                $height = 480
            ),
            'description' => $this->faker->sentence(6),
            'id_contenu' => Contenu::inRandomOrder()->first()?->id ?? null,
        ];
    }
}
