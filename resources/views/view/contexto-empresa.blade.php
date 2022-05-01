@extends('layout.index')

@section('title', 'Contexto Empresa')

@section('content')
<!-- Empresa-->
<section class="resume-section mb-5 p-0" id="contextoEmpresa">
    <div class="resume-section-content">
        <h2 class="m-3">Información Empresa</h2>
        <div class="container">

            @if ($user->email == 'admin@mail.com' && $count >= 0 || $user->email != 'admin@mail.com' && $count <= 0 )
                <form action="{{route('agregar-contexto-empresa')}}" method="post">
                    <!-- card tipo empresa -->
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Tipo de empresa</div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-end justify-content-between mb-3">
                            
                                <div class="col-lg-3 col-sm-12">
                                    <label class="form-label m-0" for="origenCapital">Origen capital</label>
                                    <select class="form-select" id="origenCapital" name="origenCapital" aria-label="Origen capital">
                                        <option> --Seleccionar-- </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <label class="form-label m-0" for="dimension">Tamaño</label>
                                    <select class="form-select" id="dimension" name="dimension" aria-label="dimension">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <label class="form-label m-0" for="objetoSocial">Objeto social</label>
                                    <select class="form-select" id="objetoSocial" name="objetoSocial" aria-label="Objeto social">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex align-items-end justify-content-center">
                                <div class="col-lg-3 col-12">
                                    <label class="form-label m-0" for="sectorEconomico">Sector económico</label>
                                    <select class="form-select" id="sectorEconomico" name="sectorEconomico" aria-label="Sector economico">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <label class="form-label m-0" for="opcionesSectorEco">Opción sector económico</label>
                                    <select disabled class="form-select" id="opcionesSectorEco" name="opcionesSectorEco" aria-label="Opcion sector economico">
                                        <option selected value="Sin opciones">--Sin opciones--</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <label class="form-label m-0" for="propietarios">Persona</label>
                                    <select class="form-select" id="propietarios" name="tipoPersona" aria-label="Propietarios">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <label class="form-label m-0" for="tipoPersona" id="opcionTipoPersona">Tipo de propietario</label>
                                    <select disabled class="form-select" id="tipoPersona" name="propietarios" aria-label="Tipo persona">
                                        <option selected value="Sin opciones">--Sin opciones--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card tipo producto -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Tipo de producto</div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-end">
                                <div class="col-lg-3 col-sm-12">
                                    <label class="form-label m-0" for="tangibles">Tangibles</label>
                                    <select class="form-select" id="tangibles" name="tangibles" aria-label="Tangibles">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <label class="form-label m-0" for="bienes" id="opcionBienes">Bienes</label>
                                    <select disabled class="form-select" id="bienes" name="bienes" aria-label="Bienes">
                                        <option selected value="Sin opciones">--Sin opciones--</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <label class="form-label m-0" for="intangibles">Intangibles</label>
                                    <select class="form-select" id="intangibles" name="intangibles" aria-label="Intangibles">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card ficha tecnica -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Ficha técnica</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12 d-flex flex-column" id="colA">
                                    <!-- condicion colA -->
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="colB">
                                    <!-- condicion colB -->
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="colC">
                                    <!-- condicion ColC-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card norma tecnica y img empresarial -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Imagen y norma técnica</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12" >
                                    <div class="row">
                                        <label class="form-label m-0">Imagen empresarial</label>
                                    </div>
                                    <div class="d-flex flex-row" id="imgEmp">
                                        <!-- condicion imagen empresarial -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12" id="normaTecnica">
                                    <label class="form-label m-0" for="normaTec">Norma técnica</label>
                                    <select class="form-select" id="normaTec" name="normatecnica" aria-label="Norma tecnica">
                                        <option selected> --Seleccionar-- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card ventas -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Ventas</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12 d-flex flex-column" id="colAv">
                                    <!-- condicion colAv -->
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="colBv">
                                    <!-- condicion colBv -->
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column" id="colCv">
                                    <!-- condicion ColCv-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card gestión clientes-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="subheading">Gestión clientes</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12 d-flex flex-row" id="gestCliente">
                                    <!-- condicion gestion cliente -->
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
                
                <!--Tabla con los datos que se llenaron en el formulario -->
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover text-center align-middle">
                        <thead class="bg-primary text-nowrap">
                            <tr>
                                <th class="px-2">ORIGEN CAPITAL</th>
                                <th class="px-2">DIMENSIÓN</th>
                                <th class="px-2">OBJETO SOCIAL</th>
                                <th class="px-2">SECTOR ECONÓMICO</th>
                                <th class="px-2">OPCIÓN SECTOR ECONÓMICO</th>
                                <th class="px-2">TIPO PERSONA</th>
                                <th class="px-2">TIPO DE PROPIETARIO</th>
                                <th class="px-3">PRODUCTOS TANGIBLES</th>
                                <th class="px-5">BIENES TANGIBLES</th>
                                <th class="px-2">PRODUCTOS INTANGIBLES</th>
                                <th class="px-2">FICHA TEC.(Idenfiticación)</th>
                                <th class="px-2">FICHA TEC.(Duración)</th>
                                <th class="px-2">FICHA TEC.(Ctrc. Microbiológicas)</th>
                                <th class="px-2">FICHA TEC.(Restricciones)</th>
                                <th class="px-2">FICHA TEC.(Empaque)</th>
                                <th class="px-2">IMAGEN.(Logotipo)</th>
                                <th class="px-2">IMAGEN.(Marca)</th>
                                <th class="px-2">IMAGEN.(Eslogan)</th>
                                <th class="px-2">NORMA TÉCNICA</th>
                                <th class="px-4">ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                          @if( !isset($contexto_empresa))@else
                            @foreach ($contexto_empresa as $item)
                              <tr>
                                <td>{{$item->origen_capital}}</td>
                                <td>{{$item->dimension}}</td>
                                <td>{{$item->objeto_social}}</td>
                                <td>{{$item->sector_economico}}</td>
                                <td>{{$item->opcion_sector_eco}}</td>
                                <td>{{$item->propietario}}</td>
                                <td>{{$item->tipo_persona}}</td>
                                <td>{{$item->tangible}}</td>
                                <td>{{$item->bienes}}</td>
                                <td>{{$item->intangible}}</td>
                                <td>
                                    @if($item->identificacion === 'si')
                                        <i class="fas fa-check"></i>
                                    @else
                                        <i class="fas fa-times"></i>
                                    @endif
                                </td>
                                <td>
                                    @if($item->duracion === 'si')
                                        <i class="fas fa-check"></i>
                                    @else
                                        <i class="fas fa-times"></i>
                                    @endif
                                </td>
                                <td>{{$item->ctrc_microbiologicas}}</td>
                                <td>{{$item->restricciones}}</td>
                                <td>{{$item->empaque}}</td>
                                <td>{{$item->logotipo}}</td>
                                <td>{{$item->marca}}</td>
                                <td>{{$item->eslogan}}</td>
                                <td>{{$item->norma_tecnica}}</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-4 me-1 p-0">
                                            <button type="button" class="btn btn-primary" onclick="llenandoModal({{$item}})" data-bs-toggle="modal" data-bs-target="#modalEditarContexto{{$item->id_contexto_empresa}}"><i class="far fa-edit"></i></button>
                                        </div>
                                        <div class="col-4 ms-1 p-0">
                                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEliminarContexto{{$item->id_contexto_empresa}}"><i class="far fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                            @endforeach
                          @endif
                        </tbody>
                    </table>
                </div>
            @else
                @if($user->email != 'admin@mail.com' && $count > 0)
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-hover text-center align-middle">
                            <thead class="bg-primary text-nowrap">
                                <tr>
                                    <th class="px-2">ORIGEN CAPITAL</th>
                                    <th class="px-2">DIMENSIÓN</th>
                                    <th class="px-2">OBJETO SOCIAL</th>
                                    <th class="px-2">SECTOR ECONÓMICO</th>
                                    <th class="px-2">OPCIÓN SECTOR ECONÓMICO</th>
                                    <th class="px-2">TIPO PERSONA</th>
                                    <th class="px-2">TIPO DE PROPIETARIO</th>
                                    <th class="px-3">PRODUCTOS TANGIBLES</th>
                                    <th class="px-5">BIENES TANGIBLES</th>
                                    <th class="px-2">PRODUCTOS INTANGIBLES</th>
                                    <th class="px-2">FICHA TEC.(Idenfiticación)</th>
                                    <th class="px-2">FICHA TEC.(Duración)</th>
                                    <th class="px-2">FICHA TEC.(Ctrc. Microbiológicas)</th>
                                    <th class="px-2">FICHA TEC.(Restricciones)</th>
                                    <th class="px-2">FICHA TEC.(Empaque)</th>
                                    <th class="px-2">IMAGEN.(Logotipo)</th>
                                    <th class="px-2">IMAGEN.(Marca)</th>
                                    <th class="px-2">IMAGEN.(Eslogan)</th>
                                    <th class="px-2">NORMA TÉCNICA</th>
                                    <th class="px-4">ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody class="table-light">
                            @if( !isset($contexto_empresa))@else
                                @foreach ($contexto_empresa as $item)
                                <tr>
                                    <td>{{$item->origen_capital}}</td>
                                    <td>{{$item->dimension}}</td>
                                    <td>{{$item->objeto_social}}</td>
                                    <td>{{$item->sector_economico}}</td>
                                    <td>{{$item->opcion_sector_eco}}</td>
                                    <td>{{$item->propietario}}</td>
                                    <td>{{$item->tipo_persona}}</td>
                                    <td>{{$item->tangible}}</td>
                                    <td>{{$item->bienes}}</td>
                                    <td>{{$item->intangible}}</td>
                                    <td>
                                        @if($item->identificacion === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->duracion === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->ctrc_microbiologicas === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->restricciones === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif                                    
                                    </td>
                                    <td>
                                        @if($item->empaque === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif 
                                    </td>
                                    <td>
                                        @if($item->logotipo === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif 
                                    </td>
                                    <td>
                                        @if($item->marca === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->eslogan === 'si')
                                            <i class="fas fa-check"></i>
                                        @else
                                            <i class="fas fa-times"></i>
                                        @endif 
                                    </td>
                                    <td>{{$item->norma_tecnica}}</td>
                                    <td>
                                        <div class="row justify-content-center">
                                            <div class="col-4 me-1 p-0">
                                                <button type="button" class="btn btn-primary" onclick="llenandoModal({{$item}})" data-bs-toggle="modal" data-bs-target="#modalEditarContexto{{$item->id_contexto_empresa}}"><i class="far fa-edit"></i></button>
                                            </div>
                                            <div class="col-4 ms-1 p-0">
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEliminarContexto{{$item->id_contexto_empresa}}"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                @endif
            @endif
                    
        </div>
    </div>
</section>

{{-- Modal editar contexto empresa --}}
@if( !isset($contexto_empresa))@else
    @foreach ($contexto_empresa as $item)
        <div class="modal fade" id="modalEditarContexto{{$item->id_contexto_empresa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title">
                    Editar contexto de la empresa
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('editar-contexto-empresa', $item->id_contexto_empresa)}}" method="POST">
                    <div class="modal-body g-2">
                        @csrf
                        <input type="hidden" name="id_identificacion_riesgo" value="{{$item->id_contexto_empresa}}">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Tipo de empresa</div>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex align-items-end justify-content-between mb-3">
                                
                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label m-0" for="origenCapital{{$item->id_contexto_empresa}}" id="labelOrigenCapital{{$item->id_contexto_empresa}}">Origen capital</label>
                                        <select class="form-select" id="origenCapital{{$item->id_contexto_empresa}}" name="origenCapital_{{$item->id_contexto_empresa}}" aria-label="Origen capital">
                                            <option value="{{old($item->origen_capital)}}"> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label m-0" for="dimension{{$item->id_contexto_empresa}}">Tamaño</label>
                                        <select class="form-select" id="dimension{{$item->id_contexto_empresa}}" name="dimension" aria-label="dimension">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <label class="form-label m-0" for="objetoSocial{{$item->id_contexto_empresa}}">Objeto social</label>
                                        <select class="form-select" id="objetoSocial{{$item->id_contexto_empresa}}" name="objetoSocial" aria-label="Objeto social">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-end justify-content-center">
                                    <div class="col-lg-3 col-12">
                                        <label class="form-label m-0" for="sectorEconomico{{$item->id_contexto_empresa}}">Sector económico</label>
                                        <select class="form-select" id="sectorEconomico{{$item->id_contexto_empresa}}" name="sectorEconomico" aria-label="Sector economico">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <label class="form-label m-0" for="opcionesSectorEco{{$item->id_contexto_empresa}}">Opción sector económico</label>
                                        <select  class="form-select" id="opcionesSectorEco{{$item->id_contexto_empresa}}" name="opcionesSectorEco" aria-label="Opcion sector economico">
                                            <option selected value="Sin opciones">--Sin opciones--</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <label class="form-label m-0" for="propietarios{{$item->id_contexto_empresa}}">Persona</label>
                                        <select class="form-select" id="propietarios{{$item->id_contexto_empresa}}" name="tipoPersona" aria-label="Propietarios">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <label class="form-label m-0" for="tipoPersona{{$item->id_contexto_empresa}}" id="opcionTipoPersona">Tipo de propietario</label>
                                        <select class="form-select" id="tipoPersona{{$item->id_contexto_empresa}}" name="propietarios" aria-label="Tipo persona">
                                            <option selected value="Sin opciones">--Sin opciones--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card tipo producto -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Tipo de producto</div>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex align-items-end">
                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label m-0" for="tangibles{{$item->id_contexto_empresa}}">Tangibles</label>
                                        <select class="form-select" id="tangibles{{$item->id_contexto_empresa}}" name="tangibles" aria-label="Tangibles">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-12">
                                        <label class="form-label m-0" for="bienes{{$item->id_contexto_empresa}}" id="opcionBienes">Bienes</label>
                                        <select class="form-select" id="bienes{{$item->id_contexto_empresa}}" name="bienes" aria-label="Bienes">
                                            <option selected value="Sin opciones">--Sin opciones--</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <label class="form-label m-0" for="intangibles{{$item->id_contexto_empresa}}">Intangibles</label>
                                        <select class="form-select" id="intangibles{{$item->id_contexto_empresa}}" name="intangibles" aria-label="Intangibles">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card ficha tecnica -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Ficha técnica</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colA{{$item->id_contexto_empresa}}">
                                        <!-- condicion colA -->
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colB{{$item->id_contexto_empresa}}">
                                        <!-- condicion colB -->
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colC{{$item->id_contexto_empresa}}">
                                        <!-- condicion ColC-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card norma tecnica y img empresarial -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Imagen y norma técnica</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12" >
                                        <div class="row">
                                            <label class="form-label m-0">Imagen empresarial</label>
                                        </div>
                                        <div class="d-flex flex-row" id="imgEmp{{$item->id_contexto_empresa}}">
                                            <!-- condicion imagen empresarial -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12" id="normaTecnica{{$item->id_contexto_empresa}}">
                                        <label class="form-label m-0" for="normaTec{{$item->id_contexto_empresa}}">Norma técnica</label>
                                        <select class="form-select" id="normaTec{{$item->id_contexto_empresa}}" name="normatecnica" aria-label="Norma tecnica">
                                            <option selected> --Seleccionar-- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card ventas -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Ventas</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colAv{{$item->id_contexto_empresa}}">
                                        <!-- condicion colAv -->
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colBv{{$item->id_contexto_empresa}}">
                                        <!-- condicion colBv -->
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column" id="colCv{{$item->id_contexto_empresa}}">
                                        <!-- condicion ColCv-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- card gestión clientes-->
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="subheading">Gestión clientes</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12 d-flex flex-row" id="gestCliente{{$item->id_contexto_empresa}}">
                                        <!-- condicion gestion cliente -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    @endforeach
@endif


<!--Modal eliminar contexto-->
@if( !isset($contexto_empresa))@else
    @foreach ($contexto_empresa as $item)
        <div class="modal fade" id="modalEliminarContexto{{$item->id_contexto_empresa}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <span class="text-center fs-2 text-primary"><i class="fas fa-exclamation-triangle"></i></span>
                        </div>
                        <div class="row">
                            <h3 class="modal-title d-flex justify-content-center">
                                ¿ Esta seguro de eliminar la Información ?
                            </h3>
                        </div>
                        <div class="row d-flex justify-content-center py-3">
                            <div class="col-sm-3 col-4 d-flex justify-content-center">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                            <div class="col-sm-3 col-4 d-flex justify-content-center">
                                <form action="{{route('eliminar-contexto-empresa', $item->id_contexto_empresa)}}" method="post">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-success">Confirmar</button>
                                </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

@endsection

@section('script')
    <script src="js/contexto-empresa.js"></script>
    <script src="js/editar-contexto-modal.js"></script>
@endsection
