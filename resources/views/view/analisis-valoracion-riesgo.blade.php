@extends('layout.index')

@section('title', 'Análisis de riesgo')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
  <div class="resume-section-content">
    <h2 class="m-3">Análisis de Riesgos</h2>
    <div class="container">
              
      <!-- Riesgos pendiente de calificar -->
      <div class="row">
        <div class="col-6">
          <div class="subheading"><strong>Riesgos pendientes de calificar</strong></div>
        </div>  
        <div class="col-6 text-end">
          <a href="" class="fs-7" data-bs-toggle="modal" data-bs-target="#myModal_3"><i class="fas fa-info-circle"></i>Matriz de calor</a>    
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
            <tr>
              <th colspan="6" class="bg-primary1">RIESGO</th>
              <th colspan="4" class="bg-primary2">ANÁLISIS DEL RIESGO</th>
              <th colspan="7" class="bg-primary3">VALORACIÓN DEL RIESGO</th>
              <th rowspan="2" class="align-middle">ACCION</th>
            </tr>
            <tr>
              <th class="px-2">PROCESO</th>
              <th class="px-2">OBJETIVO</th>
              <th class="px-2">ACTIVIDAD CRÍTICA</th>
              <th class="px-2">SISTEMA DE GESTIÓN</th>
              <th class="px-2"> VARIABLE </th>
              <th class="px-2">FACTOR RIESGO</th>
              <th class="px-2">
                <span>PROBABILIDAD</span>
                <a href="" data-bs-toggle="modal" data-bs-target="#myModal"><i class="text-black fas fa-info-circle"></i></a>
              </th>
              <th class="px-4">
                <span>IMPACTO</span>
                <a href="" data-bs-toggle="modal" data-bs-target="#myModal_2"><i class="text-black fas fa-info-circle"></i></a>
              </th>
              <th class="px-2">RIESGO INHERENTE</th>
              <th class="px-2">MANEJO DEL RIESGO</th>
              <th>CONTROLES EXISTENTES</th>
              <th>TIPOS DE CONTROL</th>
              <th>PROBABILIDAD DEFINITIVO</th>
              <th>IMPACTO DEFINITIVO</th>
              <th>NUEVO RIESGO INHERENTE</th>
              <th>NUEVO MANEJO DEL RIESGO</th>
              <th>OPCIONES DE MANEJO</th>
            </tr>
          </thead>
          <tbody class="table-light" onchange="handleChange(event)">
            @foreach ($identificacion_riesgos as $item)
              @if (!$item->calificado)
                <form action="{{route('agregar-analisis-riesgo')}}" method="post">
                  @csrf
                  <input type="hidden" name="id_riesgo" value="{{$item->id_riesgo}}">
                  <tr data-id="{{$item->id_riesgo}}" data-evento="1">
                    <td>{{$item->tipo}}</td>
                    <td>{{$item->objetivo}}</td>
                    <td>{{$item->actividad_critica}}</td>
                    <td>{{$item->sistema_asociado}}</td>
                    <td>{{$item->variable}}</td>
                    <td>{{$item->factor_riesgo}}</td>
                    <td>
                      <select class="form-select" name="calf_probablididad_{{$item->id_riesgo}}" required>
                        <option selected disabled>-Calificar-</option>
                        <option value="1">Muy baja</option>
                        <option value="2">Baja</option>
                        <option value="3">Media</option>
                        <option value="4">Alta</option>
                        <option value="5">Muy alta</option>
                      </select>
                    </td>
                    <td>
                      <select class="form-select" name="calf_impacto_{{$item->id_riesgo}}" required>
                        <option selected disabled>-Calificar-</option>
                        <option value="1">Leve</option>
                        <option value="2">Menor</option>
                        <option value="3">Moderado</option>
                        <option value="4">Mayor</option>
                        <option value="5">Catastrófico</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="form-control" name="evaluacion_riesgo_{{$item->id_riesgo}}" id="evaluacion_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición de la funcion handleChange --}} </textarea>
                    </td>
                    <td>
                      <textarea class="form-control" name="manejo_riesgo_{{$item->id_riesgo}}" id="manejo_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición de la funcion handleChange --}} </textarea>
                    </td>
                    <td>
                      <textarea class="form-control" name="controles_existentes_{{$item->id_riesgo}}" id="controles_existentes_{{$item->id_riesgo}}" rows="2" placeholder="Digitar controles existentes..." required></textarea>
                    </td>
                    <td>
                      <select class="form-select" name="tipos_control_{{$item->id_riesgo}}" required>
                        <option selected disabled>-Calificar-</option>
                        <option value="control preventivo">Control preventivo</option>
                        <option value="control detectivo">Control detectivo</option>
                        <option value="control correctivo">Control correctivo</option>
                      </select>
                    </td>
                    <td>
                      <textarea class="text-center form-control" type="text" name="nueva_calf_probabilidad_{{$item->id_riesgo}}" id="nueva_calf_probabilidad_{{$item->id_riesgo}}" readonly rows="1"></textarea>
                    </td>
                    <td>
                      <textarea class="text-center form-control" type="text" name="nueva_calf_impacto_{{$item->id_riesgo}}" id="nueva_calf_impacto_{{$item->id_riesgo}}" readonly rows="1"></textarea>
                    </td>
                    <td>
                      <textarea class="form-control" name="nueva_evaluacion_riesgo_{{$item->id_riesgo}}" id="nueva_evaluacion_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición de la nueva evaluacion --}} </textarea>
                    </td>
                    <td>
                      <textarea class="form-control" name="nuevo_manejo_riesgo_{{$item->id_riesgo}}" id="nuevo_manejo_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición del nuevo manejo --}} </textarea>
                    </td>
                    <td>
                      <select class="form-select" name="opciones_manejo_{{$item->id_riesgo}}" required>
                        <option selected disabled>-Calificar-</option>
                        <option value="asumir">Asumir</option>
                        <option value="reducir">Reducir</option>
                        <option value="mitigar">Mitigar</option>
                        <option value="evitar">Evitar</option>
                        <option value="transferir">Transferir</option>
                      </select>
                    </td>
                    <td>
                      <button type="submit" class="btn btn-primary rounded-pill">Guardar</button>
                    </td>
                  </tr>
                </form>
              @endif
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Riesgos calificados -->
      <div class="subheading mt-4"><strong>Riesgos calificados</strong></div>
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
            <tr>
              <th colspan="6" class="bg-primary1">RIESGO</th>
              <th colspan="4" class="bg-primary2">ANÁLISIS DEL RIESGO</th>
              <th colspan="7" class="bg-primary3">VALORACIÓN DEL RIESGO</th>
              <th rowspan="2" class="px-4 align-middle">ACCION</th>
            </tr>
            <tr>
              <th class="px-2">PROCESO</th>
              <th class="px-2">OBJETIVO</th>
              <th class="px-2">ACTIVIDAD CRÍTICA</th>
              <th class="px-2">SISTEMA DE GESTIÓN</th>
              <th class="px-2">VARIABLE</th>
              <th class="px-2">FACTOR RIESGO</th>
              <th class="px-3">PROBABILIDAD</th>
              <th class="px-5">IMPACTO</th>
              <th class="px-2">RIESGO INHERENTE</th>
              <th class="px-2">MANEJO DEL RIESGO</th>
              <th>CONTROLES EXISTENTES</th>
              <th>TIPOS DE CONTROL</th>
              <th>PROBABILIDAD DEFINITIVO</th>
              <th>IMPACTO DEFINITIVO</th>
              <th>NUEVO RIESGO INHERENTE</th>
              <th>NUEVO MANEJO DEL RIESGO</th>
              <th>OPCIONES DE MANEJO</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($analisis_riesgos as $item)
              <tr>
                <td>{{$item->tipo}}</td>
                <td>{{$item->objetivo}}</td>
                <td>{{$item->actividad_critica}}</td>
                <td>{{$item->sistema_asociado}}</td>
                <td>{{$item->variable}}</td>
                <td>{{$item->factor_riesgo}}</td>
                <td>{{$item->probabilidad}}</td>
                <td>{{$item->impacto}}</td>
                <td>{{$item->riesgo_inherente}}</td>
                <td>{{$item->manejo_riesgo}}</td>
                <td>{{$item->controles_existentes}}</td>
                <td class="text-capitalize">{{$item->tipos_control}}</td>
                <td>{{$item->probabilidad_definitivo}}</td>
                <td>{{$item->impacto_definitivo}}</td>
                <td>{{$item->nueva_evaluacion_riesgo}}</td>
                <td>{{$item->nuevo_manejo_riesgo}}</td>
                <td class="text-capitalize">{{$item->opciones_manejo}}</td>
                <td>
                  <div class="row justify-content-center">
                    <div class="col-4 me-1 p-0">
                      <button type="button" onclick="llenandoModal({{$item}})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarCalificacion{{$item->id_analisis_valoracion}}" >
                        <i class="far fa-edit"></i>
                      </button>
                    </div>
                    <div class="col-4 ms-1 p-0">
                      <button type="submit" class="btn btn-primary">
                        <i class="far fa-trash-alt"></i>
                      </button>
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


