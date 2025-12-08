<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Contenu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    public function definition(): array
    {
        return [
            'texte' => $this->faker->sentence(8, true),
            'note' => $this->faker->numberBetween(1, 5), // note sur 5
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'id_utilisateur' => User::inRandomOrder()->first()?->id ?? null,
            'id_contenu' => Contenu::inRandomOrder()->first()?->id ?? null,
        ];
    }
}
