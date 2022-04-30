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
            $table->string('intangible', 100);

            $table->string('identificacion', 4);
            $table->string('duracion', 4);
            $table->string('caracteristicasmicrobiologicas', 4);
            $table->string('restricciones', 4);
            $table->string('empaque', 4);
            $table->string('destinofinal', 4);
            $table->string('descripcion', 4);
            $table->string('caracteristicasfisicas', 4);
            $table->string('formasdeuso', 4);
            $table->string('condicionesdemanejo', 4);
            $table->string('etiquetado', 4);
            $table->string('composicion', 4);
            $table->string('caracteristicasquimicas', 4);
            $table->string('usuariospotenciales', 4);
            $table->string('condicionesdeconservacion', 4);
            $table->string('presentacion', 4);

            $table->string('logotipo', 4);
            $table->string('marca', 4);
            $table->string('eslogan', 4);
            $table->string('norma_tecnica', 40);

            $table->string('analisisdelacompetencia', 4);
            $table->string('presupuestodeventas', 4);
            $table->string('blog', 4);
            $table->string('mercadolibre', 4);
            $table->string('olx', 4);
            $table->string('precio', 4);
            $table->string('ventadirecta', 4);
            $table->string('facebook', 4);
            $table->string('amazon', 4);
            $table->string('promocion', 4);
            $table->string('web', 4);
            $table->string('instagram', 4);
            $table->string('ebay', 4);

            $table->string('servicioalcliente', 4);
            $table->string('fidelizaciondeclientes', 4);
            $table->string('pqrsf', 4);
            $table->string('identificacionclientes', 4);
            
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
        Schema::dropIfExists('contexto_empresas');
    }
}
