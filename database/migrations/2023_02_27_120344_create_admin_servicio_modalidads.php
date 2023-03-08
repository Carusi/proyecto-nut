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
        Schema::create('admin_servicio_modalidads', function (Blueprint $table) {
            $table->bigIncrements('admo_id');  

            $table->bigInteger('admo_adse_id')->unsigned();
            $table->foreign('admo_adse_id')->references('adse_id')->on('admin_servicios')->onDelete('cascade');

            $table->bigInteger('admo_mod_id')->unsigned();
            $table->foreign('admo_mod_id')->references('mod_id')->on('modalidads')->onDelete('cascade');

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
        Schema::dropIfExists('admin_servicio_modalidads');
    }
};
