@extends('layout.index')

@section('title', 'SGSST')

@section('content')

<section class="resume-section m-0 p-0" id="sst">
    <div class="resume-section-content">
        <h2 class="m-3">Sistema gestión de SST</h2> 
        <!-- <button onclick="prueba()">prueba</button> -->
        <div class="container">
            <form action="{{route('agregar-sgsst')}}" method="post" id="sistemaGestionSST">
                @csrf

                <!-- card Asignación de responsabilidad SG-SST -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Asignación de responsabilidad</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            <div class="col-12" id="categoriaAsignacion">
                                <h5>Persona que diseñe e implemente el SG-SST</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card Afilicacion al sistema SG-SST -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Afiliación al sistema de seguridad social integral</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            <div class="col-12 ">
                                <h5>Nivel de riesgo </h5>
                                <div class="row row-cols-5 ms-2" id="categoriaRiesgo">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card Comités y programas de capacitación -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Comités y programas de capacitación</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            <div class="col-12">
                                <div class="row row-cols-5 ms-2" id="variablesComites">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card Accidentes de trabajo y enfermedad laboral  -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Accidentes de trabajo y enfermedad laboral </div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            <h5>Registro y análisis de accidentes de trabajo y enfermedad laboral</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="AccidenteEnfermedad1">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="AccidenteEnfermedad2">
                                        <!-- condicion colB -->
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>

                <!-- card  Identificación de peligros, evaluación y valoración de riesgos-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Identificación de peligros, evaluación y valoración de riesgos</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                         
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column border-end" id="IdentificacionPeligros1">
                                        <!-- condicion colA -->
                                        <h5>Matriz de peligros y riesgos (Identificación y controles)</h5>
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="IdentificacionPeligros2">
                                        <!-- condicion colB -->
                                        <h5>Prevención y control de peligros y riesgos </h5>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
                <!-- card Respuesta ante emergencias -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Respuesta ante emergencias</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                           
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex flex-column">
                                        <!-- condicion colA -->
                                        <div class="row row-cols-3 ms-2" id="RespuestasEmergencia">

                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <!-- card Descripción sociodemográfica y diagnóstico de las condiciones de salud de los trabajadores-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Descripción sociodemográfica y diagnóstico de las condiciones de salud de los trabajadores</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                         
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex flex-column">
                                        <!-- condicion colA -->
                                        <h5>Medicina del trabajo, prevención y promoción de la salud </h5>
                                        <div class="row row-cols-4 ms-2" id="DescripcionDiagnostico">

                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <!-- card Sistema de gestión de SST-->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Sistema de gestión de SST</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                          
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex flex-column">
                                        <!-- condicion colA -->
                                        <div class="row row-cols-3 ms-2" id="DespliegueSST">

                                        </div>
                                        <h5 class="mt-3">Definición de indicadores del SG-SST</h5>
                                        <div class="row row-cols-3 ms-2" id="CategoriaSST">

                                        </div>
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
    <script src="js/sst.js"></script>
@endsection