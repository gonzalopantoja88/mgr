<?php

namespace App\Http\Controllers;

use App\Models\SGSst;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SGSstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.sst');
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
        $sgsst = new SGSst();
        $sgsst->profesional_con_licencia_sst = $request->profesionalconlicenciaensst ? $request->profesionalconlicenciaensst : "no"; 
        $sgsst->facilitador_asistente = $request->facilitadorasistente ? $request->facilitadorasistente : "no"; 
        $sgsst->i = $request->i ? $request->i : "no"; 
        $sgsst->ii = $request->ii ? $request->ii : "no"; 
        $sgsst->iii = $request->iii ? $request->iii : "no"; 
        $sgsst->iv = $request->iv ? $request->iv : "no"; 
        $sgsst->v = $request->v ? $request->v : "no"; 
        $sgsst->conformacion_capacitacion_copasst = $request->conformacionycapacitaciondelcopasstvigia ? $request->conformacionycapacitaciondelcopasstvigia : "no"; 
        $sgsst->conformacio_comite_convivencia_laboral = $request->conformaciondelcomitedeconvivencialaboral ? $request->conformaciondelcomitedeconvivencialaboral : "no"; 
        $sgsst->programa_capacitacion_anualsst = $request->programadecapacitacionanualsst ? $request->programadecapacitacionanualsst : "no"; 
        $sgsst->induccion_reinduccion_sst = $request->induccionyreinduccionensst ? $request->induccionyreinduccionensst : "no"; 
        $sgsst->matriz_legalsst = $request->matrizlegalsst ? $request->matrizlegalsst : "no"; 
        $sgsst->reporte_accidentes_enfermedad_laboral = $request->reportedeaccidentesyenfermedadlaboral ? $request->reportedeaccidentesyenfermedadlaboral : "no"; 
        $sgsst->frecuencia_accidentalidad = $request->frecuenciadeaccidentalidad ? $request->frecuenciadeaccidentalidad : "no"; 
        $sgsst->proporcion_accidente_trabajo_mortales = $request->proporciondeaccidentedetrabajomortales ? $request->proporciondeaccidentedetrabajomortales : "no"; 
        $sgsst->ausentismo_porcausa_medica = $request->ausentismoporcausamedica ? $request->ausentismoporcausamedica : "no"; 
        $sgsst->investigacion_accidentes_trabajo = $request->investigaciondeincidentesaccidentesdetrabajoyenfermedadlaboral ? $request->investigaciondeincidentesaccidentesdetrabajoyenfermedadlaboral : "no"; 
        $sgsst->severidad_accidentalidad = $request->severidaddeaccidentalidad ? $request->severidaddeaccidentalidad : "no"; 
        $sgsst->prevalencia_enfermedad_laboral = $request->prevalenciadelaenfermedadlaboral ? $request->prevalenciadelaenfermedadlaboral : "no"; 
        $sgsst->biologico = $request->biologico ? $request->biologico : "no"; 
        $sgsst->fisico = $request->fisico ? $request->fisico : "no"; 
        $sgsst->quimico = $request->quimico ? $request->quimico : "no"; 
        $sgsst->psicosocial = $request->psicosocial ? $request->psicosocial : "no"; 
        $sgsst->biomecanico = $request->biomecanico ? $request->biomecanico : "no"; 
        $sgsst->condiciones_seguridad = $request->condicionesdeseguridad ? $request->condicionesdeseguridad : "no"; 
        $sgsst->fenomenos_naturales = $request->fenomenosnaturales ? $request->fenomenosnaturales : "no"; 
        $sgsst->aplicacion_medidas_parte_trabajadores = $request->aplicaciondemedidasporpartedelostrabajadores ? $request->aplicaciondemedidasporpartedelostrabajadores : "no"; 
        $sgsst->procedimientos_instructivos = $request->procedimientoseinstructivos ? $request->procedimientoseinstructivos : "no"; 
        $sgsst->inspecciones_maquinaria_equipo = $request->inspeccionesamaquinariayequipo ? $request->inspeccionesamaquinariayequipo : "no"; 
        $sgsst->mantenimiento_periodico = $request->mantenimientoperiodico ? $request->mantenimientoperiodico : "no"; 
        $sgsst->entrega_epp = $request->entregadeepp ? $request->entregadeepp : "no"; 
        $sgsst->plan_prevencion_ante_emergencias = $request->plandeprevencionpreparacionyrespuestaanteemergencias ? $request->plandeprevencionpreparacionyrespuestaanteemergencias : "no"; 
        $sgsst->brigada_preparacion_respuesta_ante_emergencias = $request->brigadadeprevencionpreparacionyrespuestaanteemergencias ? $request->brigadadeprevencionpreparacionyrespuestaanteemergencias : "no"; 
        $sgsst->plan_recarga_extintores = $request->planderecargaaextintores ? $request->planderecargaaextintores : "no"; 
        $sgsst->perfiles_cargo = $request->perfilesdecargo ? $request->perfilesdecargo : "no"; 
        $sgsst->evaluaciones_medicas_ingreso_periodico_egreso = $request->evaluacionesmedicasocupacionalesingresoperiodicoyegreso ? $request->evaluacionesmedicasocupacionalesingresoperiodicoyegreso : "no"; 
        $sgsst->estilos_vida_entorno_saludable = $request->estilosdevidayentornosaludable ? $request->estilosdevidayentornosaludable : "no"; 
        $sgsst->restricciones_recomendaciones_medico_laborales = $request->restriccionesyrecomendacionesmedicolaborales ? $request->restriccionesyrecomendacionesmedicolaborales : "no"; 
        $sgsst->politica_seguridad_salud_trabajo = $request->politicadeseguridadysaludeneltrabajo ? $request->politicadeseguridadysaludeneltrabajo : "no"; 
        $sgsst->objetivos_sst = $request->objetivosdesst ? $request->objetivosdesst : "no"; 
        $sgsst->evaluacion_inicial_sgsst = $request->evaluacioninicialdelsgsst ? $request->evaluacioninicialdelsgsst : "no"; 
        $sgsst->plan_anual_trabajo = $request->plananualdetrabajo ? $request->plananualdetrabajo : "no"; 
        $sgsst->archivo_retencion_documental_sst = $request->archivoyretenciondocumentalsst ? $request->archivoyretenciondocumentalsst : "no"; 
        $sgsst->rendicion_cuentas = $request->rendiciondecuentas ? $request->rendiciondecuentas : "no"; 
        $sgsst->mecanismos_comunicacion = $request->mecanismosdecomunicacion ? $request->mecanismosdecomunicacion : "no"; 
        $sgsst->evaluacion_seleccion_proveedores_contratistas = $request->evaluacionyselecciondeproveedoresycontratistas ? $request->evaluacionyselecciondeproveedoresycontratistas : "no"; 
        $sgsst->gestion_cambio = $request->gestiondelcambio ? $request->gestiondelcambio : "no"; 
        $sgsst->auditoria_anual = $request->auditoriaanual ? $request->auditoriaanual : "no"; 
        $sgsst->revision_alta_direccion = $request->revisionporlaaltadireccion ? $request->revisionporlaaltadireccion : "no"; 
        $sgsst->plan_mejoramiento = $request->plandemejoramiento ? $request->plandemejoramiento : "no"; 
        $sgsst->estructura = $request->estructura ? $request->estructura : "no"; 
        $sgsst->proceso = $request->proceso ? $request->proceso : "no"; 
        $sgsst->resultado = $request->resultado ? $request->resultado : "no"; 

        $sgsst->save();
        return redirect()->route('sgsst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SGSst  $sGSst
     * @return \Illuminate\Http\Response
     */
    public function show(SGSst $sGSst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SGSst  $sGSst
     * @return \Illuminate\Http\Response
     */
    public function edit(SGSst $sGSst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SGSst  $sGSst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SGSst $sGSst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SGSst  $sGSst
     * @return \Illuminate\Http\Response
     */
    public function destroy(SGSst $sGSst)
    {
        //
    }
}
