<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_genre', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anime_id')->unsigned();
            $table->integer('genre_id')->unsigned();

            $table->foreign('anime_id')->references('id')->on('animes');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_genre');
    }
}
