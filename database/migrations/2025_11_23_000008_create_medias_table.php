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
        Schema::create('medias', function (Blueprint $table) {
            $table->id(); // id_media auto-incrémenté, PK
            $table->unsignedBigInteger('id_typemedia'); // FK vers typemedias
            $table->string('chemin'); // NOT NULL
            $table->text('description'); // NOT NULL
            $table->unsignedBigInteger('id_contenu'); // FK vers contenus/produits

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id_typemedia')->references('id')->on('types_medias')->onDelete('cascade');
            $table->foreign('id_contenu')->references('id')->on('contenus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
