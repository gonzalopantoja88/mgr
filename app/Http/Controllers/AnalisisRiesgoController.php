<?php

namespace App\Http\Controllers;

use App\Models\AnalisisRiesgo;
use App\Models\IdentificacionRiesgo;
use Illuminate\Http\Request;


class AnalisisRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identificacion_riesgos = IdentificacionRiesgo::all();
        $analisis_riesgos = AnalisisRiesgo::join('identificacion_riesgos', 'analisis_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')->get();

        return view('view.analisis-riesgo', compact('identificacion_riesgos'), compact('analisis_riesgos'));
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
        $ar = new AnalisisRiesgo();

        $id = $request->id_riesgo;
        $calf_probablididad = 'calf_probablididad_'.$id;
        $calf_impacto = 'calf_impacto_'.$id;
        $evaluacion_riesgo = 'evaluacion_riesgo_'.$id;
        $manejo_riesgo = 'manejo_riesgo_'.$id;

        $ar->probabilidad = $request->$calf_probablididad;
        $ar->impacto = $request->$calf_impacto;
        $ar->riesgo_inherente = $request->$evaluacion_riesgo;
        $ar->manejo_riesgo = $request->$manejo_riesgo;
        $ar->id_fk_riesgo = $request->id_riesgo;
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
     * @param  \App\Models\AnalisisRiesgo  $analisisRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show(AnalisisRiesgo $analisisRiesgo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnalisisRiesgo  $analisisRiesgo
     * @return \Illuminate\Http\Response
     */
    public function edit(AnalisisRiesgo $analisisRiesgo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnalisisRiesgo  $analisisRiesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnalisisRiesgo $analisisRiesgo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnalisisRiesgo  $analisisRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnalisisRiesgo $analisisRiesgo)
    {
        //
    }
}
