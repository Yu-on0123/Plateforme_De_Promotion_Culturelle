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
        Schema::create('types_medias', function (Blueprint $table) {
            $table->id(); // id_type auto-incrémenté, PK

            $table->enum('nom', ['image', 'document', 'audio', 'video'])->unique(); // NOT NULL + valeurs limitées

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_medias');
    }
};
