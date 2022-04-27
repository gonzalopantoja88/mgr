@extends('layout.index')

@section('title', 'SGA')

@section('content')

<section class="resume-section m-0 p-0" id="sga">
    <div class="resume-section-content">
        <h2 class="m-3">Sistema de Gestion Ambiental</h2>
        <!-- <button onclick="prueba()">prueba</button> -->
        <div class="container">
            <form action="{{route('agregar-sga')}}" method="post" id="">
                @csrf

                <!-- card planeacion estrategica -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Condiciones ambientales</div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">

                            <div class="row">
                                <div class="mb-5">
                                    <div class="row" id="Evaluacion">

                                    </div>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column border-end" id="conAmbiental1">
                                    <!-- condicion colA -->
                                    <h5 class="text-center">Climatología</h5>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column border-end" id="conAmbiental2">
                                    <!-- condicion colB -->
                                    <h5 class="text-center">Calidad del aire</h5>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="conAmbiental3">
                                    <!-- condicion colC -->
                                    <h5 class="text-center">Calidad de las aguas</h5>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">
                            <div class="row">
                                <div class="mb-5">
                                    <div class="row" id="Evaluacion">

                                    </div>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column border-end" id="conAmbiental4">
                                    <!-- condicion colA -->
                                    <h5 class="text-center">Disponibilidad de recursos</h5>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column border-end" id="conAmbiental5">
                                    <!-- condicion colB -->
                                    <h5 class="text-center">Biodiversidad</h5>
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="conAmbiental6">
                                    <!-- condicion colC -->
                                    <h5 class="text-center">Gestión del riesgo de Desastres</h5>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Desarrollo reglamentario/normativo </div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">

                            <div class="row">
                                <h5 class="text-center">Legislación ambiental y empresarial</h5>
                                <div class="row row-cols-2 mb-3 mx-1" id="desRreglamentario1">
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Contexto social y cultural</div>
                    </div>
                    <div class="card-body ">

                        <div class="row">   
                            <h5 class="text-center">Valores éticos y morales de la sociedad </h5>
                            <div class="row row-cols-2 mb-3 mx-1" id="conSocial1">
                                
                            </div>
                        </div>


                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2"> Impactos ambientales </div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">

                            <div class="row">
                                <div class="mb-5">
                                    <div class="row" id="Evaluacion">

                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-12 d-flex flex-column border-end" >
                                    <!-- condicion colA -->
                                    <h5 class="text-center">Ambiental</h5>
                                    <div id="impAmbientales1">

                                    </div>
                                </div>

                                <div class="col-md-4 col-12 d-flex flex-column border-end" >
                                    <!-- condicion colB -->
                                    <h5 class="text-center">Social</h5>
                                    <div class="row">
                                        <div class="col-12" id="servicios">
                                            <h6> Servicios sociales y equipamientos</h6>

                                        </div>
                                        <div class="col-12 mt-2" id="demia">
                                            <h6> Demografía</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12 d-flex flex-column">
                                    <!-- condicion colC -->
                                    <h5 class="text-center">Económico </h5>
                                    <div id="impAmbientales3">

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Prácticas de gestión ambiental </div>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between mb-3">

                            <div class="row">

                                <div class="row">
                                    <div class="row mb-3">

                                        <div class="col-4" id="contorgan">
                                            <h6> Contexto de la organización</h6>
                                        </div>
                                        <div class="col-4" id="planificar">
                                            <h6> Planificación</h6>
                                        </div>
                                        <div class="col-4" id="lidera">
                                            <h6> liderazgo</h6>
                                        </div>
                                    </div>
                                 
                                    <div class="row">

                                        <div class="col-3" id="apoyo">
                                            <h6> Apoyo </h6>
                                        </div>
                                        <div class="col-3" id="opera">
                                            <h6> Operación </h6>
                                        </div>
                                        <div class="col-3" id="evadese">
                                            <h6> Evaluación del desempeño </h6>
                                        </div>
                                        <div class="col-3" id="mejor">
                                            <h6> Mejora </h6>
                                        </div>
                                        
                                        <div class="mt-5">
                                            <h5 class="">Otros</h5>
                                            <div class="" id="praGestion1">
                                                
                                            </div>
                                        </div>
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
    <script src="js/sga.js"></script>
@endsection