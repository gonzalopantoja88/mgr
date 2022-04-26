<?php

namespace App\Http\Controllers;

use App\Models\IdentificacionRiesgo;
use App\Models\Empresa;
use App\Models\EmpresaRiesgo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdentificacionRiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $idenfiticacion_riesgo = IdentificacionRiesgo::all();
        return view('view.identificacion-riesgo', compact(['user', 'idenfiticacion_riesgo']));
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
        $user = Auth::user();
        $ir = new IdentificacionRiesgo();
        $emp_riesgo = new EmpresaRiesgo();

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

        $ultimo_riesgo_agregado = IdentificacionRiesgo::select('id_riesgo', 'tipo')->orderByDesc('id_riesgo')->first();
        $emp = Empresa::where('id_fk_user', $user->id)->first();

        $emp_riesgo->id_fk_empresa = $emp->id;;
        $emp_riesgo->id_fk_riesgo = $ultimo_riesgo_agregado->id_riesgo;
        $emp_riesgo->save();

        return redirect()->route('identificacion-riesgo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
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
