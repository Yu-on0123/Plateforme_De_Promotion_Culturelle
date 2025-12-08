<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AddAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Vérifie d'abord qu'une langue avec id=2 existe dans la table langues
        $langueId = 2;
            User::firstOrCreate(
            ['email' => 'mauricecomlanuac@.bj'], // clé unique pour éviter doublon
            [
                'nom' => 'COMLAN',
                'prenom' => 'Maurice',
                'password' => Hash::make('admin###123'),
                'role' => 'admin',
                'sexe' => 'M',
                'id_langue' => $langueId,
                'date_inscription' => now()->format('Y-m-d'),
                'date_naissance' => '1985-10-20',
                'statut' => 'actif',
                'photo' => null,
            ]
        );
        // Vérifie d'abord qu'une langue avec id=3 existe dans la table langues
        $langueId = 3;
            User::firstOrCreate(
            ['email' => 'yuahd@gmail.com'], // clé unique pour éviter doublon
            [
                'nom' => 'AHINDE',
                'prenom' => 'Yu-on',
                'password' => Hash::make('YU*1*2*3'),
                'role' => 'admin',
                'sexe' => 'M',
                'id_langue' => $langueId,
                'date_inscription' => now()->format('Y-m-d'),
                'date_naissance' => '2000-12-04',
                'statut' => 'actif',
                'photo' => null,
            ]
        );
    }
}
