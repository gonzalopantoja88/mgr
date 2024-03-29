<?php

namespace App\Http\Controllers;

use App\Models\AnalisisValoracionRiesgo;
use App\Models\IdentificacionRiesgo;
use App\Models\Empresa;
use App\Models\EmpresaRiesgo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalisisValoracionRiesgoController extends Controller
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
            $analisis_riesgos = AnalisisValoracionRiesgo::join('identificacion_riesgos', 'analisis_valoracion_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')->get();
        
        } else {

            $emp = Empresa::where('id_fk_user', $user->id)->first();
            $emp_riesgo = EmpresaRiesgo::where('id_fk_empresa', $emp->id)->first();

            if (!isset($emp_riesgo)) {
                return view('view.analisis-valoracion-riesgo', compact('user'));
                
            } else {
                // Trae los riesgos sin calificar
                $identificacion_riesgos = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                                    ->where('id_fk_empresa', $emp_riesgo->id_fk_empresa)->get();

                // Trae los riesgos calificados
                $analisis_riesgos = EmpresaRiesgo::join('identificacion_riesgos', 'empresa_riesgos.id_fk_riesgo', '=', 'identificacion_riesgos.id_riesgo')
                                        ->join('analisis_valoracion_riesgos', 'identificacion_riesgos.id_riesgo', '=', 'analisis_valoracion_riesgos.id_fk_riesgo')
                                        ->where('id_fk_empresa', $emp_riesgo->id_fk_empresa)->get();
            }     
        }

        return view('view.analisis-valoracion-riesgo', compact(['identificacion_riesgos', 'analisis_riesgos', 'user']));
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
        $ar = new AnalisisValoracionRiesgo();

        $id = $request->id_riesgo;
        $calf_probablididad = 'calf_probablididad_' . $id;
        $calf_impacto = 'calf_impacto_' . $id;
        $evaluacion_riesgo = 'evaluacion_riesgo_' . $id;
        $manejo_riesgo = 'manejo_riesgo_' . $id;

        $controles_existentes = 'controles_existentes_' . $id;
        $tipos_control = 'tipos_control_' . $id;
        $nueva_calf_probabilidad = 'nueva_calf_probabilidad_' . $id;
        $nueva_calf_impacto = 'nueva_calf_impacto_' . $id;
        $nueva_evaluacion_riesgo = 'nueva_evaluacion_riesgo_' . $id;
        $nuevo_manejo_riesgo = 'nuevo_manejo_riesgo_' . $id;
        $opciones_manejo = 'opciones_manejo_' . $id;

        $ar->probabilidad = $request->$calf_probablididad;
        $ar->impacto = $request->$calf_impacto;
        $ar->riesgo_inherente = $request->$evaluacion_riesgo;
        $ar->manejo_riesgo = $request->$manejo_riesgo;
        $ar->id_fk_riesgo = $request->id_riesgo;

        $ar->controles_existentes = $request->$controles_existentes;
        $ar->tipos_control = $request->$tipos_control;
        $ar->probabilidad_definitivo = $request->$nueva_calf_probabilidad;
        $ar->impacto_definitivo = $request->$nueva_calf_impacto;
        $ar->nueva_evaluacion_riesgo = $request->$nueva_evaluacion_riesgo;
        $ar->nuevo_manejo_riesgo = $request->$nuevo_manejo_riesgo;
        $ar->opciones_manejo = $request->$opciones_manejo;
        $ar->save();

        // Actualizar la tabla 'identificacion_riesgos' el campo 'calificado' a estado true
        $riesgo = IdentificacionRiesgo::where('id_riesgo', $id)->first();
        $riesgo->calificado = 1;
        $riesgo->save();

        return redirect()->route('analisis-riesgo')->with('success-tr', 'Riesgo calificado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function show(AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function edit($id_riesgo)
    {
        $cont_editar_riesgo = AnalisisValoracionRiesgo::where('id_analisis_valoracion', $id_riesgo)->first();
        return $cont_editar_riesgo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id_analisis_valoracion;
        $vlr_probabilidad = 'edit_calf_probablididad_' . $id;
        $vlr_impacto = 'edit_calf_impacto_' . $id;
        $vlr_riesgo_inherente = 'edit_evaluacion_riesgo_' . $id;
        $vlr_manejo_riesgo = 'edit_manejo_riesgo_' . $id;
        $vlr_controles_existentes = 'edit_controles_existentes_' . $id;
        $vlr_tipos_control = 'edit_tipos_control_' . $id;
        $vlr_probabilidad_definitivo = 'edit_nueva_calf_probabilidad_' . $id;
        $vlr_impacto_definitivo = 'edit_nueva_calf_impacto_' . $id;
        $vlr_nuevo_riesgo_inherente = 'edit_nueva_evaluacion_riesgo_' . $id;
        $vlr_nuevo_manejo_riesgo = 'edit_nuevo_manejo_riesgo_' . $id;
        $vlr_opciones_manejo = 'edit_opciones_manejo_' . $id;

        AnalisisValoracionRiesgo::where('id_analisis_valoracion', $id)
            ->update([
                'probabilidad' => $request->$vlr_probabilidad,
                'impacto' => $request->$vlr_impacto,
                'riesgo_inherente' => $request->$vlr_riesgo_inherente,
                'manejo_riesgo' => $request->$vlr_manejo_riesgo,
                'controles_existentes' => $request->$vlr_controles_existentes,
                'tipos_control' => $request->$vlr_tipos_control,
                'probabilidad_definitivo' => $request->$vlr_probabilidad_definitivo,
                'impacto_definitivo' => $request->$vlr_impacto_definitivo,
                'nueva_evaluacion_riesgo' => $request->$vlr_nuevo_riesgo_inherente,
                'nuevo_manejo_riesgo' => $request->$vlr_nuevo_manejo_riesgo,
                'opciones_manejo' => $request->$vlr_opciones_manejo
            ]);

        return redirect()->route('analisis-riesgo')->with('success-tr', 'Calificación modificada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnalisisValoracionRiesgo  $analisisValoracionRiesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnalisisValoracionRiesgo $analisisValoracionRiesgo)
    {
        //
    }


    public function descalificar_riesgo($id)
    {
        IdentificacionRiesgo::where('id_riesgo', $id)->update(['calificado' => false]);

        $avr = AnalisisValoracionRiesgo::where('id_fk_riesgo', $id);
        $avr->delete();

        return redirect()->route('analisis-riesgo')->with('success-tr', 'Riesgo descalificado exitosamente.');
    }
}
