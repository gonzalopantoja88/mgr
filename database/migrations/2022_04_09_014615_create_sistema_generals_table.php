<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemaGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema_generals', function (Blueprint $table) {
            $table->integerIncrements('id_sistema_general');
            $table->String('estrategicos', 4);
            $table->String('misionales', 4);
            $table->String('apoyo_soporte', 4);
            $table->String('mejora', 4);
            $table->String('nombre_proceso', 4);
            $table->String('responsable', 4);
            $table->String('tipo_de_proceso', 4);
            $table->String('proveedor', 4);
            $table->String('actividad', 4);
            $table->String('cliente', 4);
            $table->String('documentos_asociados', 4);
            $table->String('medicion_seguimiento_indicador', 4);
            $table->String('recursos', 4);
            $table->String('objetivo_proceso', 4);
            $table->String('alcance', 4);
            $table->String('entrada', 4);
            $table->String('ciclo_actividad', 4);
            $table->String('salida', 4);
            $table->String('requisitos_reglamentarios', 4);
            $table->String('registros_gestion_procesos', 4);
            $table->String('riesgo_asociado', 4);
            $table->String('mision', 4);
            $table->String('filosofia', 4);
            $table->String('dofa', 4);
            $table->String('estrategias', 4);
            $table->String('seguimiento_informacionpe', 4);
            $table->String('vision', 4);
            $table->String('diagnostico', 4);
            $table->String('objetivos', 4);
            $table->String('indicadores', 4);
            $table->String('identificacion', 4);
            $table->String('definicion_requisitos', 4);
            $table->String('determinacion_necesidadesyexpectativas', 4);
            $table->String('seguimiento_informacionpi', 4);
            $table->String('organizacion', 4);
            $table->String('proceso', 4);
            $table->String('producto_servicio', 4);
            $table->String('exclusiones', 4);
            $table->String('manual_funciones', 4);
            $table->String('estructura_vertical', 4);
            $table->String('redarquica', 4);
            $table->String('compromiso', 4);
            $table->String('perfil_cargos', 4);
            $table->String('estructura_horizontal', 4);
            $table->String('politica', 4);
            $table->String('matriz_riesgos', 4);
            $table->String('matriz_desplieguede_objetivos', 4);
            $table->String('identificacion_recurso', 4);
            $table->String('toma_conciencia', 4);
            $table->String('registros_requeridos_personas', 4);
            $table->String('plan_mantenimiento', 4);
            $table->String('identificacion_recursos_medicionyseguimiento', 4);
            $table->String('plan_metrologia', 4);
            $table->String('trazabilidad_mediciones', 4);
            $table->String('procedimentos', 4);
            $table->String('listados_maestros', 4);
            $table->String('presupuestos', 4);
            $table->String('ambiente_trabajo', 4);
            $table->String('adquisicion_conocimiento', 4);
            $table->String('matriz_comunicacion', 4);
            $table->String('identificacion_necesitamedicion', 4);
            $table->String('metodos_seguimientoymedicion', 4);
            $table->String('periodo', 4);
            $table->String('cuando_analisis', 4);
            $table->String('conformidad_producto_servicio', 4);
            $table->String('satisfaccion_cliente', 4);
            $table->String('desempeno_sistema', 4);
            $table->String('eficacia_sistema', 4);
            $table->String('implementacion_sistema', 4);
            $table->String('eficacia_acciones_riesgosyoportunidades', 4);
            $table->String('desempeno_proveedores_externos', 4);
            $table->String('necesidad_mejora', 4);
            $table->String('procedimiento_auditoria_interna', 4);
            $table->String('equipo_auditor', 4);
            $table->String('programa_auditoria', 4);
            $table->String('acciones_correctivas', 4);
            $table->String('informe', 4);
            $table->String('periodo_establecido', 4);
            $table->String('entradas', 4);
            $table->String('salidas', 4);
            $table->String('registro_revision', 4);
            $table->String('procedimiento_accion_correctiva', 4);
            $table->String('accion_correctiva', 4);
            $table->String('registro_mejora', 4);
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
        Schema::dropIfExists('sistema_generals');
    }
}
