<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/iniS.css">
    <title>Inicio de sesión</title>
  </head>

  <body class="bg-dark">
    
    <section>
        
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                </div>
                <div class="carousel-inner">
                  <div class="img-2 carousel-item min-vh-100 active">
                    
                    
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="fw-bold ">Nutrición inteligente</h5>
                      <button type="button" class="btn btn-dark text-light" value="">Visita nuestra pagina principal</button>

                 
                    </div>
                  </div>
                  
                  
                </div>
               
              </div>
            </div>
      
        <div class="col-lg-5 d-flex-column align-items-end min-vh-100">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto text-center">
              <a href="/">
                <img src="assets/img/logo4.png" class="img-fluid">
              </a>
            </div>
            <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                <h1 class="text-dark fw-bold mb-4">Bienvenido</h1>
                <form action="/login" method="POST">
                  @csrf
                    <div class="mb-4">
                      <label for="correo" class=" text-dark fw-bold">Correo</label>
                      <input type="email" class="form-control bg-dark-x border-0" name="email" placeholder="Ingresa tu correo" id="email" aria-describedby="emailHelp">
                    </div> 
                    <div class="mb-4">
                      <label for="clave" class="text-dark fw-bold ">Contraseña</label>
                      <input type="password" class="form-control bg-dark-x border-0 mb-2" name="password" placeholder="Ingresa tu contraseña" id="password">
                      <a href="#" id="emailHelp" class="form-text text-decoration-none">¿Has olvidado tu contraseña?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary w-100">Iniciar sesión</button>
                  </form>
            </div>
            <div class="text-center px-lg-5 pt-lg3 pb-lg-4 p-4 w-100 mt-auto">
              
              <p class="text-dark d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="/register" class="text-dark fw-bold text-decoration-none">Registrate</a>
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