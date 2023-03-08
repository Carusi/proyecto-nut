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
        Schema::create('admin_servicios', function (Blueprint $table) {
            $table->bigIncrements('adse_id');  
            $table->string('adse_nombre',50);                                  
            $table->longText('adse_descripcion'); 

            $table->bigInteger('adse_cat_id')->unsigned();
            $table->foreign('adse_cat_id')->references('cat_id')->on('categorias')->onDelete('cascade');

            $table->bigInteger('adse_est_id')->unsigned();
            $table->foreign('adse_est_id')->references('est_id')->on('estado_citas')->onDelete('cascade');

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
        Schema::dropIfExists('admin_servicios');
    }
};