<!-- Modal Editar -->
@foreach ($analisis_riesgos as $item)
    <div class="modal fade" id="modalEditarCalificacion{{$item->id_analisis_valoracion}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title">
                Editar Valoracion Riesgo
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('editar-riesgo', $item->id_analisis_valoracion)}}" method="POST">
                <div class="modal-body g-2">
                    @csrf
                    <input type="hidden" name="id_analisis_valoracion" value="{{$item->id_analisis_valoracion}}">
                    <div onchange="handleChange(event)">
                        <div class="row g-2 mb-3" data-id="{{$item->id_analisis_valoracion}}" data-evento="2">
                            <div class="col-3">
                                <h5 class="">PROBABILIDAD</h5>
                                <select class="form-select" name="edit_calf_probablididad_{{$item->id_analisis_valoracion}}" id="edit_calf_probablididad_{{$item->id_analisis_valoracion}}">
                                    <option selected disabled>-Calificar-</option>
                                    <option value="1">Muy baja</option>
                                    <option value="2">Baja</option>
                                    <option value="3">Media</option>
                                    <option value="4">Alta</option>
                                    <option value="5">Muy alta</option>
                                </select>
                            </div>
                            <div class="col-3 mb-3">
                                <h5 class="">IMPACTO</h5>
                                <select class="form-select" name="edit_calf_impacto_{{$item->id_analisis_valoracion}}" id="edit_calf_impacto_{{$item->id_analisis_valoracion}}">
                                    <option selected disabled>-Calificar-</option>
                                    <option value="1">Leve</option>
                                    <option value="2">Menor</option>
                                    <option value="3">Moderado</option>
                                    <option value="4">Mayor</option>
                                    <option value="5">Catastrófico</option>
                                </select>                    
                            </div>
                            <div class="col-3">
                                <h5 class="">RIESGO INHERENTE</h5>
                                <textarea class="form-control" name="edit_evaluacion_riesgo_{{$item->id_analisis_valoracion}}" id="edit_evaluacion_riesgo_{{$item->id_analisis_valoracion}}" rows="2" readonly> {{-- Condición de la funcion handleChange --}} </textarea>
                                
                            </div>
                            <div class="col-3">
                                <h5 class="">MANEJO DEL RIESGO</h5>
                                <textarea class="form-control" name="edit_manejo_riesgo_{{$item->id_analisis_valoracion}}" id="edit_manejo_riesgo_{{$item->id_analisis_valoracion}}" rows="2" readonly> {{-- Condición de la funcion handleChange --}} </textarea>              
                            </div>
                        </div>
                        <div class="row g-2 mb-3"  data-id="{{$item->id_analisis_valoracion}}" data-tipo-evento="2">
                            <div class="col-12">
                                <h5>CONTROLES EXISTENTES</h5>
                                <textarea class="form-control" name="edit_controles_existentes_{{$item->id_analisis_valoracion}}" id="edit_controles_existentes_{{$item->id_analisis_valoracion}}" rows="3">Escribe controles existentes</textarea>
                            </div>
                        </div>
                        <div class="row g-1 mb-3"  data-id="{{$item->id_analisis_valoracion}}" data-evento="2">
                            <div class="col-4">
                                <h5>TIPOS DE CONTROL</h5>
                                <select class="form-select" name="edit_tipos_control_{{$item->id_analisis_valoracion}}" id="edit_tipos_control_{{$item->id_analisis_valoracion}}">
                                    <option selected disabled>-Calificar-</option>
                                    <option value="control preventivo">Control preventivo</option>
                                    <option value="control detectivo">Control detectivo</option>
                                    <option value="control correctivo">Control correctivo</option>
                                </select>                    
                            </div>
                            <div class="col-4">
                                <h5>PROBABILIDAD DEFINITIVO</h5>
                                <textarea class="text-center form-control" type="text" name="edit_nueva_calf_probabilidad_{{$item->id_analisis_valoracion}}" id="edit_nueva_calf_probabilidad_{{$item->id_analisis_valoracion}}" readonly rows="1"></textarea>                   
                            </div>
                            <div class="col-4">
                                <h5>IMPACTO DEFINITIVO</h5>
                                <textarea class="text-center form-control" type="text" name="edit_nueva_calf_impacto_{{$item->id_analisis_valoracion}}" id="edit_nueva_calf_impacto_{{$item->id_analisis_valoracion}}" readonly rows="1"></textarea>
                            </div>
                        </div>
                        <div class="row g-2 mb-3"  data-id="{{$item->id_analisis_valoracion}}" data-evento="2">
                            <div class="col-4">
                                <h5>NUEVO RIESGO INHERENTE</h5>
                                <textarea class="form-control" name="edit_nueva_evaluacion_riesgo_{{$item->id_analisis_valoracion}}" id="edit_nueva_evaluacion_riesgo_{{$item->id_analisis_valoracion}}" rows="2" readonly> {{-- Condición de la nueva evaluacion --}} </textarea>
                            </div>
                            <div class="col-4">
                                <h5>NUEVO MANEJO DEL RIESGO</h5>
                                <textarea class="form-control" name="edit_nuevo_manejo_riesgo_{{$item->id_analisis_valoracion}}" id="edit_nuevo_manejo_riesgo_{{$item->id_analisis_valoracion}}" rows="2" readonly> {{-- Condición del nuevo manejo --}} </textarea>
                            </div>
                            <div class="col-4">
                                <h5>OPCIONES DE MANEJO</h5>
                                <select class="form-select" name="edit_opciones_manejo_{{$item->id_analisis_valoracion}}" id="edit_opciones_manejo_{{$item->id_analisis_valoracion}}">
                                    <option selected disabled>-Calificar-</option>
                                    <option value="asumir">Asumir</option>
                                    <option value="reducir">Reducir</option>
                                    <option value="mitigar">Mitigar</option>
                                    <option value="evitar">Evitar</option>
                                    <option value="transferir">Transferir</option>
                                </select>                    
                            </div>
                        </div>
                    </div>
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endforeach

  <!--Modal Ayuda Probabilidad-->
  <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h3 class="modal-title">
              CRITERIOS PARA DEFINIR EL NIVEL DE PROBABILIDAD
            </h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body text-center">
            <table class="table table-sm table-bordered table-hover text-center align-middle">
              <thead class="bg-primary text-nowrap">
                <tr>
                  <th>NIVEL</th>
                  <th>FRECUENCIA DE LA ACTIVIDAD</th>
                  <th>CALIFICACIÓN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="v_claro fw-bold">Muy baja</td>
                  <td>
                    La actividad que conlleva el riesgo se ejecuta como máximo 2
                    veces por año
                  </td>
                  <td>1</td>
                </tr>
                <tr>
                  <td class="v_oscuro fw-bold">Baja</td>
                  <td>
                    La actividad que conlleva el riesgo se ejecuta de 3 a 24 veces
                    por año
                  </td>
                  <td>2</td>
                </tr>
                <tr>
                  <td class="amarillo fw-bold">Media</td>
                  <td>
                    La actividad que conlleva el riesgo se ejecuta de 24 a 500 veces
                    por año
                  </td>
                  <td>3</td>
                </tr>
                <tr>
                  <td class="a_palido fw-bold">Alta</td>
                  <td>
                    La actividad que conlleva el riesgo se ejecuta mínimo 500 veces
                    al año y máximo 5000 veces por año
                  </td>
                  <td>4</td>
                </tr>
                <tr>
                  <td class="rojo fw-bold">Muy alta</td>
                  <td>
                    La actividad que conlleva el riesgo se ejecuta más de 5000 veces
                    por año
                  </td>
                  <td>5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  
  <!--Modal Ayuda Impacto-->
  <div class="modal fade" id="myModal_2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">CRITERIOS PARA DEFINIR EL NIVEL DE IMPACTO</h3>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
          ></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body text-center">
          <table class="table table-sm table-bordered table-hover text-center align-middle">
            <thead class="bg-primary text-nowrap">
              <tr>
                <th>NIVEL</th>
                <th>AFECTACIÓN ECONÓMICA</th>
                <th>REPUTACIONAL</th>
                <th>CALIFICACIÓN</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="v_claro fw-bold">Leve</td>
                <td>Menor a 10 SMLMV</td>
                <td>
                  El riesgo afecta la imagen de algún área de la organización
                </td>
                <td>1</td>
              </tr>
              <tr>
                <td class="v_oscuro fw-bold">Menor</td>
                <td>Entre 10 y 50 SMLMV</td>
                <td>
                  El riesgo afecta la imagen de la entidad internamente, de
                  conocimiento general nivel interno, de junta directiva y
                  accionistas y de proveedores
                </td>
                <td>2</td>
              </tr>
              <tr>
                <td class="amarillo fw-bold">Moderado</td>
                <td>Entre 50 y 100 SMLMV</td>
                <td>
                  El riesgo afecta la imagen de la entidad con algunos usuarios de
                  relevancia frente al logro de los objetivos
                </td>
                <td>3</td>
              </tr>
              <tr>
                <td class="a_palido fw-bold">Mayor</td>
                <td>Entre 100 y 500 SMLMV</td>
                <td>
                  El riesgo afecta la imagen de la entidad con efecto publicitario
                  sostenido a nivel de sector administrativo, nivel departamental
                  o municipal
                </td>
                <td>4</td>
              </tr>
              <tr>
                <td class="rojo fw-bold">Catastrófico</td>
                <td>Mayor a 500 SMLMV</td>
                <td>
                  El riesgo afecta la imagen de la entidad a nivel nacional, con
                  el efecto publicitario sostenido a nivel pais
                </td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!--Modal Matrix de Calor-->
  <div class="modal fade" id="myModal_3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">EVALUACIÓN DE RIESGOS</h3>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
          ></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body text-center">
          <div class="row">
            <div class="col-10">
              <table class="table table-sm table-borderless text-center align-middle p-0 m-0">
                <thead>
                </thead>
                <tbody>
                  <tr class="border border-secondary">
                    <th rowspan="5" class="abajo border border-secondary">PROBABILIDAD</th>
                    <td class="border border-secondary p-0 m-0"><small><i>Muy alta (5)</i></small></td>
                    <td class="naranja border border-secondary p-0 m-0">5</td>
                    <td class="naranja border border-secondary p-0 m-0">10</td>
                    <td class="rojo border border-secondary p-0 m-0">15</td>
                    <td class="rojo border border-secondary p-0 m-0">20</td>
                    <td class="rojo border border-secondary p-0 m-0">25</td>
                  </tr>
                  <tr>
                    <td class="border border-secondary p-0 m-0"><small><i>Alta (4)</i></small></td>
                    <td class="amarillo border border-secondary p-0 m-0">4</td>
                    <td class="naranja border border-secondary p-0 m-0">8</td>
                    <td class="naranja border border-secondary p-0 m-0">12</td>
                    <td class="rojo border border-secondary p-0 m-0">16</td>
                    <td class="rojo border border-secondary p-0 m-0">20</td>
                  </tr>
                  <tr>
                    <td class="border border-secondary p-0 m-0"><small><i>Medio (3)</i></small></td>
                    <td class="v_claro border border-secondary p-0 m-0">3</td>
                    <td class="amarillo border border-secondary p-0 m-0">6</td>
                    <td class="naranja border border-secondary p-0 m-0">9</td>
                    <td class="naranja border border-secondary p-0 m-0">12</td>
                    <td class="rojo border border-secondary p-0 m-0">15</td>                    
                  </tr>
                  <tr>
                    <td class="border border-secondary p-0 m-0"><small><i>Baja (2)</i></small></td>
                    <td class="v_claro border border-secondary p-0 m-0">2</td>
                    <td class="amarillo border border-secondary p-0 m-0">4</td>
                    <td class="amarillo border border-secondary p-0 m-0">6</td>
                    <td class="naranja border border-secondary p-0 m-0">8</td>
                    <td class="naranja border border-secondary p-0 m-0">10</td>                    
                  </tr>
                  <tr>
                    <td class="border border-secondary p-0 m-0"><small><i>Muy baja (1)</i></small></td>
                    <td class="v_claro border border-secondary p-0 m-0">1</td>
                    <td class="v_claro border border-secondary p-0 m-0">2</td>
                    <td class="v_claro border border-secondary p-0 m-0">3</td>
                    <td class="amarillo border border-secondary p-0 m-0">4</td>
                    <td class="naranja border border-secondary p-0 m-0">5</td>
                  </tr>
                  <tr>
                    <td rowspan="2" colspan="2"></td>                    
                    <td class="border border-secondary p-0 m-0"><small><i>Leve (1)</i></small></td>
                    <td class="border border-secondary p-0 m-0"><small><i>Menor (2)</i></small></td>
                    <td class="border border-secondary p-0 m-0"><small><i>Moderado (3)</i></small></td>
                    <td class="border border-secondary p-0 m-0"><small><i>Mayor (4)</i></small></td>
                    <td class="border border-secondary p-0 m-0"><small><i>Catastrofico (5)</i></small></td>                    
                  </tr>
                  <tr>              
                    <td colspan="5" class="fw-bold border border-secondary">IMPACTO</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-2">
              <table class="table table-sm table-bordered table-hover text-center align-middle">
                <thead>
                  <tr>
                    <th>EVALUACIÓN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="rojo fw-bold">Extremo</td>
                  </tr>
                  <tr>
                    <td class="naranja fw-bold">Alto</td>
                  </tr>
                  <tr>
                    <td class="amarillo fw-bold">Moderado</td>
                  </tr>
                  <tr>
                    <td class="v_claro fw-bold">Bajo</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script src="js/analisis-valoracion-riesgo.js"></script>
@endsection