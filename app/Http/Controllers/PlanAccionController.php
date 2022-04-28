<?php

namespace App\Http\Controllers;

use App\Models\PlanAccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanAccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('view.plan-accion', compact(['user']));

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
     * @param  \App\Models\PlanAccion  $planAccion
     * @return \Illuminate\Http\Response
     */
    public function show(PlanAccion $planAccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanAccion  $planAccion
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanAccion $planAccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanAccion  $planAccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanAccion $planAccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanAccion  $planAccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanAccion $planAccion)
    {
        //
    }
}
