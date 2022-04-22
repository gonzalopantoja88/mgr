<?php

namespace App\Http\Controllers;

use App\Models\SGCalidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SGCalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('view.sgc',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sgc = new SGCalidad();
        $sgc->determinacion_requisitos_productos_servicios = $request->determinacionrequisitosdeproductosservicios ? $request->determinacionrequisitosdeproductosservicios : "no";
        $sgc->establecimiento_metodos = $request->establecimientodemetodos ? $request->establecimientodemetodos : "no";
        $sgc->procesos_contratados_externamente = $request->procesoscontratadosexternamente ? $request->procesoscontratadosexternamente : "no";
        $sgc->planificacion_procesos = $request->planificaciondeprocesos ? $request->planificaciondeprocesos : "no";
        $sgc->planificacion_cambios = $request->planificacioncambios ? $request->planificacioncambios : "no";
        $sgc->informacion_productos = $request->informaciondeproductos ? $request->informaciondeproductos : "no";
        $sgc->contratos = $request->contratos ? $request->contratos : "no";
        $sgc->retroalimentacion = $request->retroalimentacion ? $request->retroalimentacion : "no";
        $sgc->propiedad_cliente = $request->propiedaddelcliente ? $request->propiedaddelcliente : "no";
        $sgc->consultas = $request->consultas ? $request->consultas : "no";
        $sgc->pedidos = $request->pedidos ? $request->pedidos : "no";
        $sgc->pqrsf = $request->pqrsf ? $request->pqrsf : "no";
        $sgc->contingencias = $request->contingencias ? $request->contingencias : "no";
        $sgc->especificados_por_el_cliente = $request->especificadosporelcliente ? $request->especificadosporelcliente : "no";
        $sgc->especificados_por_la_organzacion = $request->especificadosporlaorganzacion ? $request->especificadosporlaorganzacion : "no";
        $sgc->diferencias_contrato = $request->diferenciasenelcontrato ? $request->diferenciasenelcontrato : "no";
        $sgc->registro_revision = $request->registroderevision ? $request->registroderevision : "no";
        $sgc->necesarios_para_uso_especificado = $request->necesariosparaelusoespecificado ? $request->necesariosparaelusoespecificado : "no";
        $sgc->legales_reglamentarios = $request->legalesreglamentarios ? $request->legalesreglamentarios : "no";
        $sgc->cambios_en_producto = $request->cambiosenelproducto ? $request->cambiosenelproducto : "no";
        $sgc->revision = $request->revision ? $request->revision : "no";
        $sgc->verificacion = $request->verificacion ? $request->verificacion : "no";
        $sgc->validacion = $request->validacion ? $request->validacion : "no";
        $sgc->entradas = $request->entradas ? $request->entradas : "no";
        $sgc->controles_diseno_desarrollo = $request->controlesaldisenoydesarrollo ? $request->controlesaldisenoydesarrollo : "no";
        $sgc->salidas = $request->salidas ? $request->salidas : "no";
        $sgc->cambios_diseno = $request->cambioseneldiseno ? $request->cambioseneldiseno : "no";
        $sgc->registros_diseno = $request->registrosdediseno ? $request->registrosdediseno : "no";
        $sgc->investigacion_desarrollo_innovacion = $request->investigaciondesarrolloeinnovacion ? $request->investigaciondesarrolloeinnovacion : "no";
        $sgc->proceso_compras = $request->procesodecompras ? $request->procesodecompras : "no";
        $sgc->seleccion_proveedores = $request->selecciondeproveedores ? $request->selecciondeproveedores : "no";
        $sgc->registros_control = $request->registrosdecontrol ? $request->registrosdecontrol : "no";
        $sgc->evaluacion_proveedores = $request->evaluaciondeproveedores ? $request->evaluaciondeproveedores : "no";
        $sgc->reevaluacion_proveedores = $request->reevaluaciondeproveedores ? $request->reevaluaciondeproveedores : "no";
        $sgc->informacion_documentada = $request->informaciondocumentada ? $request->informaciondocumentada : "no";
        $sgc->recursos_seguimiento_medicion = $request->recursosdeseguimientoymedicion ? $request->recursosdeseguimientoymedicion : "no";
        $sgc->actividades_seguimiento_medicion = $request->actividadesdeseguimientoymedicion ? $request->actividadesdeseguimientoymedicion : "no";
        $sgc->infraestructura = $request->infraestructura ? $request->infraestructura : "no";
        $sgc->personas_competentes = $request->personascompetentes ? $request->personascompetentes : "no";
        $sgc->validacion_revalidacion_capacidad = $request->validacionyrevalidacioncapacidad ? $request->validacionyrevalidacioncapacidad : "no";
        $sgc->prevenir_errores_humanos = $request->prevenirerroreshumanos ? $request->prevenirerroreshumanos : "no";
        $sgc->acciones_liberacion_entrega_pos = $request->accionesdeliberacionentregayposterioresalaentrega ? $request->accionesdeliberacionentregayposterioresalaentrega : "no";
        $sgc->productos_servicios = $request->productosservicios ? $request->productosservicios : "no";
        $sgc->actividades = $request->actividades ? $request->actividades : "no";
        $sgc->preservacion = $request->preservacion ? $request->preservacion : "no";
        $sgc->actividades_posteriores_entrega = $request->actividadesposterioresalasentrega ? $request->actividadesposterioresalasentrega : "no";
        $sgc->planificacion_cambios_produccion = $request->planificacioncambiosenlaproduccion ? $request->planificacioncambiosenlaproduccion : "no";
        $sgc->identificacion = $request->identificacion ? $request->identificacion : "no";
        $sgc->trazabilidad = $request->trazabilidad ? $request->trazabilidad : "no";
        $sgc->registros_requeridos_identificacion_trazabilidad = $request->registrosrequeridosdeidentificacionytrazabilidad ? $request->registrosrequeridosdeidentificacionytrazabilidad : "no";
        $sgc->propiedad_clientes = $request->propiedaddelosclientes ? $request->propiedaddelosclientes : "no";
        $sgc->propiedad_proveedores_externos = $request->propiedadproveedoresexternos ? $request->propiedadproveedoresexternos : "no";
        $sgc->registros_notificaciones_sobre_estado = $request->registrosdenotificacionessobreelestado ? $request->registrosdenotificacionessobreelestado : "no";
        $sgc->liberacion = $request->liberacion ? $request->liberacion : "no";
        $sgc->responsable = $request->responsable ? $request->responsable : "no";
        $sgc->evidencia_conformidad_criterios_aceptacion = $request->evidenciadeconformidadconloscriteriosdeaceptacion ? $request->evidenciadeconformidadconloscriteriosdeaceptacion : "no";
        $sgc->procedimiento_control_no_conforme = $request->procedimientodelcontroldelnoconforme ? $request->procedimientodelcontroldelnoconforme : "no";
        $sgc->control_no_conforme = $request->controldelnoconforme ? $request->controldelnoconforme : "no";
        $sgc->registros_requeridos_control = $request->registrosrequeridosdecontrol ? $request->registrosrequeridosdecontrol : "no";
        $sgc->identificacion_no_conforme = $request->identificaciondelnoconforme ? $request->identificaciondelnoconforme : "no";
        $sgc->accion_tomada = $request->acciontomada ? $request->acciontomada : "no";

        $sgc->save();
        return redirect()->route('sgc');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SGCalidad  $sGCalidad
     * @return \Illuminate\Http\Response
     */
    public function show(SGCalidad $sGCalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SGCalidad  $sGCalidad
     * @return \Illuminate\Http\Response
     */
    public function edit(SGCalidad $sGCalidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SGCalidad  $sGCalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SGCalidad $sGCalidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SGCalidad  $sGCalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(SGCalidad $sGCalidad)
    {
        //
    }
}
