@extends('layout.index')

@section('title', 'Idenfiticación de riesgo')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
    <div class="resume-section-content">
        <h2 class="m-3">Identificación de Riesgos</h2>
        <div class="container">
            <form action="{{route('agregar-identificacion-riesgo')}}" method="post">
                @csrf
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="subheading">Riesgo</div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="" class="fs-7" data-bs-toggle="modal" data-bs-target="#modalFactores"><i class="fas fa-info-circle"></i>Ayuda</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex align-items-start justify-content-between mb-3">
                            <div class="col-lg-3 col-sm-12">
                                <label class="form-label m-0" for="tipoIdRiesgo">Tipo</label>
                                <select class="form-select" id="tipoIdRiesgo" name="tipo_id_riesgo" aria-label="tipo">
                                    <option selected> --Seleccionar-- </option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <label class="form-label m-0" for="procesoIdRiesgo">Proceso</label>
                                <input type="text" class="form-control" id="procesoIdRiesgo" name="proceso_id_riesgo" placeholder="Escribir...">
                            </div>
                            <div class="col-lg-3 col-12">
                                <label class="form-label m-0" for="objetivoIdRiesgo">Objetivo</label>
                                <textarea class="form-control" id="objetivoIdRiesgo" name="objetivo_id_riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                            <div class="col-lg-3 col-12">
                                <label class="form-label m-0" for="actCriticaIdRiesgo">Actividad crítica</label>
                                <textarea class="form-control" id="actCriticaIdRiesgo" name="actividad_critica_id_Riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                        </div>
                        <div class="row d-flex align-items-end justify-content-between mb-3">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label m-0" for="sistAsociadoIdRiesgo">Sistema asociado</label>
                                <select class="form-select" id="sistAsociadoIdRiesgo" name="sistema_asociado_id_riesgo" aria-label="Sistema asociado">
                                    <option selected> --Seleccionar-- </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label m-0" for="variableIdRiesgo">Variable / Sistema asociado</label>
                                <select class="form-select" id="variableIdRiesgo" name="variable_id_riesgo" aria-label="Variable riesgo">
                                    <option selected> --Seleccionar-- </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label m-0" for="factorIdRiesgo">Factores de riesgo</label>
                                <select class="form-select" id="factorIdRiesgo" name="factor_id_riesgo" aria-label="Factor riesgo">
                                    <option selected> --Seleccionar-- </option>
                                </select>
                            </div>
                        </div>
                        <div class="row d-flex align-items-start justify-content-between">
                            <div class="col-lg-3 col-sm-12">
                                <label class="form-label m-0" for="riesgoIdRiesgo">Riesgo</label>
                                <textarea class="form-control" id="riesgoIdRiesg" name="riesgo_id_riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                            <div class="col-lg-3 col-12">
                                <label class="form-label m-0" for="descripcionIdRiesgo">Descripción</label>
                                <textarea class="form-control" id="descripcionIdRiesgo" name="descripcion_id_riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                            <div class="col-lg-3 col-12">
                                <label class="form-label m-0" for="causaRaizIdRiesgo">Causa raíz</label>
                                <textarea class="form-control" id="causaRaizIdRiesgo" name="causa_raiz_id_riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                            <div class="col-lg-3 col-12">
                                <label class="form-label m-0" for="consecuenciasIdRiesgo">Consecuencias</label>
                                <textarea class="form-control" id="consecuenciasIdRiesgo" name="consecuencias_id_riesgo" rows="2" placeholder="Escribir..."></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i>&nbspAgregar</button>
                    </div>
                </div>
            </form>

            <div class="subheading mt-4"><strong>Riesgos identificados</strong></div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover text-center align-middle">
                    <thead class="bg-primary text-nowrap">
                        <tr>
                            <th class="px-2">TIPO</th>
                            <th class="px-2">PROCESO</th>
                            <th class="px-2">OBJETIVO</th>
                            <th class="px-2">ACTIVIDAD CRÍTICA</th>
                            <th class="px-2">SISTEMA ASOCIADO</th>
                            <th class="px-2">VARIABLE</th>
                            <th class="px-2">FACTOR RIESGO</th>
                            <th class="px-3">RIESGO</th>
                            <th class="px-5">DESCRIPCIÓN</th>
                            <th class="px-2">CAUSA RAÍZ</th>
                            <th class="px-2">CONSECUENCIAS</th>
                            <th class="px-4">ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($idenfiticacion_riesgo as $item)
                        <tr>
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->proceso}}</td>
                            <td>{{$item->objetivo}}</td>
                            <td>{{$item->actividad_critica}}</td>
                            <td>{{$item->sistema_asociado}}</td>
                            <td>{{$item->variable}}</td>
                            <td>{{$item->factor_riesgo}}</td>
                            <td>{{$item->riesgo}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->causa_raiz}}</td>
                            <td>{{$item->consecuencias}}</td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-4 me-1 p-0">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button>
                                    </div>
                                    <div class="col-4 ms-1 p-0">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<!--Modal factores riesgo-->
<div class="modal fade" tabindex="-1" id="modalFactores">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">FACTORES DE RIESGO</h3>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
          ></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-sm table-bordered table-hover align-middle">
            <thead class="bg-primary text-nowrap">
              <tr class="text-center">
                <th>FACTOR</th>
                <th>DEFINICIÓN</th>
                <th>DESCRIPCIÓN</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">Procesos</td>
                <td class="text-center">
                  Eventos relacionados con errores en las actividades que deben
                  realizar los servidores de la organización
                </td>
                <td>
                  <ul class="m-0">
                    <li>Falta de procedimientos</li>
                    <li>Errores de grabación, autorización</li>
                    <li>Errores de calculos para pagos internos y externos</li>
                    <li>Falta de capacitación, temas relacionados con el personal</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">Talento humano</td>
                <td class="text-center">
                  Incluye seguridad y salud en el trabajo. Se analiza posible
                  dolo e intención frente a la corrupción
                </td>
                <td>
                  <ul class="m-0">
                    <li>Hurto activos</li>
                    <li>Posibles comportamientos no éticos de los empleados</li>
                    <li>Fraude interno (corrupción, soborno)</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">Tecnología</td>
                <td class="text-center">
                  Eventos relacionados con la infraestructura tecnológica de la
                  entidad
                </td>
                <td>
                  <ul class="m-0">
                    <li>Daño de equipos</li>
                    <li>Caida de aplicaciones</li>
                    <li>Caida de redes</li>
                    <li>Errores en programas</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="text-center">Infraestructura</td>
                <td class="text-center">
                  Eventos relacionados con la infraestructura física de la
                  entidad
                </td>
                <td>
                  <ul class="m-0">
                    <li>Derrumbes</li>
                    <li>Incendios</li>
                    <li>Inundaciones</li>
                    <li>Daños a activos fijos</li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@endsection

@section('script')
    <script src="js/identificacion-riesgo.js"></script>
@endsection