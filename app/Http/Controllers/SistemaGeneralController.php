<?php

namespace App\Http\Controllers;

use App\Models\SistemaGeneral;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view.sistema-general');
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
        $sa = new SistemaGeneral();

        $sa->estrategicos = $request->estrategicos ? $request->estrategicos : "no";
        $sa->misionales = $request->misionales ? $request->misionales : "no";
        $sa->apoyo/soporte = $request->apoyo/soporte ? $request->apoyo/soporte : "no";
        $sa->mejora = $request->mejora ? $request->mejora : "no";

        $sa->nombreproceso = $request->nombreproceso ? $request->nombreproceso : "no";
        $sa->responsable = $request->responsable ? $request->responsable : "no";
        $sa->tipodeproceso = $request->tipodeproceso ? $request->tipodeproceso : "no";
        $sa->proveedor = $request->proveedor ? $request->proveedor : "no";
        $sa->actividad = $request->actividad ? $request->actividad : "no";
        $sa->cliente = $request->cliente ? $request->cliente : "no";
        $sa->documentosasociados = $request->documentosasociados ? $request->documentosasociados : "no";
        $sa->medicionseguimiento(indicador) = $request->medicionseguimiento(indicador) ? $request->medicionseguimiento(indicador) : "no";
        $sa->recursos = $request->recursos ? $request->recursos : "no";
        $sa->objetivodelproceso = $request->objetivodelproceso ? $request->objetivodelproceso : "no";
        $sa->alcance = $request->alcance ? $request->alcance : "no";
        $sa->entrada = $request->entrada ? $request->entrada : "no";
        $sa->ciclodelaactividad = $request->ciclodelaactividad ? $request->ciclodelaactividad : "no";
        $sa->salida = $request->salida ? $request->salida : "no";
        $sa->requisitoslegales/reglamentarios = $request->requisitoslegales/reglamentarios ? $request->requisitoslegales/reglamentarios : "no";
        $sa->registrosrequeridosdegestionporprocesos = $request->registrosrequeridosdegestionporprocesos ? $request->registrosrequeridosdegestionporprocesos : "no";
        $sa->riesgoasociado = $request->riesgoasociado ? $request->riesgoasociado : "no";

        $sa->mision = $request->mision ? $request->mision : "no";
        $sa->filosofia = $request->filosofia ? $request->filosofia : "no";
        $sa->dofa = $request->dofa ? $request->dofa : "no";
        $sa->estrategias = $request->estrategias ? $request->estrategias : "no";
        $sa->seguimientorevisiondelainformacion(pe) = $request->seguimientorevisiondelainformacion(pe) ? $request->seguimientorevisiondelainformacion(pe) : "no";
        $sa->vision = $request->vision ? $request->vision : "no";
        $sa->diagnostico = $request->diagnostico ? $request->diagnostico : "no";
        $sa->objetivos = $request->objetivos ? $request->objetivos : "no";
        $sa->indicadores = $request->indicadores ? $request->indicadores : "no";
        
        $sa->identificacion = $request->identificacion ? $request->identificacion : "no";
        $sa->definicionderequisitos = $request->definicionderequisitos ? $request->definicionderequisitos : "no";
        $sa->determinacionnecesidadesyexpectativas = $request->determinacionnecesidadesyexpectativas ? $request->determinacionnecesidadesyexpectativas : "no";
        $sa->seguimientorevisiondelainformacion(pi) = $request->seguimientorevisiondelainformacion(pi) ? $request->seguimientorevisiondelainformacion(pi) : "no";

        $sa->laorganizacion = $request->laorganizacion ? $request->laorganizacion : "no";
        $sa->proceso = $request->proceso ? $request->proceso : "no";
        $sa->producto/servicio = $request->producto/servicio ? $request->producto/servicio : "no";
        $sa->exclusiones = $request->exclusiones ? $request->exclusiones : "no";

        $sa->manualdefunciones = $request->manualdefunciones ? $request->manualdefunciones : "no";
        $sa->estructuravertical = $request->estructuravertical ? $request->estructuravertical : "no";
        $sa->redarquica = $request->redarquica ? $request->redarquica : "no";
        $sa->compromiso = $request->compromiso ? $request->compromiso : "no";
        $sa->perfildecargos = $request->perfildecargos ? $request->perfildecargos : "no";
        $sa->estructurahorizontal = $request->estructurahorizontal ? $request->estructurahorizontal : "no";
        $sa->politica = $request->politica ? $request->politica : "no";

        $sa->matrizderiesgos = $request->matrizderiesgos ? $request->matrizderiesgos : "no";

        $sa->matrizdesplieguedeobjetivos = $request->matrizdesplieguedeobjetivos ? $request->matrizdesplieguedeobjetivos : "no";

        $sa->identificaciondelrecurso = $request->identificaciondelrecurso ? $request->identificaciondelrecurso : "no";
        $sa->tomadeconciencia = $request->tomadeconciencia ? $request->tomadeconciencia : "no";
        $sa->registrosrequeridosdepersonas = $request->registrosrequeridosdepersonas ? $request->registrosrequeridosdepersonas : "no";
        $sa->plandemantenimiento = $request->plandemantenimiento ? $request->plandemantenimiento : "no";
        $sa->identificacionrecursosdemedicionyseguimiento = $request->identificacionrecursosdemedicionyseguimiento ? $request->identificacionrecursosdemedicionyseguimiento : "no";
        $sa->plandemetrologia = $request->plandemetrologia ? $request->plandemetrologia : "no";
        $sa->trazabilidadalasmediciones = $request->trazabilidadalasmediciones ? $request->trazabilidadalasmediciones : "no";
        $sa->procedimentos = $request->procedimentos ? $request->procedimentos : "no";
        $sa->listadosmaestros = $request->listadosmaestros ? $request->listadosmaestros : "no";
        $sa->presupuestos = $request->presupuestos ? $request->presupuestos : "no";
        $sa->ambientedetrabajo = $request->ambientedetrabajo ? $request->ambientedetrabajo : "no";
        $sa->adquisiciondeconocimiento = $request->adquisiciondeconocimiento ? $request->adquisiciondeconocimiento : "no";
        $sa->matrizdecomunicacion = $request->matrizdecomunicacion ? $request->matrizdecomunicacion : "no";

        $sa->identificacionquenecesitamedicion = $request->identificacionquenecesitamedicion ? $request->identificacionquenecesitamedicion : "no";
        $sa->metodosdeseguimientoymedicion = $request->metodosdeseguimientoymedicion ? $request->metodosdeseguimientoymedicion : "no";
        $sa->periodo = $request->periodo ? $request->periodo : "no";
        $sa->cuandoelanalisis = $request->cuandoelanalisis ? $request->cuandoelanalisis : "no";
        $sa->conformidaddelproducto/servicio = $request->conformidaddelproducto/servicio ? $request->conformidaddelproducto/servicio : "no";
        $sa->satisfacciondelcliente = $request->satisfacciondelcliente ? $request->satisfacciondelcliente : "no";
        $sa->desempenodelsistema = $request->desempenodelsistema ? $request->desempenodelsistema : "no";
        $sa->eficaciadelsistema = $request->eficaciadelsistema ? $request->eficaciadelsistema : "no";
        $sa->implementaciondelsistema = $request->implementaciondelsistema ? $request->implementaciondelsistema : "no";
        $sa->eficaciadelasaccionesparaabordarriesgosyoportunidades = $request->eficaciadelasaccionesparaabordarriesgosyoportunidades ? $request->eficaciadelasaccionesparaabordarriesgosyoportunidades : "no";
        $sa->desempenoproveedoresexternos = $request->desempenoproveedoresexternos ? $request->desempenoproveedoresexternos : "no";
        $sa->necesidaddemejora = $request->necesidaddemejora ? $request->necesidaddemejora : "no";
        $sa->procedimientoauditoriainterna = $request->procedimientoauditoriainterna ? $request->procedimientoauditoriainterna : "no";
        $sa->equipoauditor = $request->equipoauditor ? $request->equipoauditor : "no";
        $sa->programadeauditoria = $request->programadeauditoria ? $request->programadeauditoria : "no";
        $sa->accionescorrectivas = $request->accionescorrectivas ? $request->accionescorrectivas : "no";
        $sa->informe = $request->informe ? $request->informe : "no";
        $sa->periodoestablecido = $request->periodoestablecido ? $request->periodoestablecido : "no";
        $sa->entradas = $request->entradas ? $request->entradas : "no";
        $sa->salidas = $request->salidas ? $request->salidas : "no";
        $sa->registroderevision = $request->registroderevision ? $request->registroderevision : "no";

        $sa->procedimientoaccioncorrectiva = $request->procedimientoaccioncorrectiva ? $request->procedimientoaccioncorrectiva : "no";
        $sa->accioncorrectiva = $request->accioncorrectiva ? $request->accioncorrectiva : "no";
        $sa->registrodemejora = $request->registrodemejora ? $request->registrodemejora : "no";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SistemaGeneral  $sistemaGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(SistemaGeneral $sistemaGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SistemaGeneral  $sistemaGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit(SistemaGeneral $sistemaGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SistemaGeneral  $sistemaGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SistemaGeneral $sistemaGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SistemaGeneral  $sistemaGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy(SistemaGeneral $sistemaGeneral)
    {
        //
    }
}
