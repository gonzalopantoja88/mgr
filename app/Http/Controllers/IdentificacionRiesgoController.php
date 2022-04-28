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

        // $emp = Empresa::where('id_fk_user', $user->id)->first();
        // $emp_riesgo = EmpresaRiesgo::where('id_fk_empresa', $emp->id)->first();
        
        // $idenfiticacion_riesgo = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')->where('id_fk_empresa', $emp_riesgo->id_fk_empresa)->get();
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

        // $ultimo_riesgo_agregado = IdentificacionRiesgo::select('id_riesgo', 'tipo')->orderByDesc('id_riesgo')->first();
        // $emp = Empresa::where('id_fk_user', $user->id)->first();

        // $emp_riesgo->id_fk_empresa = $emp->id;;
        // $emp_riesgo->id_fk_riesgo = $ultimo_riesgo_agregado->id_riesgo;
        // $emp_riesgo->save();

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
        $id = $request->id_identificacion_riesgo;
        $vlr_tipo = 'editar_tipo_id_riesgo_'.$id;
        $vlr_proceso = 'editar_proceso_id_riesgo_'.$id;
        $vlr_objetivo = 'editar_objetivo_id_riesgo_'.$id;
        $vlr_actividad_critica = 'editar_actividad_critica_id_Riesgo_'.$id;
        $vlr_sistema_asociado = 'editar_sistema_asociado_id_riesgo_'.$id;
        $vlr_variable = 'editar_variable_id_riesgo_'.$id;
        $vlr_factor_riesgo = 'editar_factor_id_riesgo_'.$id;
        $vlr_riesgo = 'editar_riesgo_id_riesgo_'.$id;
        $vlr_descripcion = 'editar_descripcion_id_riesgo_'.$id;
        $vlr_causa_raiz = 'editar_causa_raiz_id_riesgo_'.$id;
        $vlr_consecuencias = 'editar_consecuencias_id_riesgo_'.$id;

        IdentificacionRiesgo::where('id_riesgo', $id)
                ->update(['tipo' => $request->$vlr_tipo,
                          'proceso' => $request->$vlr_proceso,
                          'objetivo' => $request->$vlr_objetivo,
                          'actividad_critica' => $request->$vlr_actividad_critica,
                          'sistema_asociado' => $request->$vlr_sistema_asociado,
                          'variable' => $request->$vlr_variable,
                          'factor_riesgo' => $request->$vlr_factor_riesgo,
                          'riesgo' => $request->$vlr_riesgo,
                          'descripcion' => $request->$vlr_descripcion,
                          'causa_raiz' => $request->$vlr_causa_raiz,
                          'consecuencias' => $request->$vlr_consecuencias]);

        return redirect()->route('identificacion-riesgo'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdentificacionRiesgo  $identificacionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_identificacion_riesgo;
        $ir = IdentificacionRiesgo::findOrFail($id);

        if ($ir->delete()) {
            return redirect()->route('identificacion-riesgo');
        }

        return 'Algo ha salido mal';
    }

}
