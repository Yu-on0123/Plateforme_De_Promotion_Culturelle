<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Langue;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $sexe = $this->faker->randomElement(['M', 'F']);

        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName($sexe === 'M' ? 'male' : 'female'),
            'password' => static::$password ??= Hash::make('password'),
            'role' => $this->faker->randomElement(['manager', 'user']),
            'sexe' => $sexe,
            'id_langue' => Langue::inRandomOrder()->first()?->id ?? 1, // Assure qu'il y a au moins une langue
            'date_inscription' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'date_naissance' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
            'statut' => $this->faker->randomElement(['actif', 'inactif']),
            'photo' => 'users/' . $this->faker->image('public/storage/users', 200, 200, null, false),
        ];
    }
}
