<?php

namespace App\Http\Controllers;

use App\Models\ContextoEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContextoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('view.contexto-empresa', compact('user'));
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
        $ce = new ContextoEmpresa();

        $ce->origen_capital = $request->origenCapital;
        $ce->dimension = $request->dimension;
        $ce->objeto_social = $request->objetoSocial;
        $ce->sector_economico = $request->sectorEconomico;
        $ce->opcion_sector_eco = $request->opcionesSectorEco == null ? "sin opciones" : $request->opcionesSectorEco;
        $ce->propietario = $request->tipoPersona;
        $ce->tipo_persona = $request->propietarios == null ? "sin opciones" : $request->propietarios;

        $ce->tangible = $request->tangibles;
        $ce->bienes = $request->bienes == null ? "sin opciones" : $request->bienes;
        $ce->intangible = $request->intangibles;

        $ce->identificacion = $request->identificacion ? $request->identificacion : "no";
        $ce->duracion = $request->duracion ? $request->duracion : "no";
        $ce->ctrc_microbiologicas = $request->caracteristicasmicrobiologicas ? $request->caracteristicasmicrobiologicas : "no";
        $ce->restricciones = $request->restricciones ? $request->restricciones : "no";
        $ce->empaque = $request->empaque ? $request->empaque : "no";
        $ce->destino_final = $request->destinofinal ? $request->destinofinal : "no";
        $ce->descripcion = $request->descripcion ? $request->descripcion : "no";
        $ce->ctrc_fisicas = $request->caracteristicasfisicas ? $request->caracteristicasfisicas : "no";
        $ce->forma_uso = $request->formasdeuso ? $request->formasdeuso : "no";
        $ce->condicion_manejo = $request->condicionesdemanejo ? $request->condicionesdemanejo : "no";
        $ce->etiquetado = $request->etiquetado ? $request->etiquetado : "no";
        $ce->composicion = $request->composicion ? $request->composicion : "no";
        $ce->ctrc_quimica = $request->caracteristicasquimicas ? $request->caracteristicasquimicas : "no";
        $ce->usuarios_potenciales = $request->usuariospotenciales ? $request->usuariospotenciales : "no";
        $ce->condicion_conservacion = $request->condicionesdeconservacion ? $request->condicionesdeconservacion : "no";
        $ce->presentacion = $request->presentacion ? $request->presentacion : "no";

        $ce->logotipo = $request->logotipo ? $request->logotipo : "no";
        $ce->marca = $request->marca ? $request->marca : "no";
        $ce->eslogan = $request->eslogan ? $request->eslogan : "no";
        $ce->norma_tecnica = $request->normatecnica;

        $ce->analisis_competencia = $request->analisisdelacompetencia ? $request->analisisdelacompetencia : "no";
        $ce->presupuesto_venta = $request->presupuestodeventas ? $request->presupuestodeventas : "no";
        $ce->blog = $request->blog ? $request->blog : "no";
        $ce->mercadolibre = $request->mercadolibre ? $request->mercadolibre : "no";
        $ce->olx = $request->olx ? $request->olx : "no";
        $ce->precio = $request->precio ? $request->precio : "no";
        $ce->venta_directa = $request->ventadirecta ? $request->ventadirecta : "no";
        $ce->facebook = $request->facebook ? $request->facebook : "no";
        $ce->amazon = $request->amazon ? $request->amazon : "no";
        $ce->promocion = $request->promocion ? $request->promocion : "no";
        $ce->web = $request->web ? $request->web : "no";
        $ce->instagram = $request->instagram ? $request->instagram : "no";
        $ce->ebay = $request->ebay ? $request->ebay : "no";

        $ce->servicio_cliente = $request->servicioalcliente ? $request->servicioalcliente : "no";
        $ce->fidelizacion_cliente = $request->fidelizaciondeclientes ? $request->fidelizaciondeclientes : "no";
        $ce->pqrsf = $request->pqrsf ? $request->pqrsf : "no";
        $ce->identificacion_cliente = $request->identificacionclientes ? $request->identificacionclientes : "no";

        $ce->save();
        return redirect()->route('contexto-empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContextoEmpresa  $contextoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dataCE = ContextoEmpresa::all();
        return $dataCE;
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
