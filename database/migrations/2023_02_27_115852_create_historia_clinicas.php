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
        Schema::create('historia_clinicas', function (Blueprint $table) {
            $table->bigIncrements('hicl_id'); 
            $table->longText('hicl_medicametos')->nullable();
            $table->longText('hicl_motivo_consulta')->nullable();
            $table->longText('hicl_antecedentes_personales')->nullable();
            $table->longText('hicl_antecedentes_familiares')->nullable();
            $table->longText('hicl_paraclinicos')->nullable();
            $table->longText('hicl_objetivos')->nullable();
            $table->longText('hicl_otras_informaciones')->nullable();

            $table->bigInteger('hicl_usu_id')->unsigned();
            $table->foreign('hicl_usu_id')->references('id')->on('users')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('historia_clinicas');
    }
};
