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
        Schema::create('historial_personal_clinicos', function (Blueprint $table) {
            $table->bigIncrements('hipe_id');
            $table->string('hipe_funcion_intestinal')->nullable();
            $table->string('hipe_actividad_fisica')->nullable();
            $table->string('hipe_niveles_estres')->nullable();
            $table->string('hipe_bebe_alcohol')->nullable();
            $table->string('hipe_fumador')->nullable();
            $table->string('hipe_calidad_sueño')->nullable();
            $table->text('hipe_informacion_adicional')->nullable();

            $table->bigInteger('hipe_usu_id')->unsigned();
            $table->foreign('hipe_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('historial_personal_clinicos');
    }
};
