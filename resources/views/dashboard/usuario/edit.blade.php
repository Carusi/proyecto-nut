@extends('layouts/layoutsAdmin/layoutA')
@section('contenido')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Editar Perfil</p>
             
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Informacion personal</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nombre</label>
                  <input class="form-control" type="text" value="lucky.jesse">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Apellido</label>
                  <input class="form-control" type="email" value="jesse@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Fecha de nacimiento</label>
                  <input class="form-control" type="date" value="Jesse">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Genero</label>
                   <select class="form-control form-select  ">
                     <option selected>Seleccione</option>
                     <option value="2">Maculino</option>
                     <option value="2">Femenino</option>
                   </select>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Numero documento</label>
                  <input class="form-control" type="text" value="Jesse">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Tipo de documento</label>
                   <select class="form-control form-select  ">
                    <option selected>Seleccione</option>
                    <option value="2">Cedula de ciudadania</option>
                    <option value="2">Cedula de extranjeria</option>
                    <option value="1">Tarjeta de indetiad</option>
                    <option value="2">Registro civil</option>
                   </select>
                  </div>
              </div>

            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informacion de contacto</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Dirección</label>
                  <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">EPS</label>
                  <input class="form-control" type="text" value="New York">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Telefono</label>
                  <input class="form-control" type="text" value="United States">
                </div>
              </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informacion de cuenta</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Correo</label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Contraseña</label>
                  <input class="form-control" type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--
      <div class="col-md-4">
        <div class="card card-profile">
          <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
          <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
              <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="javascript:;">
                  <img src="../assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                </a>
              </div>
            </div>
          </div>
          <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
              <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
              <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
              <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
              <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                <div class="d-flex justify-content-center">
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">22</span>
                    <span class="text-sm opacity-8">Friends</span>
                  </div>
                  <div class="d-grid text-center mx-4">
                    <span class="text-lg font-weight-bolder">10</span>
                    <span class="text-sm opacity-8">Photos</span>
                  </div>
                  <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">89</span>
                    <span class="text-sm opacity-8">Comments</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
              <h5>
                Mark Davis<span class="font-weight-light">, 35</span>
              </h5>
              <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Bucharest, Romania
              </div>
              <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
              </div>
              <div>
                <i class="ni education_hat mr-2"></i>University of Computer Science
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>-->

@stop