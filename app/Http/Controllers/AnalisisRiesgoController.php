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
        return view('view.analisis-riesgo', compact('identificacion_riesgos'));
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
        //
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
