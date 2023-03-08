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
        Schema::create('habitos_saludables', function (Blueprint $table) {
            $table->bigIncrements('hab_id');
            $table->string('hab_nombre',50)->nullable();
            
            $table->bigInteger('hab_usu_id')->unsigned();
            $table->foreign('hab_usu_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('habitos_saludables');
    }
};
