@extends('layout.index')

@section('title', 'Análisis de riesgo')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
  <div class="resume-section-content">
    <h2 class="m-3">Análisis de Riesgos</h2>
    <div class="container">
      <div class="table-responsive">
        <a href="" class="fs-7" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-info-circle"></i>Ayuda Probabilidad</a>
        <div class="subheading"><strong>Riesgos pendientes de calificar</strong></div>
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
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
              <th class="px-4">ACCIÓN</th>
            </tr>
          </thead>
          <tbody class="table-light" onchange="handleChange(event)">
            @foreach ($identificacion_riesgos as $item)
              @if (!$item->calificado)
                <form action="{{route('agregar-analisis-riesgo')}}" method="post">
                  @csrf
                  <input type="hidden" name="id_riesgo" value="{{$item->id_riesgo}}">
                  <tr data-id="{{$item->id_riesgo}}">
                    <td>{{$item->tipo}}</td>
                    <td>{{$item->objetivo}}</td>
                    <td>{{$item->actividad_critica}}</td>
                    <td>{{$item->sistema_asociado}}</td>
                    <td>{{$item->variable}}</td>
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
                        <textarea class="form-control" name="evaluacion_riesgo_{{$item->id_riesgo}}" id="evaluacion_riesgo_{{$item->id_riesgo}}" rows="3">
                          {{-- Condición de la funcion handleChange --}}
                        </textarea>
                      </td>
                      <td>
                        <textarea class="form-control" name="manejo_riesgo_{{$item->id_riesgo}}" id="manejo_riesgo_{{$item->id_riesgo}}" rows="3">
                          {{-- Condición de la funcion handleChange --}}
                        </textarea>      
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
       
        <div class="subheading mt-4"><strong>Riesgos calificados</strong></div>
        <table class="table table-sm table-bordered table-hover text-center align-middle">
          <thead class="bg-primary text-nowrap">
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
              <th class="px-4">ACCIÓN</th>
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
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>NIVEL</th>
              <th>FRECUENCIA DE LA ACTIVIDAD</th>
              <th>CALIFICACIÓN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="v_claro">Muy baja</td>
              <td>
                La actividad que conlleva el riesgo se ejecuta como máximo 2
                veces por año
              </td>
              <td>1</td>
            </tr>
            <tr>
              <td class="v_oscuro">Baja</td>
              <td>
                La actividad que conlleva el riesgo se ejecuta de 3 a 24 veces
                por año
              </td>
              <td>2</td>
            </tr>
            <tr>
              <td class="amarillo">Media</td>
              <td>
                La actividad que conlleva el riesgo se ejecuta de 24 a 500 veces
                por año
              </td>
              <td>3</td>
            </tr>
            <tr>
              <td class="a_palido">Alta</td>
              <td>
                La actividad que conlleva el riesgo se ejecuta mínimo 500 veces
                al año y máximo 5000 veces por año
              </td>
              <td>4</td>
            </tr>
            <tr>
              <td class="rojo">Muy alta</td>
              <td>
                La actividad que conlleva el riesgo se ejecuta más de 5000 veces
                por año
              </td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          Cerrar
        </button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
    <script src="js/analisis-riesgo.js"></script>
@endsection