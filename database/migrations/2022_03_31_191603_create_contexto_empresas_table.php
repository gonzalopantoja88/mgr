<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContextoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contexto_empresas', function (Blueprint $table) {
            $table->integerIncrements('id_contexto_empresa');
            $table->string('origen_capital', 40);
            $table->string('dimension', 40);
            $table->string('objeto_social', 40);
            $table->string('sector_economico', 40);
            $table->string('opcion_sector_eco', 40);
            $table->string('propietario', 40);
            $table->string('tipo_persona', 40);
            $table->string('tangible', 40);
            $table->string('bienes', 40);
            $table->string('intangible', 40);
            $table->string('norma_tecnica', 40);
            $table->string('identificacion', 4);
            $table->string('duracion', 4);
            $table->string('ctrc_microbiologicas', 4);
            $table->string('restricciones', 4);
            $table->string('empaque', 4);
            $table->string('destino_final', 4);
            $table->string('descripcion', 4);
            $table->string('ctrc_fisicas', 4);
            $table->string('forma_uso', 4);
            $table->string('condicion_manejo', 4);
            $table->string('etiquetado', 4);
            $table->string('composicion', 4);
            $table->string('ctrc_quimica', 4);
            $table->string('usuarios_potenciales', 4);
            $table->string('condicion_conservacion', 4);
            $table->string('presentacion', 4);
            $table->string('logotipo', 4);
            $table->string('marca', 4);
            $table->string('eslogan', 4);
            $table->string('analisis_competencia', 4);
            $table->string('presupuesto_venta', 4);
            $table->string('blog', 4);
            $table->string('mercadolibre', 4);
            $table->string('olx', 4);
            $table->string('precio', 4);
            $table->string('venta_directa', 4);
            $table->string('facebook', 4);
            $table->string('amazon', 4);
            $table->string('promocion', 4);
            $table->string('web', 4);
            $table->string('instagram', 4);
            $table->string('ebay', 4);
            $table->string('servicio_cliente', 4);
            $table->string('fidelizacion_cliente', 4);
            $table->string('pqrsf', 4);
            $table->string('identificacion_cliente', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contexto_empresas');
    }
}
