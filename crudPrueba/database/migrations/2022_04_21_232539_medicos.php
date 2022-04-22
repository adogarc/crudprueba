<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('idMedico');
            $table->bigInteger('idEstablecimiento')->unsigned();
            $table->string('nombreMedico');
            $table->timestamps();

            $table->foreign('idEstablecimiento')->references('idEstablecimiento')->on('establecimientos')->onDelete('cascade');
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
