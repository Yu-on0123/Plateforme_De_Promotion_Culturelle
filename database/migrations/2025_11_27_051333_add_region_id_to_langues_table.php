<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegionIdToLanguesTable extends Migration
{
    public function up(): void
    {
        Schema::table('langues', function (Blueprint $table) {
            $table->unsignedBigInteger('region_id')->nullable()->after('id');
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('langues', function (Blueprint $table) {
            // $table->dropForeign(['region_id']);
            $table->dropColumn('region_id');
        });
    }
}
