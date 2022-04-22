<?php

namespace App\Http\Controllers;

use App\Models\AnalisisValoracionRiesgo;
use App\Models\IdentificacionRiesgo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalisisValoracionRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identificacion_riesgos = IdentificacionRiesgo::all();
        $analisis_riesgos = AnalisisValoracionRiesgo::join('identificacion_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')->get();

        return view('view.analisis-valoracion-riesgo', compact('identificacion_riesgos'), compact('analisis_riesgos'));
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
        $ar = new AnalisisValoracionRiesgo();

        $id = $request->id_riesgo;
        $calf_probablididad = 'calf_probablididad_'.$id;
        $calf_impacto = 'calf_impacto_'.$id;
        $evaluacion_riesgo = 'evaluacion_riesgo_'.$id;
        $manejo_riesgo = 'manejo_riesgo_'.$id;

        $controles_existentes = 'controles_existentes_'.$id;
        $tipos_control = 'tipos_control_'.$id;
        $nueva_calf_probabilidad = 'nueva_calf_probabilidad_'.$id;
        $nueva_calf_impacto = 'nueva_calf_impacto_'.$id;
        $nueva_evaluacion_riesgo = 'nueva_evaluacion_riesgo_'.$id;
        $nuevo_manejo_riesgo = 'nuevo_manejo_riesgo_'.$id;
        $opciones_manejo = 'opciones_manejo_'.$id;

        $ar->probabilidad = $request->$calf_probablididad;
        $ar->impacto = $request->$calf_impacto;
        $ar->riesgo_inherente = $request->$evaluacion_riesgo;
        $ar->manejo_riesgo = $request->$manejo_riesgo;
        $ar->id_fk_riesgo = $request->id_riesgo;

        $ar->controles_existentes = $request->$controles_existentes;
        $ar->tipos_control = $request->$tipos_control;
        $ar->probabilidad_definitivo = $request->$nueva_calf_probabilidad;
        $ar->impacto_definitivo = $request->$nueva_calf_impacto;
        $ar->nueva_evaluacion_riesgo = $request->$nueva_evaluacion_riesgo;
        $ar->nuevo_manejo_riesgo = $request->$nuevo_manejo_riesgo;
        $ar->opciones_manejo = $request->$opciones_manejo;
        $ar->save();

        // Actualizar la tabla 'identificacion_riesgos' el campo 'calificado' a estado true
        $riesgo= IdentificacionRiesgo::where('id_riesgo', $id)->first();
        $riesgo->calificado = 1; 
        $riesgo->save();

        return redirect()->route('analisis-riesgo'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show(AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function edit(AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }
}
