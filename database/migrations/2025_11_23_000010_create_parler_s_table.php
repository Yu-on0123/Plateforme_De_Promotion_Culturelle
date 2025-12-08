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
        Schema::create('parler', function (Blueprint $table) {
            $table->unsignedBigInteger('id_region'); // FK vers regions
            $table->unsignedBigInteger('id_langue'); // FK vers langues

            // Clés étrangères
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('id_langue')->references('id')->on('langues')->onDelete('cascade');

            // Clé primaire composite pour éviter les doublons
            $table->primary(['id_region', 'id_langue']);

            $table->timestamps(); // facultatif
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parler');
    }
};
