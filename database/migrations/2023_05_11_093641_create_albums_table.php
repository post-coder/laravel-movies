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
        Schema::create('albums', function (Blueprint $table) {

            $table->id();

            $table->string('title', 100);
            $table->string('artist');
            $table->string('cover')->nullable();
            $table->tinyInteger('number_of_songs')->nullable();
            $table->string('total_length', 7)->nullable();
            $table->year('release_year')->nullable();
            $table->string('genres');
            $table->string('producer')->nullable();
            $table->boolean('is_published');

            // questa espressione genererà due colonne: created_at e updated_at
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
};
