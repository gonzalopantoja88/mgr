<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaContextoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_contexto_empresas', function (Blueprint $table) {
            $table->smallIncrements('id_emp_contexto_emp');
            $table->foreignId('id_fk_empresa')->constrained('empresas');
            $table->unsignedInteger('id_fk_contexto_emp');
            $table->foreign('id_fk_contexto_emp')->references('id_contexto_empresa')->on('contexto_empresas');
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
        Schema::dropIfExists('empresa_contexto_empresas');
    }
}
