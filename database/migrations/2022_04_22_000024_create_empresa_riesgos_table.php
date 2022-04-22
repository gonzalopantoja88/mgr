<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_riesgos', function (Blueprint $table) {
            $table->smallIncrements('id_empresa_riesgo');
            $table->foreignId('id_fk_empresa')->constrained('empresas');
            $table->unsignedInteger('id_fk_riesgo');
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
        Schema::dropIfExists('empresa_riesgos');
    }
}
