<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id(); // id_commentaire auto-incrémenté, PK
            $table->text('texte'); // NOT NULL
            $table->tinyInteger('note'); // NOT NULL, par ex. 1 à 5
            $table->date('date'); // NOT NULL

            $table->unsignedBigInteger('id_utilisateur'); // FK vers users
            $table->unsignedBigInteger('id_contenu');     // FK vers contenus/produits

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_contenu')->references('id')->on('contenus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
