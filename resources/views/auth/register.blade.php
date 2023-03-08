<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/regU.css">
    <title>Registro</title>
  </head>

  <body class="bg-dark">
    
    <section>
      
        <div class="row g-0">
          
          
          <div class="col-lg-0">

          </div>
          <div class="col-lg-7">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">

              
            </div>
            <div class="px-lg-5 py-lg-3 p-4 ">
              <h1 class="text-dark fw-bold mb-4">Registrate</h1>
              <form action="/register" method="POST" class="row g-3 needs-validation">
                @csrf
                <div class="col-md-6">
                  <label for="validationCustom01" class=" text-dark fw-bold">Nombre</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="usu_nombre" id="usu_nombre" required pattern="[a-zA-Z]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class=" text-dark fw-bold">Apellidos</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="usu_apellido" id="usu_apellido"  required pattern="[a-zA-Z]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                
                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">EPS</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" aria-label="Default select example" name="usu_eps" id="eps">
                    <option selected>Seleccione</option>
                    <option value="Aliansalud"> Aliansalud</option>
                    <option value="Cafam_eps">Cafam EPS</option>
                    <option value="Nueva_eps">Nueva eps</option>
                    <option value="Capital_salud_eps">Capital Salud EPS</option>
                    <option value="Capresoca">Capresoca</option>
                    <option value="Colsubsidio">Colsubsidio</option>
                    <option value="Comfandi">Comfandi</option>
                    <option value="Compensar">Compensar</option>
                    <option value="Coomeva">Coomeva</option>
                    <option value="Coosalud">Coosalud</option>
                    <option value="Eps_sanitas">EPS Sanitas</option>
                    <option value="Eps_sura">EPS Sura</option>
                    <option value="Famisanar">Famisanar</option>
                    <option value="Medimas">Medimás</option>
                    <option value="Mutual_ser">Mutual SER</option>
                    <option value="Nueva_eps">Nueva EPS</option>
                    <option value="Salud_total">Salud Total</option>
                    <option value="Savia_salud_eps">Savia Salud EPS</option>
                    <option value="Sisben_iv">SISBEN IV</option>
                    <option value="Otro">Otro</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>


                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Telefono</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="usu_telefono" id="tel_valor"  required pattern="[0-9]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              
              
               
                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Numero documento</label>
                  <input type="text" class="form-control bg-dark-x border-0" name="usu_num_doc" id="usu_num_doc" required pattern="[0-9]+">
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">Tipo de documento</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" name="usu_tipo_documento" id="usu_tipo_documento">
                    <option selected>Seleccione</option>
                    <option value="CC">Cedula de ciudadania</option>
                    <option value="CE">Cedula de extranjeria</option>
                    <option value="TI">Tarjeta de indentidad</option>
                    <option value="RC">Registro civil</option>
                    
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom04" class=" text-dark fw-bold">Genero</label>
                  <select class="form-select form-select-lg mb-4 border-0 bg-dark-x" aria-label="Default select example" name="usu_genero" id="usu_genero">
                    <option selected>Seleccione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Fecha de nacimiento</label>
                  <input type="date" class="form-control bg-dark-x border-0" name="usu_fch_nac" id="usu_fch_nac" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>


                {{-- <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Barrio</label>
                  <input type="text" class="form-control bg-dark-x border-0"  name="dir_barrio" id="dir_barrio" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Dirección</label>
                  <input type="text" class="form-control bg-dark-x border-0"  name="dir_valor" id="dir_valor" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="validationCustom02" class=" text-dark fw-bold">Punto de referencia</label>
                  <textarea type="text" class="form-control bg-dark-x border-0"  name="dir_punto_ref" id="dir_punto_ref" required></textarea>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div> --}}

                <div class="col-md-6">
                  <label for="validationCustom03" class=" text-dark fw-bold">Correo</label>
                  <input type="email" class="form-control form-control-lg bg-dark-x border-0" name="email" id="email" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom05" class=" text-dark fw-bold">Contraseña</label>
                  <input type="password" class="form-control bg-dark-x border-0" name="password" id="password" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-secondary w-100 border-0">Enviar</button>
                </div>
              </form>
            </div>
            <div class="text-center px-lg-5 pt-lg3 pb-lg-4 p-0 w-100 mt-auto">
              <p class="text-dark d-inline-block mb-0">Al registrate, aceptas nuestras condiciones de uso y</p> <a href="#" class="text-dark fw-bold text-decoration-none">politícas de privacidad.</a><br>
              <p class="text-dark d-inline-block mb-0">¿Ya tienes una cuenta?</p> <a href="/login" class="text-dark fw-bold text-decoration-none">Iniciar sesión</a>
            </div>
          </div>

          <div class="col-lg-5 d-none d-lg-block">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
              </div>
              <div class="carousel-inner">
                <div class="img-2 carousel-item min-vh-100 active">
                  
                  
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="fw-bold ">Nutrición inteligente</h5>
                    <button type="button" class="btn btn-dark border-0 text-light" value="">Visita nuestra pagina principal</button>

               
                  </div>
                </div>
                
                
              </div>
             
            </div>
          </div>
        </div>


      
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>