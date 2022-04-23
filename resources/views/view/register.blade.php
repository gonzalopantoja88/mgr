@extends('layout.index')

@section('title', 'Registrar usuario')

@section('content')
    <!-- Identificacion riesgos-->
    <section class="resume-section mb-5 p-0" id="identificacionRiesgo">
        <div class="resume-section-content">
            <h2 class="m-3">Datos usuario-empresa</h2>
            <div class="container">

                @if ($user->email == 'admin@mail.com')
                    <button class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#agregarUserEmp"><i class="fas fa-plus-circle"></i>&nbspAgregar</button>
                @endif
                
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover text-center align-middle">
                        <thead class="bg-primary text-nowrap">
                            <tr>
                                <th class="px-2">CÉDULA</th>
                                <th class="px-2">NOMBRE(S)</th>
                                <th class="px-2">APELLIDO(S)</th>
                                <th class="px-2">EMAIL</th>
                                <th class="px-2">NIT EMPRESA</th>
                                <th class="px-2">EMPRESA</th>
                                <th class="px-4">ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($users_companys as $item)
                            <tr>
                                <td>{{$item->id_fk_user}}</td>
                                <td class="text-capitalize">{{$item->first_name}}</td>
                                <td class="text-capitalize">{{$item->last_name}}</td>
                                <td class="text-lowercase">{{$item->email}}</td>
                                <td>{{$item->id}}</td>
                                <td class="text-uppercase">{{$item->company_name}}</td>
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

    <!--Modal agregar usuario y empresa-->
    <div class="modal fade" id="agregarUserEmp">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Registrar usuarios-empresa</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('post-register') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="subheading m2">Datos usuario</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row d-flex align-items-start justify-content-between">
                                    <div class="col-lg-4 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="cedula"><strong>Cédula:</strong></label>
                                        <input type="number" class="form-control" id="cedula" name="cedula">
                                        <small>Digitar cédula sin puntos o comas.</small>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="first_name"><strong>Nombre(s):</strong></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="last_name"><strong>Apellido(s):</strong></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="email"><strong>Correo electrónico:</strong></label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="password"><strong>Contraseña:</strong></label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading m2">Datos empresa</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row d-flex align-items-start justify-content-between">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="nit"><strong>NIT:</strong></label>
                                        <input type="number" class="form-control" id="nit" name="nit">
                                        <small>Digitar NIT sin puntos, comas o guiones.</small>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <label class="form-label m-0" for="company_name"><strong>Nombre
                                                empresa:</strong></label>
                                        <input type="text" class="form-control" id="company_name" name="company_name">
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
        </div>
    </div>

@endsection

@section('script')
    <script src=""></script>
@endsection
