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
        Schema::create('regions', function (Blueprint $table) {
            $table->id(); // id_region automatiquement PK, AI

            $table->string('nom')->unique();     // NOT NULL + UNIQUE
            $table->text('description');         // NOT NULL
            $table->unsignedBigInteger('population');   // NOT NULL
            $table->unsignedBigInteger('superficie');   // NOT NULL
            $table->string('localisation');      // NOT NULL

            $table->timestamps(); // created_at / updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
