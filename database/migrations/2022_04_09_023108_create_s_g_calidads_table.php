<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSGCalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_g_calidads', function (Blueprint $table) {

            $table->integerIncrements('id_sg_calidad');
            $table->string('determinacion_requisitos_productos_servicios',4);
            $table->string('establecimiento_metodos',4);
            $table->string('procesos_contratados_externamente',4);
            $table->string('planificacion_procesos',4);
            $table->string('planificacion_cambios',4);
            $table->string('informacion_productos',4);
            $table->string('contratos',4);
            $table->string('retroalimentacion',4);
            $table->string('propiedad_cliente',4);
            $table->string('consultas',4);
            $table->string('pedidos',4);
            $table->string('pqrsf',4);
            $table->string('contingencias',4);
            $table->string('especificados_por_el_cliente',4);
            $table->string('especificados_por_la_organzacion',4);
            $table->string('diferencias_contrato',4);
            $table->string('registro_revision',4);
            $table->string('necesarios_para_uso_especificado',4);
            $table->string('legales_reglamentarios',4);
            $table->string('cambios_en_producto',4);
            $table->string('revision',4);
            $table->string('verificacion',4);
            $table->string('validacion',4);
            $table->string('entradas',4);
            $table->string('controles_diseno_desarrollo',4);
            $table->string('salidas',4);
            $table->string('cambios_diseno',4);
            $table->string('registros_diseno',4);
            $table->string('investigacion_desarrollo_innovacion',4);
            $table->string('proceso_compras',4);
            $table->string('seleccion_proveedores',4);
            $table->string('registros_control',4);
            $table->string('evaluacion_proveedores',4);
            $table->string('reevaluacion_proveedores',4);
            $table->string('informacion_documentada',4);
            $table->string('recursos_seguimiento_medicion',4);
            $table->string('actividades_seguimiento_medicion',4);
            $table->string('infraestructura',4);
            $table->string('personas_competentes',4);
            $table->string('validacion_revalidacion_capacidad',4);
            $table->string('prevenir_errores_humanos',4);
            $table->string('acciones_liberacion_entrega_pos',4);
            $table->string('productos_servicios',4);
            $table->string('actividades',4);
            $table->string('preservacion',4);
            $table->string('actividades_posteriores_entrega',4);
            $table->string('planificacion_cambios_produccion',4);
            $table->string('identificacion',4);
            $table->string('trazabilidad',4);
            $table->string('registros_requeridos_identificacion_trazabilidad',4);
            $table->string('propiedad_clientes',4);
            $table->string('propiedad_proveedores_externos',4);
            $table->string('registros_notificaciones_sobre_estado',4);
            $table->string('liberacion',4);
            $table->string('responsable',4);
            $table->string('evidencia_conformidad_criterios_aceptacion',4);
            $table->string('procedimiento_control_no_conforme',4);
            $table->string('control_no_conforme',4);
            $table->string('registros_requeridos_control',4);
            $table->string('identificacion_no_conforme',4);
            $table->string('accion_tomada',4);

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
        Schema::dropIfExists('s_g_calidads');
    }
}
