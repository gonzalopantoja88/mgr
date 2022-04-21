@extends('layout.index')

@section('title', 'Registrar usuario')

@section('content')
<!-- Identificacion riesgos-->
<section class="resume-section mb-5 p-0" id="identificacionRiesgo">
    <div class="resume-section-content">
        <h2 class="m-3">Registrar usuario</h2>
        <div class="container">
            <form action="{{route('post-register')}}" method="post">
                @csrf
                <div class="card mb-3 w-50">
                    <div class="card-body">
                        <div class="row d-flex align-items-start justify-content-between mb-3">
                            <div class="col-12 mb-3">
                                <label class="form-label m-0" for="cedula">cedula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label m-0" for="cedula">nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label m-0" for="cedula">apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label m-0" for="cedula">email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label m-0" for="cedula">password</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>


        </div>
    </div>
</section>
@endsection

@section('script')
    <script src=""></script>
@endsection