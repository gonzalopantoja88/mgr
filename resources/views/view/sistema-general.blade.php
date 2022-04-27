@extends('layout.index')

@section('title', 'Sistema general')

@section('content')
<section class="resume-section m-0 p-0" id="sistemaGeneral">
    <div class="resume-section-content">
        <h2 class="m-3">Sistema General</h2>
        <!-- <button onclick="prueba()">prueba</button> -->
        <div class="container">
            <form action="{{route('agregar-sistema-general')}}" method="post" id="sistemaGeneral">
                @csrf
                <!-- card gestion por procesos -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Gestion por Procesos</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            <div class="col-lg-4 col-sm-12" id="mapaProcesos">
                                <h5 class="text-center">Mapa de Procesos</h5>
                                <!-- mapa de procesos llamado en js -->
                            </div>
                            <div class="col-lg-8 col-sm-12 border-start" id="">
                                <h5 class="text-center mb-2">Caracterizaciones</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="caracterizacionesCol1">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="caracterizacionesCol2">
                                        <!-- condicion colB -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card planeacion estrategica -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Planeacion Estrategica (PE)</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="desplieguePlaneacionECol1">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="desplieguePlaneacionECol2">
                                        <!-- condicion colB -->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card partes interesadas -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Partes Interesadas (PI)</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="desplieguePartesInteresadasCol1">
                                        <!-- condicion colA -->

                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="desplieguePartesInteresadasCol2">
                                        <!-- condicion colB -->

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card Alcance -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Alcance</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="depliegueAlcance1">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="depliegueAlcance2">
                                        <!-- condicion colB -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card Liderazgo -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Liderazgo</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="categoriaLiderazgo1">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="categoriaLiderazgo2">
                                        <!-- condicion colB -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card riesgos y oportunidades -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Abordar riesgos y oportunidades</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="DespliegueRiesgos">
                                        <!-- condicion colA -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card objetivos-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Objetivos</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="DespliegueObjetivos">
                                        <!-- condicion colA -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card planificacion de cambios-->
                <!-- <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Planificación de los cambios</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="DespliegueObjetivos">
                                       
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> -->

                <!-- card  recursos-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Recursos</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="RecursosCol1">
                                        <!-- condicion colA -->
                                        <h5 class="text-center">Personas</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="RecursosCol2">
                                        <!-- condicion colB -->
                                        <h5 class="text-center">Infraestructura</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="RecursosCol3">
                                        <!-- condicion colC -->
                                        <h5 class="text-center">Recursos de seguimiento y medicion</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column" id="RecursosCol4">
                                        <!-- condicion colD -->
                                        <h5 class="text-center">Informacion documentada</h5>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="">Otros</h5>
                                        <div class="d-flex" id="Recursos">
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card  evaluacion de desempeño-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Evaluación del desempeño</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="">
                                        <div class="row" id="Evaluacion">

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="EvaluacionCol1">
                                        <!-- condicion colA -->
                                        <h5 class="text-center">Seguimiento, medición, análisis y evaluación</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="EvaluacionCol2">
                                        <!-- condicion colB -->
                                        <h5 class="text-center">Análisis y evaluación</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column border-end" id="EvaluacionCol3">
                                        <!-- condicion colC -->
                                        <h5 class="text-center">Auditoría Interna</h5>
                                    </div>
                                    <div class="col-md-3 col-12 d-flex flex-column" id="EvaluacionCol4">
                                        <!-- condicion colD -->
                                        <h5 class="text-center">Revisión por la dirección</h5>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- card mejora -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Mejora</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex" id="DespliegueMejora">
                                        <!-- condicion colA -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center my-3">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="js/sistema-general.js"></script>
@endsection