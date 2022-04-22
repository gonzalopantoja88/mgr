@extends('layout.index')

@section('title', 'Análisis de riesgo')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
    <div class="resume-section-content">
        <h2 class="m-3">Análisis de Riesgos</h2>
        <div class="container">
            <div class="subheading"><strong>Riesgos pendientes de calificar</strong></div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover text-center align-middle">
                    <thead class="bg-primary text-nowrap">
                        <tr>
                            <th colspan="6" class="bg-primary1">ANÁLISIS DE RIESGO</th>
                            <th colspan="11" class="bg-primary2">VALORACION DEL RIESGO RESIDUAL</th>
                            <th rowspan="2" class="align-middle">ACCION</th>
                        </tr>
                        <tr>
                            <th class="px-2">PROCESO</th>
                            <th class="px-2">OBJETIVO</th>
                            <th class="px-2">ACTIVIDAD CRÍTICA</th>
                            <th class="px-2">SISTEMA DE GESTIÓN</th>
                            <th class="px-2"> VARIABLE </th>
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
                    <tbody class="table-light" onchange="handleChange(event)">
                        @foreach ($identificacion_riesgos as $item)
                        @if (!$item->calificado)
                        <form action="{{route('agregar-analisis-riesgo')}}" method="post">
                            @csrf
                            {{-- analisis riego --}}
                            <input type="hidden" name="id_riesgo" value="{{$item->id_riesgo}}">
                            <tr data-id="{{$item->id_riesgo}}">
                                <td>{{$item->tipo}}</td>
                                <td>{{$item->objetivo}}</td>
                                <td>{{$item->actividad_critica}}</td>
                                <td>{{$item->sistema_asociado}}</td>
                                <td class="">{{$item->variable}}</td>
                                <td>{{$item->factor_riesgo}}</td>
                                <td>
                                    <select class="form-select" name="calf_probablididad_{{$item->id_riesgo}}">
                                        <option selected disabled>-Calificar-</option>
                                        <option value="1">Muy baja</option>
                                        <option value="2">Baja</option>
                                        <option value="3">Media</option>
                                        <option value="4">Alta</option>
                                        <option value="5">Muy alta</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" name="calf_impacto_{{$item->id_riesgo}}">
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

                                        {{-- valoracion riesgo --}}

                                <td>
                                    <textarea class="form-control" name="controles_existentes_{{$item->id_riesgo}}" id="controles_existentes_{{$item->id_riesgo}}" rows="2">Escribe controles existentes</textarea>
                                </td>
                                <td>
                                    <select class="form-select" name="tipos_control_{{$item->id_riesgo}}">
                                        <option selected disabled>-Calificar-</option>
                                        <option value="control preventivo">Control preventivo</option>
                                        <option value="control detectivo">Control detectivo</option>
                                        <option value="control correctivo">Control correctivo</option>
                                    </select>
                                </td>

                                <td>
                                    <textarea class="text-center form-control" type="text"
                                        name="nueva_calf_probabilidad_{{$item->id_riesgo}}"
                                        id="nueva_calf_probabilidad_{{$item->id_riesgo}}" readonly rows="1"></textarea>
                                </td>
                                <td>
                                    <textarea class="text-center form-control" type="text"
                                        name="nueva_calf_impacto_{{$item->id_riesgo}}"
                                        id="nueva_calf_impacto_{{$item->id_riesgo}}" readonly rows="1"></textarea>
                                </td>
                                <td>
                                    <textarea class="form-control" name="nueva_evaluacion_riesgo_{{$item->id_riesgo}}" id="nueva_evaluacion_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición de la nueva evaluacion --}} </textarea>
                                </td>
                                <td>
                                    <textarea class="form-control" name="nuevo_manejo_riesgo_{{$item->id_riesgo}}" id="nuevo_manejo_riesgo_{{$item->id_riesgo}}" rows="2" readonly> {{-- Condición del nuevo manejo --}}
                                </textarea>
                                </td>
                                <td>
                                    <select class="form-select" name="opciones_manejo_{{$item->id_riesgo}}">
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

            <div class="subheading mt-4"><strong>Riesgos calificados</strong></div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover text-center align-middle">
                    <thead class="bg-primary text-nowrap">
                        <tr>
                            <th colspan="6" class="bg-primary1">ANÁLISIS DE RIESGO</th>
                            <th colspan="11" class="bg-primary2">VALORACION DEL RIESGO RESIDUAL</th>
                            <th rowspan="2" class="align-middle px-4">ACCION</th>
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
                            <td>{{$item->tipos_control}}</td>
                            <td>{{$item->probabilidad_definitivo}}</td>
                            <td>{{$item->impacto_definitivo}}</td>
                            <td>{{$item->nueva_evaluacion_riesgo}}</td>
                            <td>{{$item->nuevo_manejo_riesgo}}</td>
                            <td>{{$item->opciones_manejo}}</td>

                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-4 me-1 p-0">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="far fa-edit" data-bs-toggle="modal" data-bs-target="#modalEditarCalificacion"></i>
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



{{-- modal editar analisis y valoracion riesgo --}}

  <!-- Modal -->
  <div class="modal fade" id="modalEditarCalificacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="js/analisis-valoracion-riesgo.js"></script>
@endsection