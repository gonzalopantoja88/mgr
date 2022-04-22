<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisValoracionRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_valoracion_riesgos', function (Blueprint $table) {
            $table->integerIncrements('id_analisis_valoracion');
            $table->string('probabilidad', 20);
            $table->string('impacto', 20);
            $table->string('riesgo_inherente', 60);
            $table->string('manejo_riesgo', 60);
            $table->string('controles_existentes', 200);
            $table->enum('tipos_control', ["control preventivo", "control detectivo", "control correctivo"]);
            $table->string('probabilidad_definitivo', 20);
            $table->string('impacto_definitivo', 20);
            $table->string('nueva_evaluacion_riesgo', 60);
            $table->string('nuevo_manejo_riesgo', 60);
            $table->string('opciones_manejo', 60);
            $table->integer('id_fk_riesgo')->unsigned();
            $table->foreign('id_fk_riesgo')->references('id_riesgo')->on('identificacion_riesgos');
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
        Schema::dropIfExists('analisis_valoracion_riesgos');
    }
}
