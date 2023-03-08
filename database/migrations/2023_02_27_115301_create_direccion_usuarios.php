<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_usuarios', function (Blueprint $table) {
            $table->bigIncrements('dius_id');
            
            $table->bigInteger('dius_dir_id')->unsigned();
            $table->bigInteger('dius_usu_id')->unsigned();


            $table->foreign('dius_dir_id')->references('dir_id')->on('direccions')->onDelete('cascade');
            $table->foreign('dius_usu_id')->references('usu_id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion_usuarios');
    }
};
