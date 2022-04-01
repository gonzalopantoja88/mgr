<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesplieguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despliegues', function (Blueprint $table) {
            $table->smallIncrements('id_despliegue');
            $table->string('nombre_despliegue', 100);
            $table->smallInteger('id_fk_variable')->unsigned();
            $table->foreign('id_fk_variable')->references('id_variable')->on('variables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despliegues');
    }
}
