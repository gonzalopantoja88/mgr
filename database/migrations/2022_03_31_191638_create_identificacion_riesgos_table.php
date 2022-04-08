<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificacionRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificacion_riesgos', function (Blueprint $table) {
            $table->integerIncrements('id_riesgo');
            $table->string('tipo', 40);
            $table->string('proceso', 200);
            $table->string('objetivo', 200);
            $table->string('actividad_critica', 200);
            $table->string('sistema_asociado', 40);
            $table->string('variable', 100);
            $table->string('factor_riesgo', 40);
            $table->string('riesgo', 200);
            $table->string('descripcion', 200);
            $table->string('causa_raiz', 200);
            $table->string('consecuencias', 200);
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
        Schema::dropIfExists('identificacion_riesgos');
    }
}
