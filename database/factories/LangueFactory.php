<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Region;

class LangueFactory extends Factory
{
    public function definition(): array
    {
        $langues = [
            ['nom' => 'Français', 'code' => 'FR'],
            ['nom' => 'Anglais', 'code' => 'EN'],
            ['nom' => 'Fon', 'code' => 'FON'],
            ['nom' => 'Yoruba', 'code' => 'YO'],
            ['nom' => 'Dendi', 'code' => 'DEN'],
            ['nom' => 'Goun', 'code' => 'GOU'],
            ['nom' => 'Bariba', 'code' => 'BA'],
            ['nom' => 'Adja', 'code' => 'ADJ'],
            ['nom' => 'Mina', 'code' => 'MIN'],
            ['nom' => 'Baatonou', 'code' => 'BT'],
            ['nom' => 'Fulfulde', 'code' => 'FUL'],
            ['nom' => 'Nagot', 'code' => 'NAG'],
            ['nom' => 'Ditamari', 'code' => 'DIT'],
            ['nom' => 'Anufo', 'code' => 'ANF'],
            ['nom' => 'Hausa', 'code' => 'HA'],
        ];
    
        $existants = \App\Models\Langue::pluck('nom')->toArray();
        $langues_disponibles = array_values(array_filter($langues, fn($l) => !in_array($l['nom'], $existants)));
    
        if (empty($langues_disponibles)) {
            $langue = ['nom' => $this->faker->unique()->word(), 'code' => strtoupper($this->faker->lexify('???'))];
        } else {
            $langue = array_pop($langues_disponibles); // prend une langue unique
        }
    
        return [
            'nom' => $langue['nom'],
            'code_langue' => $langue['code'],
            'description' => $this->faker->sentence(6),
            'region_id' => \App\Models\Region::inRandomOrder()->first()?->id ?? null,
        ];
    }
    
    
}
