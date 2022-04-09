<?php

namespace App\Http\Controllers;

use App\Models\IdentificacionRiesgo;
use Illuminate\Http\Request;

class IdentificacionRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.identificacion-riesgo');
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
        $ir = new IdentificacionRiesgo();

        $ir->tipo = $request->tipo_id_riesgo;
        $ir->proceso = $request->proceso_id_riesgo;
        $ir->objetivo = $request->objetivo_id_riesgo;
        $ir->actividad_critica = $request->actividad_critica_id_Riesgo;
        $ir->sistema_asociado = $request->sistema_asociado_id_riesgo;
        $ir->variable = $request->variable_id_riesgo;
        $ir->factor_riesgo = $request->factor_id_riesgo;
        $ir->riesgo = $request->riesgo_id_riesgo;
        $ir->descripcion = $request->descripcion_id_riesgo;
        $ir->causa_raiz = $request->causa_raiz_id_riesgo;
        $ir->consecuencias = $request->consecuencias_id_riesgo;

        $ir->save();
        return redirect()->route('ver-identificacion-riesgo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $ir = IdentificacionRiesgo::all();
        return $ir;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentificacionRiesgo $identificacionRiesgo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IdentificacionRiesgo $identificacionRiesgo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentificacionRiesgo $identificacionRiesgo)
    {
        //
    }

}
