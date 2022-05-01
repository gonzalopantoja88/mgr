@extends('layout.index')

@section('title', 'Plan de Acción')

@section('content')

<section class="resume-section mb-5 p-0" id="">
    <div class="resume-section-content">
        <h2 class="m-3">Plan de Acción</h2>
        <div class="container"> 
            <!-- Riesgos pendiente de calificar -->
            <div class="row">
                <div class="col-6">
                    <div class="subheading"><strong>Plan de acción pendientes</strong></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover text-center align-middle">
                    <thead class="bg-primary text-nowrap">
                        <tr>
                            <th colspan="6" class="bg-primary1">RIESGO</th>
                            <th colspan="4" class="bg-primary2">TIEMPO</th>
                            <th colspan="3" class="bg-primary2">INDICADORES</th>
                            <th rowspan="2" class="align-middle">ACCION</th>
                        </tr>
                        <tr>
                            <th class="px-2">PROCESO</th>
                            <th class="px-2">OBJETIVO</th>
                            <th class="px-2">ACTIVIDAD CRÍTICA</th>
                            <th class="px-2">SISTEMA DE GESTIÓN</th>
                            <th class="px-2">VARIABLE</th>
                            <th class="px-2">FACTOR RIESGO</th>
                            <th class="px-5">ACCIONES</th>
                            <th class="px-5">RESPONSABLES</th>
                            <th class="px-4">FECHA INICIO</th>
                            <th class="px-2">FECHA FINAL</th>
                            <th class="px-5">INDICADOR</th>
                            <th class="px-5">META</th>
                            <th class="px-5">SEGUIMIENTO</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">                        
                        @if( !isset($identificacion_riesgos))@else 
                            @foreach ($identificacion_riesgos as $item)
                                @if (!$item->calificado_plan_accion)
                                    <form action="{{route('agregar-plan-accion')}}" method="post">
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
                                                <textarea class="form-control" name="acciones_{{$item->id_riesgo}}" id="acciones_{{$item->id_riesgo}}" rows="2" placeholder="Digitar acciones..." required></textarea>
                                            </td>                                           
                                            <td>
                                                <textarea class="form-control" name="responsables_{{$item->id_riesgo}}" id="responsables_{{$item->id_riesgo}}" rows="2" placeholder="Digitar responsables..." required></textarea>
                                            </td>                                           
                                            <td>
                                                <input class="form-control" type="date" name="fecha_inicio_{{$item->id_riesgo}}" id="fecha_inicio_{{$item->id_riesgo}}">
                                            </td>
                                            <td>
                                                <input class="form-control" type="date" name="fecha_final_{{$item->id_riesgo}}" id="fecha_final_{{$item->id_riesgo}}">
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="indicador_{{$item->id_riesgo}}" id="indicador_{{$item->id_riesgo}}" rows="2" placeholder="Digitar indicadores..." required></textarea>                                                
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="meta_{{$item->id_riesgo}}" id="meta_{{$item->id_riesgo}}" rows="2" placeholder="Digitar meta..." required></textarea>
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="seguimiento_{{$item->id_riesgo}}" id="seguimiento_{{$item->id_riesgo}}" rows="2" placeholder="Digitar seguimiento..." required></textarea>
                                            </td>                                           
                                            <td>
                                                <button type="submit" class="btn btn-primary rounded-pill">Guardar</button>
                                            </td>
                                        </tr>
                                    </form>
                                @endif
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <!-- Plan de Acción calificados -->
            <div class="subheading mt-4"><strong>Plan de acción ejecutados</strong></div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered table-hover text-center align-middle">
                    <thead class="bg-primary text-nowrap">
                        <tr>
                            <th colspan="6" class="bg-primary1">RIESGO</th>
                            <th colspan="4" class="bg-primary2">TIEMPO</th>
                            <th colspan="3" class="bg-primary2">INDICADORES</th>
                            <th rowspan="2" class="px-4 align-middle">ACCION</th>                                                        
                        </tr>
                        <tr>
                            <th class="px-2">PROCESO</th>
                            <th class="px-2">OBJETIVO</th>
                            <th class="px-2">ACTIVIDAD CRÍTICA</th>
                            <th class="px-2">SISTEMA DE GESTIÓN</th>
                            <th class="px-2">VARIABLE</th>
                            <th class="px-2">FACTOR RIESGO</th>
                            <th class="px-5">ACCIONES</th>
                            <th class="px-5">RESPONSABLES</th>
                            <th class="px-4">FECHA INICIO</th>
                            <th class="px-2">FECHA FINAL</th>
                            <th class="px-5">INDICADOR</th>
                            <th class="px-5">META</th>
                            <th class="px-2">SEGUIMIENTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( !isset($plan_accion))@else 
                            @foreach ($plan_accion as $item)
                                <tr>
                                    <td>{{$item->tipo}}</td>
                                    <td>{{$item->objetivo}}</td>
                                    <td>{{$item->actividad_critica}}</td>
                                    <td>{{$item->sistema_asociado}}</td>
                                    <td>{{$item->variable}}</td>
                                    <td>{{$item->factor_riesgo}}</td>
                                    <td>{{$item->acciones}}</td>
                                    <td>{{$item->responsables}}</td>
                                    <td>{{$item->fecha_inicio}}</td>
                                    <td>{{$item->fecha_terminacion}}</td>
                                    <td>{{$item->indicador}}</td>
                                    <td>{{$item->meta}}</td>
                                    <td>{{$item->seguimiento}}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-4 me-1 p-0">
                                                <button type="button" onclick="llenandoModal({{$item}})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarCalificacion{{$item->id_analisis_valoracion}}" >
                                                    <i class="far fa-edit"></i>
                                                </button>
                                            </div>
                                            <div class="col-4 ms-1 p-0">
                                                <form action="{{route('descalificar-plan-accion', $item->id_riesgo)}}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-undo"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>


@endsection
