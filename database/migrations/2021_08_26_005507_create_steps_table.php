<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->string('autor');
            $table->string('imagenTitulo')->nullable();
            $table->string('imagenUsuario')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('descripcionLarga')->nullable();
            $table->double('meGusta')->nullable();
            $table->double('comentario')->nullable();
            $table->double('vistas')->nullable();
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
        Schema::dropIfExists('steps');
    }
}
