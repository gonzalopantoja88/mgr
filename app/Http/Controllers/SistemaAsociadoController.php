<?php

namespace App\Http\Controllers;

use App\Models\SistemaAsociado;
use Illuminate\Http\Request;

class SistemaAsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sa = SistemaAsociado::all();
        return $sa;
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
     * @param  \App\Models\SistemaAsociado  $sistemaAsociado
     * @return \Illuminate\Http\Response
     */
    public function show(SistemaAsociado $sistemaAsociado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SistemaAsociado  $sistemaAsociado
     * @return \Illuminate\Http\Response
     */
    public function edit(SistemaAsociado $sistemaAsociado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SistemaAsociado  $sistemaAsociado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SistemaAsociado $sistemaAsociado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SistemaAsociado  $sistemaAsociado
     * @return \Illuminate\Http\Response
     */
    public function destroy(SistemaAsociado $sistemaAsociado)
    {
        //
    }
}
