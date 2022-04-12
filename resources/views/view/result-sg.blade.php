@extends('layout.index')

@section('title', 'Sistema general')

@section('content')
<section class="resume-section m-0 p-0" id="sistemaGeneral">
    <div class="resume-section-content">
        <h2 class="m-3">Sistema General</h2>
        
        
        
        <div class="card mb-3">
            <div class="card-header">
                <div class="subheading m2">Gestion por Procesos</div>
            </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-lg-4 col-sm-12" id="mapaProcesos">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <h5 class="cols">Mapa de Procesos</h5>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Estrategicos</td>
                                    <td><i class="fas fa-check"></i></td>
                                  </tr>
                                  <tr>
                                    <td>Misionales</td>
                                    <td><i class="fas fa-times"></i></td>
                                  </tr>
                                  <tr>
                                    <td>Misionales</td>
                                    <td>Si</td>
                                  </tr>
                                  <tr>
                                    <td>Misionales</td>
                                    <td>No</td>
                                  </tr>
                                </tbody>
                              </table>
                            
                            
                            
                        </div>
                        <div class="col-lg-8 col-sm-12 border-start border-end px-3 " id="">
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
            
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        
</section>
@endsection

@section('script')
@endsection