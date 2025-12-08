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
        Schema::create('contenus', function (Blueprint $table) {
            $table->id(); // id_contenu auto-incrémenté, PK
            $table->string('titre'); // NOT NULL
            $table->unsignedBigInteger('id_type'); // FK vers types_contenus
            $table->text('texte'); // NOT NULL
            $table->date('date_creation')->nullable()->default(DB::raw('CURRENT_DATE')); // par défaut aujourd'hui
            $table->string('statut')->default('en_attente'); // NOT NULL

            $table->unsignedBigInteger('id_auteur'); // FK vers users
            $table->unsignedBigInteger('parent_id')->nullable(); // FK self pour contenu parent (optionnel)
            $table->unsignedBigInteger('id_region'); // FK vers regions
            $table->unsignedBigInteger('id_langue'); // FK vers langues
            $table->unsignedBigInteger('id_moderateur')->nullable(); // FK vers users (modérateur)
            $table->date('date_validation')->nullable();

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id_type')->references('id')->on('types_contenus')->onDelete('cascade');
            $table->foreign('id_auteur')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('contenus')->onDelete('set null');
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('id_langue')->references('id')->on('langues')->onDelete('cascade');
            $table->foreign('id_moderateur')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
