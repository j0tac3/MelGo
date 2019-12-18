<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('pokemons', function (Blueprint $table) {
             // Definicio de las columnas
             $table->bigInteger('pokeNumber',10)->unsigned();
             $table->string('pokeName',50);
             $table->string('pokeDesc',500);
             $table->string('pokeHeight',20);
             $table->string('pokeWeight',20);
             $table->enum('sexo',['chico','chica','sin']);
             $table->bigInteger('preEvolution');
             $table->bigInteger('evolution');
             $table->string('image',50);
             $table->boolean('activeGo');
             $table->boolean('activeGoShiny');
             $table->timestamps();
             // Restricciones de la tabla
             $table->unique('pokeName');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
