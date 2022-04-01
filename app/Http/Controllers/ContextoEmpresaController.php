<?php

namespace App\Http\Controllers;

use App\Models\ContextoEmpresa;
use Illuminate\Http\Request;

class ContextoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.sistema-general');
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
     * @param  \App\Models\ContextoEmpresa  $contextoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(ContextoEmpresa $contextoEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContextoEmpresa  $contextoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(ContextoEmpresa $contextoEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContextoEmpresa  $contextoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContextoEmpresa $contextoEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContextoEmpresa  $contextoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContextoEmpresa $contextoEmpresa)
    {
        //
    }
}
