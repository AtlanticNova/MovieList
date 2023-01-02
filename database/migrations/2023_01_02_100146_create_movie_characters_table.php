<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movies_id');
            $table->foreign('movies_id')->references('id')->on('movies');
            $table->unsignedBigInteger('actors_id');
            $table->foreign('actors_id')->references('id')->on('actors');
            $table->string('characterName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_characters');
    }
}
