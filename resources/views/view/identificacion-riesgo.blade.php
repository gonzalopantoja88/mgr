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
                                <a href="" class="fs-7"><i class="fas fa-info-circle"></i>Ayuda</a>
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
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="js/identificacion-riesgo.js"></script>
@endsection