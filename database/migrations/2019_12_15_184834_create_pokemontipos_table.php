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
            $table->bigIncrements('pokemonType_ID');
            $table->bigInteger('pokeNumber')->unsigned()->index();
            $table->bigInteger('type_ID')->unsigned()->index();
            $table->foreign('type_ID')->references('type_ID')->on('tipos')->onDelete('cascade');
            $table->timestamps();
        });
        /* Schema::table('pokemontipos', function ($table) {
            $table->foreign('type_ID')->references('type_ID')->on('tipos')->onDelete('cascade');
        }); */
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
