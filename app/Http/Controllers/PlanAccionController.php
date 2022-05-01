<?php

namespace App\Http\Controllers;

use App\Models\PlanAccion;
use App\Models\IdentificacionRiesgo;
use App\Models\Empresa;
use App\Models\EmpresaRiesgo;
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

        if ($user->email == 'admin@mail.com') {  

            $identificacion_riesgos = IdentificacionRiesgo::all();
            $plan_accion = PlanAccion::join('identificacion_riesgos', 'plan_accions.id_plan_accion', '=', 'identificacion_riesgos.id_riesgo')->get();
        
        } else {

            $emp = Empresa::where('id_fk_user', $user->id)->first();
            $emp_riesgo = EmpresaRiesgo::where('id_fk_empresa', $emp->id)->first();

            if (!isset($emp_riesgo)) {
                return view('view.plan-accion', compact('user'));
                
            } else {
                // Trae los riesgos sin calificar
                $identificacion_riesgos = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                                    ->where('id_fk_empresa', $emp_riesgo->id_fk_empresa)->get();

                // Trae los riesgos calificados
                $plan_accion = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                        ->join('plan_accions', 'identificacion_riesgos.id_riesgo', '=', 'plan_accions.id_fk_riesgo')
                                        ->where('id_fk_empresa', $emp_riesgo->id_fk_empresa)->get();
            }     
        }

        return view('view.plan-accion', compact(['identificacion_riesgos', 'plan_accion', 'user']));

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
        $pa = new PlanAccion();

        $id = $request->id_riesgo;
        $acciones = 'acciones_' . $id;
        $responsables = 'responsables_' . $id;
        $fecha_inicio = 'fecha_inicio_' . $id;
        $fecha_terminacion = 'fecha_final_' . $id;
        $indicador = 'indicador_' . $id;
        $meta = 'meta_' . $id;
        $seguimiento = 'seguimiento_' . $id;

        $pa->acciones = $request->$acciones;
        $pa->responsables = $request->$responsables;
        $pa->fecha_inicio = $request->$fecha_inicio;
        $pa->fecha_terminacion = $request->$fecha_terminacion;
        $pa->indicador = $request->$indicador;
        $pa->meta = $request->$meta;
        $pa->seguimiento = $request->$seguimiento;
        $pa->id_fk_riesgo = $request->id_riesgo;
        $pa->save();

        // Actualizar la tabla 'identificacion_riesgos' el campo 'calificado_plan_accion' a estado true
        $riesgo = IdentificacionRiesgo::where('id_riesgo', $id)->first();
        $riesgo->calificado_plan_accion = 1;
        $riesgo->save();

        return redirect()->route('plan-accion');
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

    public function descalificar_plan_accion($id)
    {
        IdentificacionRiesgo::where('id_riesgo', $id)->update(['calificado_plan_accion' => false]);

        $pa = PlanAccion::where('id_fk_riesgo', $id);
        $pa->delete();

        return redirect()->route('plan-accion')->with('success-tr', 'Riesgo descalificado exitosamente.');
    }
}
