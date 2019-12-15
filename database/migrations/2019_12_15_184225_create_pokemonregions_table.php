
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemonregions', function (Blueprint $table) {
            $table->bigIncrements('pokemonRegionID');
            $table->bigInteger('regionID')->unsigned()->index();
            $table->bigInteger('pokeNumber')->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('pokemontipos', function ($table) {
            //$table->foreign('regionID')->references('regionID')->on('regions')->onDelete('cascade');
            //$table->foreign('pokeNumber')->references('pokeNumber')->on('pokemons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemonregions');
    }
}
