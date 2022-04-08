@extends('layout.index')

@section('title', 'Análisis de riesgo')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
  <div class="resume-section-content">
    <h2 class="m-3">Análisis de Riesgos</h2>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover" >
          <thead class="bg-primary text-center align-middle text-nowrap">
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
            </tr>
          </thead>
          <tbody class="table-light text-center" onchange="handleChange(event)">
            @foreach ($identificacion_riesgos as $item)
              <tr data-id="{{$item->id_riesgo}}">
                <td>{{$item->tipo}}</td>
                <td>{{$item->objetivo}}</td>
                <td>{{$item->actividad_critica}}</td>
                <td>{{$item->sistema_asociado}}</td>
                <td>{{$item->variable}}</td>
                <td>{{$item->factor_riesgo}}</td>
                <td>
                  <select class="form-select" name="calf_probablididad_{{$item->id_riesgo}}" data-idpro="{{$item->id_riesgo}}">
                    <option selected disabled>-Calificar-</option>
                    <option value="1">Muy baja</option>
                    <option value="2">Baja</option>
                    <option value="3">Media</option>
                    <option value="4">Alta</option>
                    <option value="5">Muy alta</option>
                  </select>
                </td>
                <td>
                  <select class="form-select" name="calf_impacto_{{$item->id_riesgo}}" data-idimp="{{$item->id_riesgo}}">
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
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
    <script src="js/analisis-riesgo.js"></script>
@endsection