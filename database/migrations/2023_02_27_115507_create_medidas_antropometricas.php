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
        Schema::create('medidas_antropometricas', function (Blueprint $table) {
            $table->bigIncrements('med_id');
            $table->decimal('med_peso',6)->nullable();
            $table->decimal('med_talla',6)->nullable();
            $table->decimal('med_imc',6)->nullable();
            $table->decimal('med_circunferencia_cintura',6)->nullable();
            $table->decimal('med_circunferencia_muñeca',6)->nullable();

            $table->bigInteger('med_usu_id')->unsigned();
            $table->foreign('med_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('medidas_antropometricas');
    }
};
