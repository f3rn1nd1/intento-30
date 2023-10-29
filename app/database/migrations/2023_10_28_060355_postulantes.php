<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Postulantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('empresas_id')->nullable();
            $table->unsignedInteger('user_rut');
            $table->foreign('empresas_id')
                  ->references('id')->on('empresas')
                  ->onDelete('set null');
          
            $table->foreign('user_rut')
            ->references('rut')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('postulantes');
    }
}
