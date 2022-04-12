<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSGSstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_g_ssts', function (Blueprint $table) {

            $table->integerIncrements('id_sg_sst');
            $table->string('profesional_con_licencia_sst', 4);
            $table->string('facilitador_asistente', 4);
            $table->string('i', 4);
            $table->string('ii', 4);
            $table->string('iii', 4);
            $table->string('iv', 4);
            $table->string('v', 4);
            $table->string('conformacion_capacitacion_copasst', 4);
            $table->string('conformacio_comite_convivencia_laboral', 4);
            $table->string('programa_capacitacion_anualsst', 4);
            $table->string('induccion_reinduccion_sst', 4);
            $table->string('matriz_legalsst', 4);
            $table->string('reporte_accidentes_enfermedad_laboral', 4);
            $table->string('frecuencia_accidentalidad', 4);
            $table->string('proporcion_accidente_trabajo_mortales', 4);
            $table->string('ausentismo_porcausa_medica', 4);
            $table->string('investigacion_accidentes_trabajo', 4);
            $table->string('severidad_accidentalidad', 4);
            $table->string('prevalencia_enfermedad_laboral', 4);
            $table->string('biologico', 4);
            $table->string('fisico', 4);
            $table->string('quimico', 4);
            $table->string('psicosocial', 4);
            $table->string('biomecanico', 4);
            $table->string('condiciones_seguridad', 4);
            $table->string('fenomenos_naturales', 4);
            $table->string('aplicacion_medidas_parte_trabajadores', 4);
            $table->string('procedimientos_instructivos', 4);
            $table->string('inspecciones_maquinaria_equipo', 4);
            $table->string('mantenimiento_periodico', 4);
            $table->string('entrega_epp', 4);
            $table->string('plan_prevencion_ante_emergencias', 4);
            $table->string('brigada_preparacion_respuesta_ante_emergencias', 4);
            $table->string('plan_recarga_extintores', 4);
            $table->string('perfiles_cargo', 4);
            $table->string('evaluaciones_medicas_ingreso_periodico_egreso', 4);
            $table->string('estilos_vida_entorno_saludable', 4);
            $table->string('restricciones_recomendaciones_medico_laborales', 4);
            $table->string('politica_seguridad_salud_trabajo', 4);
            $table->string('objetivos_sst', 4);
            $table->string('evaluacion_inicial_sgsst', 4);
            $table->string('plan_anual_trabajo', 4);
            $table->string('archivo_retencion_documental_sst', 4);
            $table->string('rendicion_cuentas', 4);
            $table->string('mecanismos_comunicacion', 4);
            $table->string('evaluacion_seleccion_proveedores_contratistas', 4);
            $table->string('gestion_cambio', 4);
            $table->string('auditoria_anual', 4);
            $table->string('revision_alta_direccion', 4);
            $table->string('plan_mejoramiento', 4);
            $table->string('estructura', 4);
            $table->string('proceso', 4);
            $table->string('resultado', 4);

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
        Schema::dropIfExists('s_g_ssts');
    }
}
