<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Vérifie d'abord qu'une langue avec id=1 existe dans la table langues
        $langueId = 1;

        User::firstOrCreate(
            ['email' => 'admin@example.com'], // clé unique pour éviter doublon
            [
                'nom' => 'Administrateur',
                'prenom' => 'Principal',
                'password' => Hash::make('admin12345'),
                'role' => 'admin',
                'sexe' => 'M',
                'id_langue' => $langueId,
                'date_inscription' => now()->format('Y-m-d'),
                'date_naissance' => '1980-01-01',
                'statut' => 'actif',
                'photo' => null,
            ],
        );
    }
}
