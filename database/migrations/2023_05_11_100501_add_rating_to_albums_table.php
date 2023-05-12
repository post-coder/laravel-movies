<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            // aggiungi una colonna
            $table->tinyInteger('rating')->nullable()->after('is_published');
            $table->string('language', 2)->nullable()->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            // rimuovi quella colonna
            $table->dropColumn('rating');
            $table->dropColumn('language');
        });
    }
};
