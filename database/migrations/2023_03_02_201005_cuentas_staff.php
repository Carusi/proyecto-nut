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
        Schema::create('cuentas_staff', function (Blueprint $table){

            $table->bigIncrements('cue_id');
            $table->string('cue_nombre',25);
            $table->string('cue_apellido',25);
            $table->string('cue_correo',45);
            $table->timestamp('cue_correo_verified_at')->nullable();
            $table->string('cue_password');
            $table->rememberToken();
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
        Schema::dropIfExists('cuentas_staff');
    }
};
