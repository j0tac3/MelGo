<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemontiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemontipos', function (Blueprint $table) {
            $table->bigIncrements('pokemonTypeID');
            $table->bigInteger('pokeNumber')->unsigned()->index();
            $table->bigInteger('typeID')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('pokemontipos', function ($table) {
            $table->foreign('typeID')->references('typeID')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemontipos');
    }
}
