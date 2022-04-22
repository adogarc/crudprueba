<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('idDetalle');
            $table->bigInteger('idReceta')->unsigned();
            $table->bigInteger('idMedicamento')->unsigned();
            $table->bigInteger('cantidad')->nullable()->default(12);
            $table->timestamps();

            $table->foreign('idReceta')->references('idReceta')->on('recetas')->onDelete('cascade');
            $table->foreign('idMedicamento')->references('idMedicamento')->on('medicamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
