<?php

namespace App\Http\Controllers;

use App\Models\SGAmbiental;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SGAmbientalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.sga');
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
     * @param  \App\Models\SGAmbiental  $sGAmbiental
     * @return \Illuminate\Http\Response
     */
    public function show(SGAmbiental $sGAmbiental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SGAmbiental  $sGAmbiental
     * @return \Illuminate\Http\Response
     */
    public function edit(SGAmbiental $sGAmbiental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SGAmbiental  $sGAmbiental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SGAmbiental $sGAmbiental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SGAmbiental  $sGAmbiental
     * @return \Illuminate\Http\Response
     */
    public function destroy(SGAmbiental $sGAmbiental)
    {
        //
    }
}
