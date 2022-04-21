<?php

namespace App\Http\Controllers;

use App\Models\SGAmbiental;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SGAmbientalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('view.sga', compact('user'));
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
        $sga = new SGAmbiental();

        $sga->precipitacionmm_ano_mm_mes = $request->precipitacionmm_ano_mm_mes ? $request->precipitacionmm_ano_mm_mes : "no";
        $sga->temperaturamediamaxima_minima = $request->temperaturamediamaxima_minima ? $request->temperaturamediamaxima_minima : "no";
        $sga->brillosolarmedio = $request->brillosolarmedio ? $request->brillosolarmedio : "no";
        $sga->humedadanualmedia = $request->humedadanualmedia ? $request->humedadanualmedia : "no";
        $sga->materialparticuladopm10_pm2_5 = $request->materialparticuladopm10_pm2_5 ? $request->materialparticuladopm10_pm2_5 : "no";
        $sga->gasesco_co2_nox_so2 = $request->gasesco_co2_nox_so2 ? $request->gasesco_co2_nox_so2 : "no";
        $sga->compuestosorganicosvolatilescov = $request->compuestosorganicosvolatilescov ? $request->compuestosorganicosvolatilescov : "no";
        $sga->ozonototalmensual = $request->ozonototalmensual ? $request->ozonototalmensual : "no";
        $sga->ruidoambiental = $request->ruidoambiental ? $request->ruidoambiental : "no";
        $sga->demandabiologicadeoxigenodbo5 = $request->demandabiologicadeoxigenodbo5 ? $request->demandabiologicadeoxigenodbo5 : "no";
        $sga->demandaquimicadeoxigenodqo = $request->demandaquimicadeoxigenodqo ? $request->demandaquimicadeoxigenodqo : "no";
        $sga->solidossuspendidostotalessst = $request->solidossuspendidostotalessst ? $request->solidossuspendidostotalessst : "no";
        $sga->solidossedimentablesssed = $request->solidossedimentablesssed ? $request->solidossedimentablesssed : "no";
        $sga->solidostotalesst = $request->solidostotalesst ? $request->solidostotalesst : "no";
        $sga->grasasyaceites = $request->grasasyaceites ? $request->grasasyaceites : "no";
        $sga->ph = $request->ph ? $request->ph : "no";
        $sga->temperatura = $request->temperatura ? $request->temperatura : "no";
        $sga->disponibilidaddeagua = $request->disponibilidaddeagua ? $request->disponibilidaddeagua : "no";
        $sga->arenayroca = $request->arenayroca ? $request->arenayroca : "no";
        $sga->madera = $request->madera ? $request->madera : "no";
        $sga->fibrasyresinas = $request->fibrasyresinas ? $request->fibrasyresinas : "no";
        $sga->bionama = $request->bionama ? $request->bionama : "no";
        $sga->pescayacuicultura = $request->pescayacuicultura ? $request->pescayacuicultura : "no";
        $sga->carneypieles = $request->carneypieles ? $request->carneypieles : "no";
        $sga->plantasmedicinales = $request->plantasmedicinales ? $request->plantasmedicinales : "no";
        $sga->ingredientesnaturales = $request->ingredientesnaturales ? $request->ingredientesnaturales : "no";
        $sga->ganaderia = $request->ganaderia ? $request->ganaderia : "no";
        $sga->agricultura = $request->agricultura ? $request->agricultura : "no";
        $sga->areaportipodecoberturasuelohectareas = $request->areaportipodecoberturasuelohectareas ? $request->areaportipodecoberturasuelohectareas : "no";
        $sga->numerodeespeciesfaunayflora = $request->numerodeespeciesfaunayflora ? $request->numerodeespeciesfaunayflora : "no";
        $sga->conflictosdeusodelsuelo = $request->conflictosdeusodelsuelo ? $request->conflictosdeusodelsuelo : "no";
        $sga->fenomenosnaturales = $request->fenomenosnaturales ? $request->fenomenosnaturales : "no";
        $sga->manejodevertimientosdeagua = $request->manejodevertimientosdeagua ? $request->manejodevertimientosdeagua : "no";
        $sga->emisionesenelaire = $request->emisionesenelaire ? $request->emisionesenelaire : "no";
        $sga->residuossolidospeligrososyposconsumo = $request->residuossolidospeligrososyposconsumo ? $request->residuossolidospeligrososyposconsumo : "no";
        $sga->reglamentonormativoenelsuelo = $request->reglamentonormativoenelsuelo ? $request->reglamentonormativoenelsuelo : "no";
        $sga->reglamentonormativoenlaflora = $request->reglamentonormativoenlaflora ? $request->reglamentonormativoenlaflora : "no";
        $sga->reglamentonormativoenlafauna = $request->reglamentonormativoenlafauna ? $request->reglamentonormativoenlafauna : "no";
        $sga->comunidadesindigenas = $request->comunidadesindigenas ? $request->comunidadesindigenas : "no";
        $sga->comunidadesafrodescendientes = $request->comunidadesafrodescendientes ? $request->comunidadesafrodescendientes : "no";
        $sga->comunidadescampesinas = $request->comunidadescampesinas ? $request->comunidadescampesinas : "no";
        $sga->comunidadesencondiciondevulnerabilidad = $request->comunidadesencondiciondevulnerabilidad ? $request->comunidadesencondiciondevulnerabilidad : "no";
        $sga->patrimonio = $request->patrimonio ? $request->patrimonio : "no";
        $sga->programaderesponsabilidadsocialyambiental = $request->programaderesponsabilidadsocialyambiental ? $request->programaderesponsabilidadsocialyambiental : "no";
        $sga->impactoambientalenaire = $request->impactoambientalenaire ? $request->impactoambientalenaire : "no";
        $sga->impactoambientalenagua = $request->impactoambientalenagua ? $request->impactoambientalenagua : "no";
        $sga->impactoambientalensuelo = $request->impactoambientalensuelo ? $request->impactoambientalensuelo : "no";
        $sga->impactoambientalenflora = $request->impactoambientalenflora ? $request->impactoambientalenflora : "no";
        $sga->impactoambientalenfauna = $request->impactoambientalenfauna ? $request->impactoambientalenfauna : "no";
        $sga->educacion = $request->educacion ? $request->educacion : "no";
        $sga->salud = $request->salud ? $request->salud : "no";
        $sga->recreacionydeporte = $request->recreacionydeporte ? $request->recreacionydeporte : "no";
        $sga->infraestructuradetransporte = $request->infraestructuradetransporte ? $request->infraestructuradetransporte : "no";
        $sga->acueducto_alcantarillado_energiaelectrica_gasdomiciliario = $request->acueducto_alcantarillado_energiaelectrica_gasdomiciliario ? $request->acueducto_alcantarillado_energiaelectrica_gasdomiciliario : "no";
        $sga->internet_television_emisorascomunitarias = $request->internet_television_emisorascomunitarias ? $request->internet_television_emisorascomunitarias : "no";
        $sga->natalidad = $request->natalidad ? $request->natalidad : "no";
        $sga->mortalidad = $request->mortalidad ? $request->mortalidad : "no";
        $sga->movilidadespacial = $request->movilidadespacial ? $request->movilidadespacial : "no";
        $sga->estructuradelapoblacion = $request->estructuradelapoblacion ? $request->estructuradelapoblacion : "no";
        $sga->distribucionespacialurbano_rural = $request->distribucionespacialurbano_rural ? $request->distribucionespacialurbano_rural : "no";
        $sga->densidaddepoblacion = $request->densidaddepoblacion ? $request->densidaddepoblacion : "no";
        $sga->necesidadesbasicasinsatisfechasnbi = $request->necesidadesbasicasinsatisfechasnbi ? $request->necesidadesbasicasinsatisfechasnbi : "no";
        $sga->estructuradelapropiedad = $request->estructuradelapropiedad ? $request->estructuradelapropiedad : "no";
        $sga->empresasproductivas = $request->empresasproductivas ? $request->empresasproductivas : "no";
        $sga->mercadolaboral = $request->mercadolaboral ? $request->mercadolaboral : "no";
        $sga->tendenciasdelempleo = $request->tendenciasdelempleo ? $request->tendenciasdelempleo : "no";
        $sga->programasyproyectosproductivos = $request->programasyproyectosproductivos ? $request->programasyproyectosproductivos : "no";
        $sga->contextointerno = $request->contextointerno ? $request->contextointerno : "no";
        $sga->contextoexterno = $request->contextoexterno ? $request->contextoexterno : "no";
        $sga->accionesparaabordarriesgosyoportunidades = $request->accionesparaabordarriesgosyoportunidades ? $request->accionesparaabordarriesgosyoportunidades : "no";
        $sga->objetivosambientalesyplanificacionparalograrlos = $request->objetivosambientalesyplanificacionparalograrlos ? $request->objetivosambientalesyplanificacionparalograrlos : "no";
        $sga->politicaambiental = $request->politicaambiental ? $request->politicaambiental : "no";
        $sga->roles_responsabilidadesyautoridades = $request->roles_responsabilidadesyautoridades ? $request->roles_responsabilidadesyautoridades : "no";
        $sga->recursos = $request->recursos ? $request->recursos : "no";
        $sga->competencia = $request->competencia ? $request->competencia : "no";
        $sga->tomadeconciencia = $request->tomadeconciencia ? $request->tomadeconciencia : "no";
        $sga->comunicacion = $request->comunicacion ? $request->comunicacion : "no";
        $sga->informaciondocumentada = $request->informaciondocumentada ? $request->informaciondocumentada : "no";
        $sga->planificacionycontroloperacional = $request->planificacionycontroloperacional ? $request->planificacionycontroloperacional : "no";
        $sga->preparacionyrespuestaanteemergenciasambientales = $request->preparacionyrespuestaanteemergenciasambientales ? $request->preparacionyrespuestaanteemergenciasambientales : "no";
        $sga->seguimiento_medicion_analisisyevaluacion = $request->seguimiento_medicion_analisisyevaluacion ? $request->seguimiento_medicion_analisisyevaluacion : "no";
        $sga->auditoriainterna = $request->auditoriainterna ? $request->auditoriainterna : "no";
        $sga->revisionporladireccion = $request->revisionporladireccion ? $request->revisionporladireccion : "no";
        $sga->noconformidadesyaccioncorrectiva = $request->noconformidadesyaccioncorrectiva ? $request->noconformidadesyaccioncorrectiva : "no";

        $sga->save();
        return redirect()->route('sga');
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
