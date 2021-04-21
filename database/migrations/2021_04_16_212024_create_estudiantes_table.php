<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('tipo id');
            $table->integer('id');
            $table->string('name');
            $table->string('last name');
            $table->integer('edad');
            $table->string('genero');
            $table->integer('fijo');
            $table->integer('celular');
            $table->string('email');
            $table->string('direccion');
            $table->string('barrio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
