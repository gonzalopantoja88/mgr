<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanAccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_accions', function (Blueprint $table) {
            $table->integerIncrements('id_plan_accion');
            $table->string('acciones');
            $table->string('responsables');
            $table->date('fecha_inicio');
            $table->date('fecha_terminacion');
            $table->string('indicador');
            $table->string('meta');
            $table->string('seguimiento');
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
        Schema::dropIfExists('plan_accions');
    }
}
