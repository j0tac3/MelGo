<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos', function (Blueprint $table) {
            // Definicion de las columnas
            $table->bigIncrements('type_ID');
            $table->string('typeName',50);
            $table->integer('adv_ID');
            $table->integer('dsv_ID');
            //$table->integer('res_ID');
            $table->timestamps();
            // Restricciones de la tabla
            //$table->primary('typeID');
            $table->unique('typeName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos');
    }
}
