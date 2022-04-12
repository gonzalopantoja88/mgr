<?php

namespace App\Http\Controllers;

use App\Models\SGCalidad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SGCalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.sgc');
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
