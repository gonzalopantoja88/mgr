<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use App\Models\Empresa;
use App\Models\ContextoEmpresa;
use App\Models\EmpresaContextoEmpresa;
use App\Models\SistemaGeneral;
use App\Models\SGCalidad;
use App\Models\SGAmbiental;
use App\Models\SGSst;
use App\Models\IdentificacionRiesgo;
use App\Models\AnalisisValoracionRiesgo;
use App\Models\PlanAccion;
use App\Models\EmpresaRiesgo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $emp = Empresa::where('id_fk_user', $user->id)->first();

        if ($user->email == 'admin@mail.com') {  

            $contex_empresa = EmpresaContextoEmpresa::join('contexto_empresas', 'empresa_contexto_empresas.id_fk_contexto_emp', '=', 'contexto_empresas.id_contexto_empresa')
                            ->join('empresas', 'empresa_contexto_empresas.id_fk_empresa', '=', 'empresas.id')
                            ->get();
            
            $result_riesgo = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                            ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                            ->get();

            $result_valor = AnalisisValoracionRiesgo::join('identificacion_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                            ->join('empresa_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'empresa_riesgos.id_fk_riesgo')
                            ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                            ->get();

            $plan_accion = PlanAccion::join('identificacion_riesgos', 'plan_accions.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                            ->join('empresa_riesgos', 'plan_accions.id_fk_riesgo', '=', 'empresa_riesgos.id_fk_riesgo')
                            ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                            ->get();

            $sis_general = SistemaGeneral::all();   
            $result_sgc = SGCalidad::all();
            $result_sga = SGAmbiental::all();
            $result_sst = SGSst::all();
        
        } else {   
            $emp_contexto = EmpresaContextoEmpresa::where('id_fk_empresa', $emp->id)->first();
            $emp_riesgo = EmpresaRiesgo::where('id_fk_empresa', $emp->id)->first();

            if (!isset($emp_contexto)) {
                return view('view.resultados-mgr', compact('user'));
                
            } else {
                $contex_empresa = EmpresaContextoEmpresa::join('contexto_empresas', 'empresa_contexto_empresas.id_fk_contexto_emp', '=', 'contexto_empresas.id_contexto_empresa')
                                ->join('empresas', 'empresa_contexto_empresas.id_fk_empresa', '=', 'empresas.id')
                                ->where('id_fk_empresa', $emp_contexto->id_fk_empresa)
                                ->get();

                $result_riesgo = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                                ->where('id_fk_empresa', $emp_contexto->id_fk_empresa)
                                ->get();

                $result_valor = AnalisisValoracionRiesgo::join('identificacion_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                ->join('empresa_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'empresa_riesgos.id_fk_riesgo')
                                ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                                ->where('empresa_riesgos.id_fk_empresa', $emp_contexto->id_fk_empresa)
                                ->get();

                $plan_accion = PlanAccion::join('identificacion_riesgos', 'plan_accions.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                ->join('empresa_riesgos', 'plan_accions.id_fk_riesgo', '=', 'empresa_riesgos.id_fk_riesgo')
                                ->join('empresas', 'empresa_riesgos.id_fk_empresa', '=', 'empresas.id')
                                ->where('empresa_riesgos.id_fk_empresa', $emp_contexto->id_fk_empresa)
                                ->get();
                
                $sis_general = SistemaGeneral::all();   
                $result_sgc = SGCalidad::all();
                $result_sga = SGAmbiental::all();
                $result_sst = SGSst::all();
            }     
        }

        return view('view.resultados-mgr', compact(['user', 'contex_empresa', 'sis_general', 'result_sgc','result_sga', 'result_sst','result_riesgo', 'result_valor', 'plan_accion']));
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
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function show(Resultados $resultados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultados $resultados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultados $resultados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultados  $resultados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultados $resultados)
    {
        //
    }
}
