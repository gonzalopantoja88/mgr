@extends('layout.index')

@section('title', 'Resultados MGR')

@section('content')

<section class="resume-section mb-5 p-0" id="">
  <div class="resume-section-content">
          <h2 class="m-3">Resultados MGR</h2>
    <div class="container"> 

      {{-- Contexto empresa --}}
      <div class="row">
        <div class="col-6">
            <div class="subheading"><strong>Contexto Empresa</strong></div>
        </div>
      </div>
      <div class="table-responsive">
          <table class="table table-sm table-bordered table-hover text-center align-middle">
              <thead class="bg-primary text-nowrap">
                  <tr>
                      <th class="px-5">EMPRESA</th>
                      <th>ORIGEN CAPITAL</th>
                      <th class="px-3">DIMENSIÓN</th>
                      <th class="px-4">OBJETO SOCIAL</th>
                      <th>SECTOR ECONÓMICO</th>
                      <th>OPCIÓN SECTOR ECONÓMICO</th>
                      <th>TIPO DE PROPIETARIO</th>
                      <th>TIPO DE PERSONA</th>
                      <th class="px-5">TANGIBLE</th>
                      <th>BIENES</th>
                      <th class="px-5">INTANGIBLE</th>
                      <th>NORMA TÉCNICA</th>
                      <th>IDENTIFICACIÓN</th>
                      <th>DURACIÓN</th>
                      <th>CARACTE MICROBIOLÓGICAS</th>
                      <th>RESTICCIONES</th>
                      <th>EMPAQUE</th>
                      <th>DESTINO FINAL</th>
                      <th>DESCRIPCIÓN</th>
                      <th>CARACTE FÍSICAS</th>
                      <th>FORMA USO</th>
                      <th>CONDICIÓN MANEJO</th>
                      <th>ETIQUETADO</th>
                      <th>COMPOSICIÓN</th>
                      <th>CARACTE QUÍMICAS</th>
                      <th>USUARIOS POTENCIALES</th>
                      <th>CONDICIÓN CONSERVACIÓN</th>
                      <th>PRESENTACIÓN</th>
                      <th>LOGOTIPO</th>
                      <th>MARCA</th>
                      <th>ESLOGAN</th>
                      <th>ANÁLISIS COMPETENCIA</th>
                      <th>PRESUPUESTO VENTA</th>
                      <th>BLOG</th>
                      <th>MERCADO LIBRE</th>
                      <th>OLX</th>
                      <th>PRECIO</th>
                      <th>VENTA DIRECTA</th>
                      <th>FACEBOOK</th>
                      <th>AMAZON</th>
                      <th>PROMOCIÓN</th>
                      <th>WEB</th>
                      <th>INSTAGRAM</th>
                      <th>EBAY</th>
                      <th>SERVICIO AL CLIENTE</th>
                      <th>FIDELIZACIÓN CLIENTES</th>
                      <th>PQRSF</th>
                      <th>IDENTIFICACIÓN CLIENTES</th>
                  </tr>
              </thead>
              <tbody class="table-light">
                @if( !isset($contex_empresa))@else
                  @foreach($contex_empresa as $contex_em)
                    <tr>
                      <td class="text-uppercase">{{$contex_em->company_name}}</td>
                      <td>{{$contex_em->origen_capital}}</td>
                      <td>{{$contex_em->dimension}}</td>
                      <td>{{$contex_em->objeto_social}}</td>
                      <td>{{$contex_em->sector_economico}}</td>
                      <td>{{$contex_em->opcion_sector_eco}}</td>
                      <td>{{$contex_em->propietario}}</td>
                      <td>{{$contex_em->tipo_persona}}</td>
                      <td>{{$contex_em->tangible}}</td>
                      <td>{{$contex_em->bienes}}</td>
                      <td>{{$contex_em->intangible}}</td>
                      <td>{{$contex_em->norma_tecnica}}</td>
                      <td>@if($contex_em->identificacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->duracion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->ctrc_microbiologicas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->restricciones === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->empaque === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->destino_final === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->descripcion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->ctrc_fisicas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->forma_uso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->condicion_manejo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->etiquetado === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->composicion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->ctrc_quimica === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->usuarios_potenciales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->condicion_conservacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->presentacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->logotipo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->marca === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->eslogan === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->analisis_competencia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->presupuesto_venta === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->blog === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->mercadolibre === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->olx === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->precio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->venta_directa === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->facebook === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->amazon === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->promocion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->web === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->instagram === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->ebay === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->servicio_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->fidelizacion_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->pqrsf === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                      <td>@if($contex_em->identificacion_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
          </table>
      </div>

      {{-- Sistema general --}}
      <div class="subheading mt-4">
        <strong>Sistema General</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
              <tr>
                  <th>ESTRATÉGICOS</th>
                  <th>MISIONALES</th>
                  <th>APOYO SOPORTE</th>
                  <th>MEJORA</th>
                  <th>NOMBRE PROCESO</th>
                  <th>RESPONSABLE</th>
                  <th>TIPO DE PROCESO</th>
                  <th>PROVEEDOR</th>
                  <th>ACTIVIDAD</th>
                  <th>CLIENTE</th>
                  <th>DOCUMENTOS ASOCIADOS</th>
                  <th>MEDICIÓN SEGUIMIENTO INDICADOR</th>
                  <th>RECURSOS</th>
                  <th>PBJETIVO PROCESO</th>
                  <th>ALCANCE</th>
                  <th>ENTRADA</th>
                  <th>CICLO ACTIVIDAD</th>
                  <th>SALIDA</th>
                  <th>REQUISITOS REGLAMENTARIOS</th>
                  <th>REGISTROS GESTIÓN DE PROCESOS</th>
                  <th>RIESGO ASOCIADO</th>
                  <th>MISIÓN</th>
                  <th>FILOSOFÍA</th>
                  <th>DOFA</th>
                  <th>ESTRATEGICA</th>
                  <th>SEGUIMIENTO REVISIÓN INFO PE</th>
                  <th>VISIÓN</th>
                  <th>DIAGNÓSTICO</th>
                  <th>OBJETIVOS</th>
                  <th>INDICADORES</th>
                  <th>IDENTIFICACIÓN</th>
                  <th>DEFINICIÓN REQUISITOS</th>
                  <th>DETERMINACIÓN NECESIDADES</th>
                  <th>SEGUIMIENTO REVISIÓN INFO PI</th>
                  <th>ORGANIZACIÓN</th>
                  <th>PROCESO</th>
                  <th>PRODUCTO SERVICIO</th>
                  <th>EXCLUSIONES</th>
                  <th>MANUAL FUNCIONES</th>
                  <th>ESTRUCTURA VERTICAL</th>
                  <th>REDARQUICA</th>
                  <th>COMPROMISO</th>
                  <th>PERFIL CARGOS</th>
                  <th>ESTRUCTURA HORIZONTAL</th>
                  <th>POITICA</th>
                  <th>MATRIZ RIESGO</th>
                  <th>MATRIZ DESPLIEGUE OBJETIVOS</th>
                  <th>IDENTIFICACIÓN RECURSO</th>
                  <th>TOMA CONCIENCIA</th>
                  <th>REGISTROS REQUERIDOS PERSONAS</th>
                  <th>PLAN MATENIMIENTO</th>
                  <th>IDENTIFICAIÓN RECURSOS SEGUIMIENTO</th>
                  <th>PLAN METROLOGÍA</th>
                  <th>TRAZABILIDAD MEDICIONES</th>
                  <th>PROCEDIMIENTOS</th>
                  <th>LISTADOS MAESTROS</th>
                  <th>PRESUPUESTOS</th>
                  <th>AMBIENTE TRABAJO</th>
                  <th>ADQUISICIÓN CONOCIMIENTOS</th>
                  <th>MATRIZ COMUNICACIÓN</th>
                  <th>IDENTIFICACIÓN NECESITA MEDICIÓN</th>
                  <th>METODO SEGUIMIENTO MEDICIÓN</th>
                  <th>PERIODO</th>
                  <th>CUANDO EL ANALISIS</th>
                  <th>CONFORMIDAD PRODUCTO/SERVICIO</th>
                  <th>SATISFACCIÓN CLIENTE</th>
                  <th>DESEMPEÑO SISTEMA</th>
                  <th>EFICACIA SISTEMA</th>
                  <th>IMPLEMENTACIÓN SISTEMA</th>
                  <th>EFICACIA RIESGOS OPORTUNIDADES</th>
                  <th>DESEMPEÑO PROVEEDORES EXTERNOS</th>
                  <th>NECESIDAD MEJORA</th>
                  <th>PROCEDIMIENTO AUDITORIA INTERNA</th>
                  <th>EQUIPO AUDITOR</th>
                  <th>PROGRAMA AUDITORIA</th>
                  <th>ACCIONES CORRECTIVAS</th>
                  <th>INFORME</th>
                  <th>PERIODO ESTABLECIDO</th>
                  <th>ENTRADAS</th>
                  <th>SALIDAS</th>
                  <th>REGISTRO REVISIÓN</th>
                  <th>PROCEDIMIENTO ACCIÓN CORRECTIVA</th>
                  <th>ACCIÓN CORRECTIVA</th>
                  <th>REGISTRO MEJORA</th>
              </tr>
          </thead>
          <tbody class="table-light">
            @if( !isset($sis_general))@else
              @foreach($sis_general as $result_general)
                <tr>
                  <td>@if($result_general->estrategicos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->misionales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->apoyo_soporte === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->mejora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->nombre_proceso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->responsable === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->tipo_de_proceso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->proveedor === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->actividad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->documentos_asociados === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->medicion_seguimiento_indicador === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->recursos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->objetivo_proceso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->alcance === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->entrada === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->ciclo_actividad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->salida === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->requisitos_reglamentarios === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->registros_gestion_procesos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->riesgo_asociado === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->mision === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->filosofia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->dofa === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->estrategias === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->seguimiento_informacionpe === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->vision === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->diagnostico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->objetivos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->indicadores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->identificacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->definicion_requisitos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->determinacion_necesidadesyexpectativas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->seguimiento_informacionpi === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->organizacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->proceso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->producto_servicio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->exclusiones === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->manual_funciones === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->estructura_vertical === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->redarquica === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->compromiso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->perfil_cargos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->estructura_horizontal === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->politica === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->matriz_riesgos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->matriz_desplieguede_objetivos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->identificacion_recurso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->toma_conciencia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->registros_requeridos_personas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->plan_mantenimiento === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->identificacion_recursos_medicionyseguimiento === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->plan_metrologia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->trazabilidad_mediciones === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->procedimentos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->listados_maestros === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->presupuestos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->ambiente_trabajo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->adquisicion_conocimiento === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->matriz_comunicacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->identificacion_necesitamedicion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->metodos_seguimientoymedicion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->periodo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->cuando_analisis === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->conformidad_producto_servicio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->satisfaccion_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->desempeno_sistema === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->eficacia_sistema === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->implementacion_sistema === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->eficacia_acciones_riesgosyoportunidades === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->desempeno_proveedores_externos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->necesidad_mejora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->procedimiento_auditoria_interna === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->equipo_auditor === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->programa_auditoria === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->acciones_correctivas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->informe === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->periodo_establecido === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->entradas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->salidas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->registro_revision === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->procedimiento_accion_correctiva === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->accion_correctiva === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                  <td>@if($result_general->registro_mejora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>

      {{-- SGC --}}
      <div class="subheading mt-4">
        <strong>Sistema gestión de calidad (SGC)</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
              <tr>
                  <th>DETERMINACIÓN REQUISITOS PROD/SERV</th>
                  <th>ESTABLECIMIENTOS MÉTODOS</th>
                  <th>PROCESOS CONTRATADOS EXTER</th>
                  <th>PLANIFICACIÓN PROCESOS</th>
                  <th>PLANIFICACIÓN CAMBIOS</th>
                  <th>INFORMACIÓN PRODUCTOS</th>
                  <th>CONTRATOS</th>
                  <th>RETROALIMENTACIÓN</th>
                  <th>PROPIEDAD CLIENTE</th>
                  <th>CONSULTAS</th>
                  <th>PEDIDOS</th>
                  <th>PQRSF</th>
                  <th>CONTINGENCIAS</th>
                  <th>ESPECIFICADOS POR EL CLIENTE</th>
                  <th>ESPECIFICADOS POR LA ORGANIZACIÓN</th>
                  <th>DIFERENCIAS CONTRATOS</th>
                  <th>REGISTRO REVISIÓN</th>
                  <th>NECESARIOS PARA USO ESPECIFICO</th>
                  <th>LEGALES REGLAMENTARIOS</th>
                  <th>CAMBIOS DE PRODUCTO</th>
                  <th>REVISIÓN</th>
                  <th>VERIFICACIÓN</th>
                  <th>VALIDACIÓN</th>
                  <th>ENTRADAS</th>
                  <th>CONTROLES DISEÑO DESARROLLO</th>
                  <th>SALIDAS</th>
                  <th>CAMBIOS DISEÑO</th>
                  <th>REGISTROS DISEÑOS</th>
                  <th>INVESTIGACIÓN DESARROLLO INNOVA</th>
                  <th>PROCESO COMPRAS</th>
                  <th>SELECCIÓN PROVEEDORES</th>
                  <th>REGISTROS CONTROL</th>
                  <th>EVALUACIÓN PROVEEDORES</th>
                  <th>REEVALUACIÓN PROVEEDORES</th>
                  <th>INFORMACIÓN DOCUMENTADA</th>
                  <th>RECURSOS SEGUIMIENTOS MEDICIÓN</th>
                  <th>ACTIVIDADES SEGUIMIENTO MEDICIÓN</th>
                  <th>INFRAESTRUCTURA</th>
                  <th>PERSONAS COMPETENTES</th>
                  <th>VALIDACIÓN REVALIDACIÓN CAPACIDAD</th>
                  <th>PREVENIR ERRORES HUMANOS</th>
                  <th>ACCCIONES LIBERACIÓN ENTREGA</th>
                  <th>PRODUCTOS SERVICIOS</th>
                  <th>ACTIVIDADES</th>
                  <th>PRESERVACIÓN</th>
                  <th>ACTIVIDADES POSTERIRES ENTREGA</th>
                  <th>PLANIFICACIÓN CAMBIOS PRODUCTOS</th>
                  <th>IDENTIFICACIÓN</th>
                  <th>TRAZABILIDAD</th>
                  <th>REGISTROS REQUERIDOS SEGUIMIENTO</th>
                  <th>PROPIEDAD CLIENTE</th>
                  <th>PROPIEDAD PROVEEDORES</th>
                  <th>REGISTROS SOBRE ESTADO</th>
                  <th>LIBERACIÓN</th>
                  <th>RESPONSABLE</th>
                  <th>EVIDENCIA CRITERIOS ACEPTACIÓN</th>
                  <th>PROCEDIMIENTO CONTROL NO CONFORMES</th>
                  <th>CONTROL NO CONFORME</th>
                  <th>REGISTROS REQUERIDOS CONFORMES</th>
                  <th>IDENTIFICACIONES NO CONFORMES</th>
                  <th>ACCIÓN TOMADA</th>
              </tr>
          </thead>
          <tbody class="table-light">
            @if( !isset($result_sgc))@else
              @foreach($result_sgc as $res_sgc)
              <tr>
                <td>@if($res_sgc->determinacion_requisitos_productos_servicios === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->establecimiento_metodos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->procesos_contratados_externamente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->planificacion_procesos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->planificacion_cambios === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->informacion_productos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->contratos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->retroalimentacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->propiedad_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->consultas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->pedidos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->pqrsf === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->contingencias === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->especificados_por_el_cliente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->especificados_por_la_organzacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->diferencias_contrato === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registro_revision === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->necesarios_para_uso_especificado === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->legales_reglamentarios === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->cambios_en_producto === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->revision === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->verificacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->validacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->entradas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->controles_diseno_desarrollo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->salidas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->cambios_diseno === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registros_diseno === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->investigacion_desarrollo_innovacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->proceso_compras === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->seleccion_proveedores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registros_control === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->evaluacion_proveedores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->reevaluacion_proveedores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->informacion_documentada === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->recursos_seguimiento_medicion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->actividades_seguimiento_medicion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->infraestructura === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->personas_competentes === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->validacion_revalidacion_capacidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->prevenir_errores_humanos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->acciones_liberacion_entrega_pos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->productos_servicios === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->actividades === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->preservacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->actividades_posteriores_entrega === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->planificacion_cambios_produccion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->identificacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->trazabilidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registros_requeridos_identificacion_trazabilidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->propiedad_clientes === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->propiedad_proveedores_externos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registros_notificaciones_sobre_estado === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->liberacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->responsable === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->evidencia_conformidad_criterios_aceptacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->procedimiento_control_no_conforme === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->control_no_conforme === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->registros_requeridos_control === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->identificacion_no_conforme === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sgc->accion_tomada === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>

      {{-- SGA --}}
      <div class="subheading mt-4">
        <strong>Sistema gestión ambientasl (SGA)</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
              <tr>
                  <th>PRECIPITACIÓN MM/AA</th>
                  <th>TEMPERATURA MEDIA</th>
                  <th>BRILLO SOLAR MEDIO</th>
                  <th>HUMEDAD ANUAL MEDIA</th>
                  <th>MATERIAL PARTICULADO</th>
                  <th>GASES</th>
                  <th>COMPUESTOS ORGÁNICOS VOLÁTILES</th>
                  <th>OZONO TOTAL MENSUAL</th>
                  <th>RUIDO AMBIENTAL</th>
                  <th>DEMANDA BIOLÓGICA OXIGENO</th>
                  <th>DEMANDA QUÍMICA OXIGENO</th>
                  <th>SÓLIDOS SUSPENDIDOS</th>
                  <th>SÓLIDOS SEDIMENTALES</th>
                  <th>SÓLIDOS TOTALES</th>
                  <th>GRASAS Y ACEITES</th>
                  <th>PH</th>
                  <th>TEMPERATURA</th>
                  <th>DISPONIBILIDAD DE AGUA</th>
                  <th>ARENA ROCA</th>
                  <th>MADERA</th>
                  <th>FIBRAS Y RESINAS</th>
                  <th>BIONAMA</th>
                  <th>PESCA Y ACUICULTURA</th>
                  <th>CARNES Y PIELES</th>
                  <th>PLATAS MEDICINALES</th>
                  <th>INGREDIENTES NATURALES</th>
                  <th>GANADERIA</th>
                  <th>AGUICULTURA</th>
                  <th>TIPO DE COBERTURA SUELO</th>
                  <th>NUMERO DE ESPECIES</th>
                  <th>CONFLICTO USO DEL SUELO</th>
                  <th>FENOMENOS NATURALES</th>
                  <th>MANEJO VERTIMIENTOS DE AGUA</th>
                  <th>EMISIONES EN EL AIRE</th>
                  <th>RESIDUOS SOLIDOS PELIGROSOS</th>
                  <th>NORMATIVO EN EL SUELO</th>
                  <th>NORMATIVO EN LA FLORA</th>
                  <th>NORMATIVO EN LA FAUNA</th>
                  <th>COMUNIDADES INDIGENAS</th>
                  <th>COMUNICADES AFRODECENDIENTES</th>
                  <th>COMUNIDADES CAMPESINAS</th>
                  <th>COMUNIDADES VULNERABLES</th>
                  <th>PATRIMONIO</th>
                  <th>RESPONSABILIDAD SOCIAL AMBIENTAL</th>
                  <th>IMPACTO EN EL AIRE</th>
                  <th>IMPACTO EN EL AGUA</th>
                  <th>IMPACTO EN EL SUELO</th>
                  <th>IMPACTO EN LA FLORA</th>
                  <th>IMPACTO EN LA FAUNA</th>
                  <th>EDUCACIÓN</th>
                  <th>SALUD</th>
                  <th>RECREACIÓN Y DEPORTES</th>
                  <th>INFRAESTRUCTURA TRANSPORTE</th>
                  <th>ACUEDUCTO ALCANTARILLADO ENERGIA GAS</th>
                  <th>INTERNET TELEVISIÓN EMISORAS</th>
                  <th>NATALIDAD</th>
                  <th>MORTALIDAD</th>
                  <th>MOVILIDAD ESPECIAL</th>
                  <th>ESTRUCTURA POBLACIÓN</th>
                  <th>DISTRIBUCIÓN URBANO RURAL</th>
                  <th>DENSIDAD POBLACIÓN</th>
                  <th>NECESIDADES BASICAS INSATISFECHAS</th>
                  <th>ESTRUCTURA PROPIEDAD</th>
                  <th>EMPRESAS PRODUCTIVAS</th>
                  <th>MERCADO LABORAL</th>
                  <th>TENDENCIAS DEL EMPLEO</th>
                  <th>PROGRAMAS Y PROYECTOS PRODUCTIVOS</th>
                  <th>CONTEXTO INTERNO</th>
                  <th>CONTEXTO EXTERNO</th>
                  <th>ACCIONES PARA ABORDAR RIESGOS OPORT</th>
                  <th>OBJETIVOS AMBIENTALES Y PLANIFICACIÓN</th>
                  <th>POLITICA AMBIENTAL</th>
                  <th>ROLES RESPONSABILIDADES AUTORIDADES</th>
                  <th>RECURSOS</th>
                  <th>COMPETENCIA</th>
                  <th>TOMA DE CONCIENCIA</th>
                  <th>COMUNICACIÓN</th>
                  <th>INFORMACIÓN DOCUMENTADA</th>
                  <th>PLANIFICACIÓN Y CONTROL OPERACIONAL</th>
                  <th>RESPUESTA EMERGENCIAS AMBIENTALES</th>
                  <th>SEGUIMIENTO MEDICIÓN ANALISIS</th>
                  <th>AUDITORIA INTERNA</th>
                  <th>REVISIÓN DIRECCIÓN</th>
                  <th>NO CONFORMIDADES ACCIONES CORRECTIVAS</th>
                  
              </tr>
          </thead>
          <tbody class="table-light">
            @if( !isset($result_sga))@else
              @foreach($result_sga as $res_sga)
              <tr>
                <td>@if($res_sga->precipitacionmm_ano_mm_mes === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->temperaturamediamaxima_minima === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->brillosolarmedio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->humedadanualmedia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->materialparticuladopm10_pm2_5 === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->gasesco_co2_nox_so2 === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->compuestosorganicosvolatilescov === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->ozonototalmensual === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->ruidoambiental === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->demandabiologicadeoxigenodbo5 === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->demandaquimicadeoxigenodqo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->solidossuspendidostotalessst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->solidossedimentablesssed === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->solidostotalesst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->grasasyaceites === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->ph === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->temperatura === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->disponibilidaddeagua === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->arenayroca === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->madera === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->fibrasyresinas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->bionama === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->pescayacuicultura === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->carneypieles === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->plantasmedicinales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->ingredientesnaturales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->ganaderia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->agricultura === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->areaportipodecoberturasuelohectareas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->numerodeespeciesfaunayflora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->conflictosdeusodelsuelo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->fenomenosnaturales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->manejodevertimientosdeagua === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->emisionesenelaire === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->residuossolidospeligrososyposconsumo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->reglamentonormativoenelsuelo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->reglamentonormativoenlaflora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->reglamentonormativoenlafauna === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->comunidadesindigenas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->comunidadesafrodescendientes === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->comunidadescampesinas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->comunidadesencondiciondevulnerabilidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->patrimonio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->programaderesponsabilidadsocialyambiental === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->impactoambientalenaire === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->impactoambientalenagua === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->impactoambientalensuelo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->impactoambientalenflora === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->impactoambientalenfauna === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->educacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->salud === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->recreacionydeporte === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->infraestructuradetransporte === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->acueducto_alcantarillado_energiaelectrica_gasdomiciliario === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->internet_television_emisorascomunitarias === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->natalidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->mortalidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->movilidadespacial === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->estructuradelapoblacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->distribucionespacialurbano_rural === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->densidaddepoblacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->necesidadesbasicasinsatisfechasnbi === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->estructuradelapropiedad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->empresasproductivas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->mercadolaboral === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->tendenciasdelempleo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->programasyproyectosproductivos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->contextointerno === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->contextoexterno === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->accionesparaabordarriesgosyoportunidades === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->objetivosambientalesyplanificacionparalograrlos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->politicaambiental === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->roles_responsabilidadesyautoridades === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->recursos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->competencia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->tomadeconciencia === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->comunicacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->informaciondocumentada === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->planificacionycontroloperacional === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->preparacionyrespuestaanteemergenciasambientales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->seguimiento_medicion_analisisyevaluacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->auditoriainterna === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->revisionporladireccion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sga->noconformidadesyaccioncorrectiva === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      
      {{-- SST --}}
      <div class="subheading mt-4">
        <strong>Sistema de salud y seguridad en el trabajo (SST)</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
              <tr>
                <th>PROFESIONAL CON LICENCIA SST</th>
                <th>FACILITADOR ASISTENTE</th>
                <th class="px-3">RIESGO I</th>
                <th class="px-3">RIESGO II</th>
                <th class="px-3">RIESGO III</th>
                <th class="px-3">RIESGO IV</th>
                <th class="px-3">RIESGO V</th>
                <th>CAPACITACIÓN COPASST</th>
                <th>COMITÉ DE CONVIVENCIA LABORAL</th>
                <th>CAPACITACIÓN ANUAL SST</th>
                <th>INDUCCIÓN Y REINDUCCIÓN SST</th>
                <th>MATRIZ LEGAL SST</th>
                <th>REPORTE ACCIDENTES ENFERMEDAD LABORAL</th>
                <th>FRECUENCIA ACCIDENTALIDAD</th>
                <th>ACCIDENTES TRABAJO MORTALES</th>
                <th>AUSENTISMO CAUSA MÉDICA</th>
                <th>INVESTIGACIÓN DE TRABAJO</th>
                <th>SEVERIDAD ACCIDENTALIDAD</th>
                <th>PREVALENCIA ENFERMEDAD LABORAL</th>
                <th>BIOLÓGICO</th>
                <th>FÍSICO</th>
                <th>QUÍMICO</th>
                <th>PSICOSOCIAL</th>
                <th>BIOMECÁNICO</th>
                <th>CONDICIONES SEGURIDAD</th>
                <th>FENÓMENOS NATURALES</th>
                <th>MEDIDAS POR PARTE TRABAJADORES</th>
                <th>PROCEDIMIENTOS INSTRUCTIVOS</th>
                <th>INSPECCIONES MAQUINARIA EQUIPOS</th>
                <th>MANTENIMIENTO PERIÓDICO</th>
                <th>ENTREGA EPP</th>
                <th>PREPARACIÓN ANTE EMERGENCIAS</th>
                <th>BRIGADA ANTE EMERGENCIAS</th>
                <th>PLAN RECARGA EXTINTORES</th>
                <th>PERFILES CARGO</th>
                <th>EVALUACIONES MÉDICAS</th>
                <th>ESTILO DE VIDA ENTORNO SALUDABLE</th>
                <th>RESTICCIONES RECOMENDACIONES MEDICO LABORAL</th>
                <th>POLITICA SST</th>
                <th>OBJETIVOS SST</th>
                <th>EVALUACIÓN INICIAL SG-SST</th>
                <th>PLAN ANUAL TRABAJO</th>
                <th>RETENCIÓN DOCUMENTAL SST</th>
                <th>RENDICIÓN DE CUENTAS</th>
                <th>MECANISMOS COMUNICACIÓN</th>
                <th>SELECCIÓN PROVEEDORES CONTRATISTAS</th>
                <th>GESTIÓN CAMBIO</th>
                <th>AUDITORIA ANUAL</th>
                <th>REVISIÓN ALTA DIRECCIÓN</th>
                <th>PLAN MEJORAMIENTO</th>
                <th>ESTRUCTURA</th>
                <th>PROCESO</th>
                <th>RESULTADO</th>  
              </tr>
          </thead>
          <tbody class="table-light">
            @if( !isset($result_sst))@else
              @foreach($result_sst as $res_sst)
              <tr>
                <td>@if($res_sst->profesional_con_licencia_sst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->facilitador_asistente === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->i === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->ii === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->iii === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->iv === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->v === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->conformacion_capacitacion_copasst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->conformacio_comite_convivencia_laboral === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->programa_capacitacion_anualsst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->induccion_reinduccion_sst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->matriz_legalsst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->reporte_accidentes_enfermedad_laboral === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->frecuencia_accidentalidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->proporcion_accidente_trabajo_mortales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->ausentismo_porcausa_medica === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->investigacion_accidentes_trabajo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->severidad_accidentalidad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->prevalencia_enfermedad_laboral === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->biologico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->fisico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->quimico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->psicosocial === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->biomecanico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->condiciones_seguridad === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->fenomenos_naturales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->aplicacion_medidas_parte_trabajadores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->procedimientos_instructivos === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->inspecciones_maquinaria_equipo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->mantenimiento_periodico === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->entrega_epp === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->plan_prevencion_ante_emergencias === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->brigada_preparacion_respuesta_ante_emergencias === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->plan_recarga_extintores === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->perfiles_cargo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->evaluaciones_medicas_ingreso_periodico_egreso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->estilos_vida_entorno_saludable === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->restricciones_recomendaciones_medico_laborales === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->politica_seguridad_salud_trabajo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->objetivos_sst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->evaluacion_inicial_sgsst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->plan_anual_trabajo === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->archivo_retencion_documental_sst === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->rendicion_cuentas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->mecanismos_comunicacion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->evaluacion_seleccion_proveedores_contratistas === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->gestion_cambio === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->auditoria_anual === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->revision_alta_direccion === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->plan_mejoramiento === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->estructura === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->proceso === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
                <td>@if($res_sst->resultado === 'si')<i class="fas fa-check"></i>@else<i class="fas fa-times"></i>@endif</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>

      {{-- Identificar riesgos --}}
      <div class="subheading mt-4">
        <strong>Riesgos identificados</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
            <tr>
              <th class="px-5">EMPRESA</th>
              <th class="px-5">TIPO</th>
              <th class="px-5">PROCESO</th>
              <th class="px-5">OBJETIVO</th>
              <th class="px-5">ACTIVIDAD CRÍTICA</th>
              <th class="px-5">SISTEMA ASOCIADO</th>
              <th class="px-5">VARIABLE</th>
              <th class="px-5">FACTOR RIESGO</th>
              <th class="px-5">RIESGO</th>
              <th class="px-5">DESCRIPCIÓN</th>
              <th class="px-5">CAUSA RAÍZ</th>
              <th class="px-5">CONSECUENCIAS</th>
            </tr>
          </thead>
          <tbody class="table-light">
            @if( !isset($result_riesgo))@else
              @foreach($result_riesgo as $res_riesgo)
              <tr>
                <td class="text-uppercase">{{$res_riesgo->company_name}}</td>
                <td>{{$res_riesgo->tipo}}</td>
                <td>{{$res_riesgo->proceso}}</td>
                <td>{{$res_riesgo->objetivo}}</td>
                <td>{{$res_riesgo->actividad_critica}}</td>
                <td>{{$res_riesgo->sistema_asociado}}</td>
                <td>{{$res_riesgo->variable}}</td>
                <td>{{$res_riesgo->factor_riesgo}}</td>
                <td>{{$res_riesgo->riesgo}}</td>
                <td>{{$res_riesgo->descripcion}}</td>
                <td>{{$res_riesgo->causa_raiz}}</td>
                <td>{{$res_riesgo->consecuencias}}</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>

      {{-- Análisis riesgos calificados --}}
      <div class="subheading mt-4">
        <strong>Riesgos analizados y valorados</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
            <tr>
              <th class="px-5">EMPRESA</th>
              <th>PROBABILIDAD</th>
              <th>IMPACTO</th>
              <th class="px-5">RIESGO INHERENTE</th>
              <th class="px-5">MANEJO DEL RIESGO</th>
              <th class="px-5">CONTROLES EXISTENTES</th>
              <th class="px-5">TIPOS DE CONTROL</th>
              <th>PROBABILIDAD DEFINITIVO</th>
              <th>IMPACTO DEFINITIVO</th>
              <th class="px-5">NUEVO RIESGO INHERENTE</th>
              <th class="px-5">NUEVO MANEJO DEL RIESGO</th>
              <th>OPCIONES DE MANEJO</th>
            </tr>
          </thead>
          <tbody>
            @if( !isset($result_valor))@else
              @foreach ($result_valor as $res_valor)
              <tr>
                  <td class="text-uppercase">{{$res_valor->company_name}}</td>
                  <td>{{$res_valor->probabilidad}}</td>
                  <td>{{$res_valor->impacto}}</td>
                  <td>{{$res_valor->riesgo_inherente}}</td>
                  <td>{{$res_valor->manejo_riesgo}}</td>
                  <td>{{$res_valor->controles_existentes}}</td>
                  <td>{{$res_valor->tipos_control}}</td>
                  <td>{{$res_valor->probabilidad_definitivo}}</td>
                  <td>{{$res_valor->impacto_definitivo}}</td>
                  <td>{{$res_valor->nueva_evaluacion_riesgo}}</td>
                  <td>{{$res_valor->nuevo_manejo_riesgo}}</td>
                  <td>{{$res_valor->opciones_manejo}}</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>

      {{-- Plan de acción --}}
      <div class="subheading mt-4">
        <strong>Plan de Acción de riesgos</strong>
      </div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
            <tr>
                <th class="px-5">EMPRESA</th>
                <th class="px-5">ACCIONES</th>
                <th class="px-5">RESPONSABLES</th>
                <th>FECHA INICIO</th>
                <th>FECHA FINAL</th>
                <th class="px-5">INDICADOR</th>
                <th class="px-5">META</th>
                <th class="px-5">SEGUIMIENTO</th>
            </tr>
          </thead>
          <tbody>
            @if( !isset($plan_accion))@else
              @foreach ($plan_accion as $item)
              <tr>
                  <td class="text-uppercase">{{$item->company_name}}</td>
                  <td>{{$item->acciones}}</td>
                  <td>{{$item->responsables}}</td>
                  <td>{{$item->fecha_inicio}}</td>
                  <td>{{$item->fecha_terminacion}}</td>
                  <td>{{$item->indicador}}</td>
                  <td>{{$item->meta}}</td>
                  <td>{{$item->seguimiento}}</td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      {{-- //se pega aqui, el div de abajo solo se baja --}}
    </div>
  </div>
</section>

@endsection
