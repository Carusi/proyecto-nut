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
        Schema::create('historia_alimentarias', function (Blueprint $table) {
            $table->bigIncrements('hial_id');
            $table->text('hial_alimentos_rechazados')->nullable();
            $table->text('hial_alimentos_favoritos')->nullable();
            $table->time('hial_hora_levantarse')->nullable();
            $table->time('hial_hora_acostarse')->nullable();
            $table->string('hial_ingesta_agua',100)->nullable();
            $table->text('hial_alergia_intolerancias')->nullable();

            $table->bigInteger('hial_usu_id')->unsigned();
            $table->foreign('hial_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('historia_alimentarias');
    }
};
