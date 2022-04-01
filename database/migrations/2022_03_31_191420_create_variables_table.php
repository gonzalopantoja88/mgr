<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables', function (Blueprint $table) {
            $table->smallIncrements('id_variable');
            $table->string('nombre_variable', 100);
            $table->tinyInteger('id_fk_sistema_asociado')->unsigned();
            $table->foreign('id_fk_sistema_asociado')->references('id_sistema_asociado')->on('sistema_asociados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variables');
    }
}
