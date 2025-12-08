<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Langue;
use App\Models\Region;
use App\Models\TypeContenu;
use App\Models\TypeMedia;
use App\Models\User;
use App\Models\Contenu;
use App\Models\Commentaire;
use App\Models\Media;
use App\Models\Parler;

class CultureSeeder extends Seeder
{
    public function run(): void
    {
        // 🔹 Roles : repartir à zéro
        Role::truncate();
        Role::insert([
            ['nom_role' => 'manager', 'created_at' => now(), 'updated_at' => now()],
            ['nom_role' => 'user', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 🔹 Langues : éviter les doublons
        $langues = [
            ['nom' => 'Français', 'code' => 'FR'],
            ['nom' => 'Anglais',  'code' => 'EN'],
            ['nom' => 'Fon',      'code' => 'FON'],
            ['nom' => 'Yoruba',   'code' => 'YO'],
            ['nom' => 'Dendi',    'code' => 'DEN'],
            ['nom' => 'Goun',     'code' => 'GOU'],
            ['nom' => 'Bariba',   'code' => 'BA'],
            ['nom' => 'Adja',     'code' => 'ADJ'],
            ['nom' => 'Mina',     'code' => 'MIN'],
            ['nom' => 'Baatonou', 'code' => 'BT'],
            ['nom' => 'Fulfulde', 'code' => 'FUL'],
            ['nom' => 'Nagot',    'code' => 'NAG'],
            ['nom' => 'Ditamari', 'code' => 'DIT'],
            ['nom' => 'Anufo',    'code' => 'ANF'],
            ['nom' => 'Hausa',    'code' => 'HA'],
        ];

        foreach ($langues as $l) {
            Langue::firstOrCreate(
                ['nom' => $l['nom']], // unique
                [
                    'code_langue' => $l['code'],
                    'description' => fake()->sentence(6),
                    'region_id'   => Region::inRandomOrder()->first()?->id ?? null,
                ]
            );
        }

        // 🔹 Types de contenus
        $typesContenus = ['Article', 'Vidéo', 'Podcast', 'Photo', 'Infographie', 'Interview', 'Annonce', 'Événement', 'Guide', 'Tutoriel'];
        foreach ($typesContenus as $tc) {
            TypeContenu::firstOrCreate(['nom' => $tc]);
        }

        // 🔹 Types de médias
        $typesMedias = ['Image', 'Vidéo', 'Audio', 'Document', 'Lien'];
        foreach ($typesMedias as $tm) {
            TypeMedia::firstOrCreate(['nom' => $tm]);
        }

        // 🔹 Factories classiques
        Region::factory()->count(12)->create();
        User::factory()->count(12)->create();
        Contenu::factory()->count(13)->create();
        Media::factory()->count(19)->create();
        Commentaire::factory()->count(23)->create();
        Parler::factory()->count(18)->create();
    }
}
