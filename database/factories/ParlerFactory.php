<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Parler;
use App\Models\Region;
use App\Models\Langue;

class ParlerFactory extends Factory
{
    public function definition(): array
    {
        $existants = Parler::all()->map(fn($p) => $p->id_region . '-' . $p->id_langue)->toArray();

        do {
            $region_id = Region::inRandomOrder()->first()?->id;
            $langue_id = Langue::inRandomOrder()->first()?->id;
            $key = $region_id . '-' . $langue_id;
        } while (in_array($key, $existants));

        return [
            'id_region' => $region_id,
            'id_langue' => $langue_id,
        ];
    }
}
