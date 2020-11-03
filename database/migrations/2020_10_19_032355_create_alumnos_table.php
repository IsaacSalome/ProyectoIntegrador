<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_Estudiantes');
            $table->string('nombre',50);
            $table->string('apellidoPaterno',50);
            $table->string('apellidoMaterno',50);
            $table->boolean('sexo');
            $table->integer('edad');
            $table->string('calle', 100);
            $table->integer('numeroInterior');
            $table->integer('numeroExterior');
            $table->string('codigoPostal', 5);
            $table->string('localidad',100);
            $table->string('correo', 100);
            $table->string('telefono',10);
            $table->string('foto');
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
        Schema::dropIfExists('alumnos');
    }
}
