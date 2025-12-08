<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\TypeContenu;
use App\Models\Region;
use App\Models\Langue;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contenu>
 */
class ContenuFactory extends Factory
{
    public function definition(): array
    {
        $statusOptions = ['brouillon', 'publie', 'archive'];

        return [
            'titre' => $this->faker->sentence(3, true),
            'id_type' => TypeContenu::inRandomOrder()->first()?->id ?? null,
            'texte' => $this->faker->paragraph(4, true),
            'date_creation' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'statut' => $this->faker->randomElement($statusOptions),
            'id_auteur' => User::inRandomOrder()->first()?->id ?? null,
            'parent_id' => null, // on peut créer des contenus enfants après
            'id_region' => Region::inRandomOrder()->first()?->id ?? null,
            'id_langue' => Langue::inRandomOrder()->first()?->id ?? null,
            'id_moderateur' => User::inRandomOrder()->first()?->id ?? null,
            'date_validation' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
