<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('types_medias', function (Blueprint $table) {
            $table->string('nom')->default(null)->change();
        });
    }

    public function down(): void
    {
        Schema::table('types_medias', function (Blueprint $table) {
            $table->string('nom')->default('ValeurParDefaut')->change();
        });
    }
};
