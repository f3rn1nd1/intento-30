<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Educaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educaciones', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedInteger('user_rut');
            $table->string('titulo',30);
            $table->string('tipo_estudio',30);
            $table->string('universidad',30);
            $table->date('fecha_obtencion');
            $table->foreign('user_rut')
            ->references('rut')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educaciones');
    }
}
