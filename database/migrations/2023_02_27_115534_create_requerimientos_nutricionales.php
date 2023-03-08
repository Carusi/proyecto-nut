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
        Schema::create('requerimientos_nutricionales', function (Blueprint $table) {
            $table->bigIncrements('req_id');
            $table->string('req_grasa',150)->nullable();
            $table->string('req_cho',150)->nullable();
            $table->string('req_proteina',150)->nullable();
            $table->string('req_macronutrientes',150)->nullable();

            $table->bigInteger('req_usu_id')->unsigned();
            $table->foreign('req_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('requerimientos_nutricionales');
    }
};
