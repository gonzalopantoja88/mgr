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
        //
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
