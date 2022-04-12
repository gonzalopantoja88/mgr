<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSGAmbientalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_g_ambientals', function (Blueprint $table) {
            $table->integerIncrements('id_sg_ambiental');
            $table->string('precipitacionmm_ano_mm_mes', 4);
            $table->string('temperaturamediamaxima_minima', 4);
            $table->string('brillosolarmedio', 4);
            $table->string('humedadanualmedia', 4);
            $table->string('materialparticuladopm10_pm2_5', 4);
            $table->string('gasesco_co2_nox_so2', 4);
            $table->string('compuestosorganicosvolatilescov', 4);
            $table->string('ozonototalmensual', 4);
            $table->string('ruidoambiental', 4);
            $table->string('demandabiologicadeoxigenodbo5', 4);
            $table->string('demandaquimicadeoxigenodqo', 4);
            $table->string('solidossuspendidostotalessst', 4);
            $table->string('solidossedimentablesssed', 4);
            $table->string('solidostotalesst', 4);
            $table->string('grasasyaceites', 4);
            $table->string('ph', 4);
            $table->string('temperatura', 4);
            $table->string('disponibilidaddeagua', 4);
            $table->string('arenayroca', 4);
            $table->string('madera', 4);
            $table->string('fibrasyresinas', 4);
            $table->string('bionama', 4);
            $table->string('pescayacuicultura', 4);
            $table->string('carneypieles', 4);
            $table->string('plantasmedicinales', 4);
            $table->string('ingredientesnaturales', 4);
            $table->string('ganaderia', 4);
            $table->string('agricultura', 4);
            $table->string('areaportipodecoberturasuelohectareas', 4);
            $table->string('numerodeespeciesfaunayflora', 4);
            $table->string('conflictosdeusodelsuelo', 4);
            $table->string('fenomenosnaturales', 4);
            $table->string('manejodevertimientosdeagua', 4);
            $table->string('emisionesenelaire', 4);
            $table->string('residuossolidospeligrososyposconsumo', 4);
            $table->string('reglamentonormativoenelsuelo', 4);
            $table->string('reglamentonormativoenlaflora', 4);
            $table->string('reglamentonormativoenlafauna', 4);
            $table->string('comunidadesindigenas', 4);
            $table->string('comunidadesafrodescendientes', 4);
            $table->string('comunidadescampesinas', 4);
            $table->string('comunidadesencondiciondevulnerabilidad', 4);
            $table->string('patrimonio', 4);
            $table->string('programaderesponsabilidadsocialyambiental', 4);
            $table->string('impactoambientalenaire', 4);
            $table->string('impactoambientalenagua', 4);
            $table->string('impactoambientalensuelo', 4);
            $table->string('impactoambientalenflora', 4);
            $table->string('impactoambientalenfauna', 4);
            $table->string('educacion', 4);
            $table->string('salud', 4);
            $table->string('recreacionydeporte', 4);
            $table->string('infraestructuradetransporte', 4);
            $table->string('acueducto_alcantarillado_energiaelectrica_gasdomiciliario', 4);
            $table->string('internet_television_emisorascomunitarias', 4);
            $table->string('natalidad', 4);
            $table->string('mortalidad', 4);
            $table->string('movilidadespacial', 4);
            $table->string('estructuradelapoblacion', 4);
            $table->string('distribucionespacialurbano_rural', 4);
            $table->string('densidaddepoblacion', 4);
            $table->string('necesidadesbasicasinsatisfechasnbi', 4);
            $table->string('estructuradelapropiedad', 4);
            $table->string('empresasproductivas', 4);
            $table->string('mercadolaboral', 4);
            $table->string('tendenciasdelempleo', 4);
            $table->string('programasyproyectosproductivos', 4);
            $table->string('contextointerno', 4);
            $table->string('contextoexterno', 4);
            $table->string('accionesparaabordarriesgosyoportunidades', 4);
            $table->string('objetivosambientalesyplanificacionparalograrlos', 4);
            $table->string('politicaambiental', 4);
            $table->string('roles_responsabilidadesyautoridades', 4);
            $table->string('recursos', 4);
            $table->string('competencia', 4);
            $table->string('tomadeconciencia', 4);
            $table->string('comunicacion', 4);
            $table->string('informaciondocumentada', 4);
            $table->string('planificacionycontroloperacional', 4);
            $table->string('preparacionyrespuestaanteemergenciasambientales', 4);
            $table->string('seguimiento_medicion_analisisyevaluacion', 4);
            $table->string('auditoriainterna', 4);
            $table->string('revisionporladireccion', 4);
            $table->string('noconformidadesyaccioncorrectiva', 4);            
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
        Schema::dropIfExists('s_g_ambientals');
    }
}
