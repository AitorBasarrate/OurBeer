<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurbeerDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cerveza', function (Blueprint $table) {
            $table->id('idCerveza');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('descripcion');
            $table->string('pais');
        });
        
        Schema::create('bar', function (Blueprint $table) {
            $table->id('idBar');
            $table->string('nombre');
            $table->double('latitud');
            $table->double('longitud');
            $table->string('localidad');
            $table->timestamps();
        });

        Schema::create('BarCerveza', function(Blueprint $table) {
            $table->double('precio');
            $table->unsignedBigInteger('cerveza_idCerveza');
            $table->unsignedBigInteger('bar_idBar');
            
            $table->foreign('cerveza_idCerveza')->references('idCerveza')->on('cerveza')->onDelete('cascade')->constrained();
            $table->foreign('bar_idBar')->references('idBar')->on('bar')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ourbeer_db');
    }
}
