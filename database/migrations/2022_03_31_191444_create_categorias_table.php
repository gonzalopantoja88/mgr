<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->smallIncrements('id_categoria');
            $table->string('nombre_categoria', 100);
            $table->smallInteger('id_fk_despliegue')->unsigned();
            $table->foreign('id_fk_despliegue')->references('id_despliegue')->on('despliegues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
