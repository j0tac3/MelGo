<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            // Definicion de las columnas
            $table->bigIncrements('regionID');
            $table->string('regionName',50);
            $table->string('regionDesc',500);
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('regionID');
            $table->unique('regionName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
