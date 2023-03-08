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
        Schema::create('usuario_admin_servicios', function (Blueprint $table) {
            $table->bigIncrements('usad_id');  
            $table->longText('usad_motivo_consulta');                          
            $table->longText('usad_informacion_adicional')->nullable();    


            $table->bigInteger('usad_usu_id')->unsigned();
            $table->foreign('usad_usu_id')->references('usu_id')->on('usuarios')->onDelete('cascade');

            $table->bigInteger('usad_adse_id')->unsigned();
            $table->foreign('usad_adse_id')->references('adse_id')->on('admin_servicios')->onDelete('cascade');

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
        Schema::dropIfExists('usuario_admin_servicios');
    }
};
