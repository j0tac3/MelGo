
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
        // Definimos los campos de la tabla PokemonRegion
        Schema::create('pokemonregions', function (Blueprint $table) {
            $table->bigIncrements('pokemonRegion_ID');
            $table->bigInteger('region_ID')->unsigned()->index();
            $table->bigInteger('pokeNumber')->unsigned()->index();
            $table->timestamps();
        });
        // Añadimos las restricciones a la tabla PokemonRegion
        Schema::table('pokemonregions', function ($table) {
            $table->foreign('region_ID')->references('region_ID')->on('regions')->onDelete('cascade');
            $table->foreign('pokeNumber')->references('pokeNumber')->on('pokemons')->onDelete('cascade');
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
