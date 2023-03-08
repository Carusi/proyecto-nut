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
        Schema::create('anamesis_aumentarias', function (Blueprint $table) {
            $table->bigIncrements('anau_id');
            $table->string('anau_desayuno',150)->nullable();
            $table->string('anau_medio_dia',150)->nullable();
            $table->string('anau_almuerzo',150)->nullable();
            $table->string('anau_media_tarde',150)->nullable();

            $table->bigInteger('anau_usu_id')->unsigned();
            $table->foreign('anau_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('anamesis_aumentarias');
    }
};
