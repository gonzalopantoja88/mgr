@extends('layout.index')

@section('title', 'SGC')

@section('content')

<section class="resume-section m-0 p-0" id="sgc">
    <div class="resume-section-content">
        <h2 class="m-3">Sistema gestión de calidad</h2>
        <div class="container">
            <form action="{{route('agregar-sgc')}}" method="post" id="SistemaGestionCalidad">
                @csrf
                <!--1. card palificacion y control -->  
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Planificación y control operacional</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">

                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="planificaYcontrol_col1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="planificaYcontrol_col2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--2. card Requisitos para los productos y servicios -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Requisitos para los productos y servicios</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            
                                <h5>Comunicación con los clientes</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="comunicacionClientes1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="comunicacionClientes2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!--3. Revisión de los requisitos para los productos/ servicios -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Revisión de los requisitos para los productos/ servicios</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="revisionRequisitos1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="revisionRequisitos2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!--4. card Diseño y desarrollo de productos/servicios -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Diseño y desarrollo de productos/servicios</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                        
                                <h5>Planificación del diseño</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="desarrolloProductos1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column border-start" id="desarrolloProductos2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!--5. card Control de los procesos productos, servicios suministrados externamente -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Control de los procesos productos, servicios suministrados externamente</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlProcesos1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlProcesos2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--6. card Producción y provisión del servicio -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Producción y provisión del servicio</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            
                            <div class="row">
                                    <h5>Control de la Producción y provisión del servicio</h5>
                                    <div class="row row-cols-2 mb-3 mx-1" id="controlProduc1">
                                        <!-- colum A -->
                                    </div>
                                </div>
                                <div class="row">
                                    <h5>Otros</h5>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlProduc2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">

                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlProduc3">
                                        <h5>Identificación y trazabilidad</h5>
                                        <!-- colum A -->

                                    </div>


                                    <div class="col-md-6 col-12 d-flex flex-column border-start" id="controlProduc4">
                                        <h5>Propiedad perteneciente a los clientes o proveedores externos</h5>
                                        <!-- colum B -->
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <!--7. card Liberación de los productos / servicios -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Liberación de los productos / servicios</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                            
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="liberacionProcesos1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="liberacionProcesos2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--8. card Control de las salidas no conformes -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="subheading m2">Control de las salidas no conformes</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-between mb-3">
                                <div class="row">
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlSalida1">
                                        <!-- colum A -->
                                    </div>
                                    <div class="col-md-6 col-12 d-flex flex-column" id="controlSalida2">
                                        <!-- colum B -->
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-3">
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
    <script src="js/sgc.js"></script>
@endsection