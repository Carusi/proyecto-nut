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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('usu_id');
            $table->string('usu_nombre',50);                               
            $table->string('usu_apellido',50);                            
            $table->Integer('usu_num_doc');                             
            $table->date('usu_fch_nac');                             
            $table->string('usu_eps', 20);                           
            $table->string('usu_tipo_documento', 15);              
            $table->string('usu_genero', 10);                   
            $table->string('usu_correo',200)->unique();
            $table->timestamp('correo_verified_at')->nullable();
            $table->string('password');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
};
