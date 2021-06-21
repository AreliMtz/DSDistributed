<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaDeCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_de_calificaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroboleta');
            $table->string('nombre');
            $table->string('apellidos');
            $table->double('calificacion1');
            $table->double('calificacion2');
            $table->double('calificacion3');
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_de_calificaciones');
    }
}
