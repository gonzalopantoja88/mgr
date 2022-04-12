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
        $sa->apoyo_soporte = $request->apoyo_soporte ? $request->apoyo_soporte : "no";
        $sa->mejora = $request->mejora ? $request->mejora : "no";
        $sa->nombre_proceso = $request->nombreproceso ? $request->nombreproceso : "no";
        $sa->responsable = $request->responsable ? $request->responsable : "no";
        $sa->tipo_de_proceso = $request->tipodeproceso ? $request->tipodeproceso : "no";
        $sa->proveedor = $request->proveedor ? $request->proveedor : "no";
        $sa->actividad = $request->actividad ? $request->actividad : "no";
        $sa->cliente = $request->cliente ? $request->cliente : "no";
        $sa->documentos_asociados = $request->documentosasociados ? $request->documentosasociados : "no";
        $sa->medicion_seguimiento_indicador = $request->medicionseguimientoindicador ? $request->medicionseguimientoindicador : "no";
        $sa->recursos = $request->recursos ? $request->recursos : "no";
        $sa->objetivo_proceso = $request->objetivodelproceso ? $request->objetivodelproceso : "no";
        $sa->alcance = $request->alcance ? $request->alcance : "no";
        $sa->entrada = $request->entrada ? $request->entrada : "no";
        $sa->ciclo_actividad = $request->ciclodelaactividad ? $request->ciclodelaactividad : "no";
        $sa->salida = $request->salida ? $request->salida : "no";
        $sa->requisitos_reglamentarios = $request->requisitoslegales_reglamentarios ? $request->requisitoslegales_reglamentarios : "no";
        $sa->registros_gestion_procesos = $request->registrosrequeridosdegestionporprocesos ? $request->registrosrequeridosdegestionporprocesos : "no";
        $sa->riesgo_asociado = $request->riesgoasociado ? $request->riesgoasociado : "no";
        $sa->mision = $request->mision ? $request->mision : "no";
        $sa->filosofia = $request->filosofia ? $request->filosofia : "no";
        $sa->dofa = $request->dofa ? $request->dofa : "no";
        $sa->estrategias = $request->estrategias ? $request->estrategias : "no";
        $sa->seguimiento_informacionpe = $request->seguimientorevisiondelainformacionpe ? $request->seguimientorevisiondelainformacionpe : "no";
        $sa->vision = $request->vision ? $request->vision : "no";
        $sa->diagnostico = $request->diagnostico ? $request->diagnostico : "no";
        $sa->objetivos = $request->objetivos ? $request->objetivos : "no";
        $sa->indicadores = $request->indicadores ? $request->indicadores : "no";
        $sa->identificacion = $request->identificacion ? $request->identificacion : "no";
        $sa->definicion_requisitos = $request->definicionderequisitos ? $request->definicionderequisitos : "no";
        $sa->determinacion_necesidadesyexpectativas = $request->determinacionnecesidadesyexpectativas ? $request->determinacionnecesidadesyexpectativas : "no";
        $sa->seguimiento_informacionpi = $request->seguimientorevisiondelainformacionpi ? $request->seguimientorevisiondelainformacionpi : "no";
        $sa->organizacion = $request->laorganizacion ? $request->laorganizacion : "no";
        $sa->proceso = $request->proceso ? $request->proceso : "no";
        $sa->producto_servicio = $request->producto_servicio ? $request->producto_servicio : "no";
        $sa->exclusiones = $request->exclusiones ? $request->exclusiones : "no";
        $sa->manual_funciones = $request->manualdefunciones ? $request->manualdefunciones : "no";
        $sa->estructura_vertical = $request->estructuravertical ? $request->estructuravertical : "no";
        $sa->redarquica = $request->redarquica ? $request->redarquica : "no";
        $sa->compromiso = $request->compromiso ? $request->compromiso : "no";
        $sa->perfil_cargos = $request->perfildecargos ? $request->perfildecargos : "no";
        $sa->estructura_horizontal = $request->estructurahorizontal ? $request->estructurahorizontal : "no";
        $sa->politica = $request->politica ? $request->politica : "no";
        $sa->matriz_riesgos = $request->matrizderiesgos ? $request->matrizderiesgos : "no";
        $sa->matriz_desplieguede_objetivos = $request->matrizdesplieguedeobjetivos ? $request->matrizdesplieguedeobjetivos : "no";
        $sa->identificacion_recurso = $request->identificaciondelrecurso ? $request->identificaciondelrecurso : "no";
        $sa->toma_conciencia = $request->tomadeconciencia ? $request->tomadeconciencia : "no";
        $sa->registros_requeridos_personas = $request->registrosrequeridosdepersonas ? $request->registrosrequeridosdepersonas : "no";
        $sa->plan_mantenimiento = $request->plandemantenimiento ? $request->plandemantenimiento : "no";
        $sa->identificacion_recursos_medicionyseguimiento = $request->identificacionrecursosdemedicionyseguimiento ? $request->identificacionrecursosdemedicionyseguimiento : "no";
        $sa->plan_metrologia = $request->plandemetrologia ? $request->plandemetrologia : "no";
        $sa->trazabilidad_mediciones = $request->trazabilidadalasmediciones ? $request->trazabilidadalasmediciones : "no";
        $sa->procedimentos = $request->procedimentos ? $request->procedimentos : "no";
        $sa->listados_maestros = $request->listadosmaestros ? $request->listadosmaestros : "no";
        $sa->presupuestos = $request->presupuestos ? $request->presupuestos : "no";
        $sa->ambiente_trabajo = $request->ambientedetrabajo ? $request->ambientedetrabajo : "no";
        $sa->adquisicion_conocimiento = $request->adquisiciondeconocimiento ? $request->adquisiciondeconocimiento : "no";
        $sa->matriz_comunicacion = $request->matrizdecomunicacion ? $request->matrizdecomunicacion : "no";
        $sa->identificacion_necesitamedicion = $request->identificacionquenecesitamedicion ? $request->identificacionquenecesitamedicion : "no";
        $sa->metodos_seguimientoymedicion = $request->metodosdeseguimientoymedicion ? $request->metodosdeseguimientoymedicion : "no";
        $sa->periodo = $request->periodo ? $request->periodo : "no";
        $sa->cuando_analisis = $request->cuandoelanalisis ? $request->cuandoelanalisis : "no";
        $sa->conformidad_producto_servicio = $request->conformidaddelproducto_servicio ? $request->conformidaddelproducto_servicio : "no";
        $sa->satisfaccion_cliente = $request->satisfacciondelcliente ? $request->satisfacciondelcliente : "no";
        $sa->desempeno_sistema = $request->desempenodelsistema ? $request->desempenodelsistema : "no";
        $sa->eficacia_sistema = $request->eficaciadelsistema ? $request->eficaciadelsistema : "no";
        $sa->implementacion_sistema = $request->implementaciondelsistema ? $request->implementaciondelsistema : "no";
        $sa->eficacia_acciones_riesgosyoportunidades = $request->eficaciadelasaccionesparaabordarriesgosyoportunidades ? $request->eficaciadelasaccionesparaabordarriesgosyoportunidades : "no";
        $sa->desempeno_proveedores_externos = $request->desempenoproveedoresexternos ? $request->desempenoproveedoresexternos : "no";
        $sa->necesidad_mejora = $request->necesidaddemejora ? $request->necesidaddemejora : "no";
        $sa->procedimiento_auditoria_interna = $request->procedimientoauditoriainterna ? $request->procedimientoauditoriainterna : "no";
        $sa->equipo_auditor = $request->equipoauditor ? $request->equipoauditor : "no";
        $sa->programa_auditoria = $request->programadeauditoria ? $request->programadeauditoria : "no";
        $sa->acciones_correctivas = $request->accionescorrectivas ? $request->accionescorrectivas : "no";
        $sa->informe = $request->informe ? $request->informe : "no";
        $sa->periodo_establecido = $request->periodoestablecido ? $request->periodoestablecido : "no";
        $sa->entradas = $request->entradas ? $request->entradas : "no";
        $sa->salidas = $request->salidas ? $request->salidas : "no";
        $sa->registro_revision = $request->registroderevision ? $request->registroderevision : "no";
        $sa->procedimiento_accion_correctiva = $request->procedimientoaccioncorrectiva ? $request->procedimientoaccioncorrectiva : "no";
        $sa->accion_correctiva = $request->accioncorrectiva ? $request->accioncorrectiva : "no";
        $sa->registro_mejora = $request->registrodemejora ? $request->registrodemejora : "no";

        $sa->save();
        return redirect()->route('sistema-general');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SistemaGeneral  $sistemaGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(SistemaGeneral $sistemaGeneral)
    {
        return view ('view.result-sg');
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
