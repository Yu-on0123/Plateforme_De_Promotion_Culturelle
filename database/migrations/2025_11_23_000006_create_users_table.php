<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');                       // NOT NULL
            $table->string('prenom');                   // NOT NULL
            $table->string('password');                 // NOT NULL
            $table->string('role')->default('user');    // NOT NULL
            $table->enum('sexe', ['M', 'F']);           // NOT NULL

            $table->unsignedBigInteger('id_langue');    // NOT NULL
            $table->date('date_inscription')
                  ->nullable()
                  ->default(DB::raw('CURRENT_DATE'));   // CURRENT DATE PAR DEFAUT

            $table->date('date_naissance');             // NOT NULL
            $table->string('statut')->default('actif'); // NOT NULL

            $table->string('photo')->nullable();        // Seule colonne optionnelle

            $table->timestamps();

            $table->foreign('id_langue')
                ->references('id')
                ->on('langues');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
