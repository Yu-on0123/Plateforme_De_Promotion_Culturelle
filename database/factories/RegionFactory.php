<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Region;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    public function definition(): array
    {
        // Récupérer tous les noms existants
        $existants = Region::pluck('nom')->toArray();

        do {
            $nom = $this->faker->city() . ' Region';
        } while (in_array($nom, $existants));

        return [
            'nom' => $nom,
            'description' => $this->faker->sentence(8),
            'population' => $this->faker->numberBetween(50000, 5000000),
            'superficie' => $this->faker->numberBetween(1000, 100000),
            'localisation' => $this->faker->city(),
        ];
    }
}
