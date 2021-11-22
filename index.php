
    <!DOCTYPE html>
<html lang="en">
  <head>
    <script src="js/sw.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="manifest.json">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="php" href="php/base.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/bbab06b81b.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">
    <title>Vida-Fit</title>
  </head>
  <body class="">
    
  <section> <video class="bg-video  radius-card" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="mp4/bg.mp4" type="video/mp4" /></video>
          
      <div class="row g-0">
        
        <div class="col-lg-7 d-none d-lg-block">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item img-1 min-vh-100 active">
               
                <div class="carousel-caption d-none d-md-block">
                  <h5>Vida-Fit</h5>
                  <p>Calidad de vida para ti y tu futuro.</p>
                </div>
              </div>
              <div class="carousel-item img-2 min-vh-100">
               
                <div class="carousel-caption d-none d-md-block">
                  <h5>Planes alimenticios</h5>
                  <p> Nutriologos con planes alimenticios ricos y sanos que tu cuerpo necesita.</p>
                </div>
              </div>
              <div class="carousel-item img-3 min-vh-100">
                
                <div class="carousel-caption d-none d-md-block">
                  <h5>Planes Personalizados</h5>
                  <p>Con entrenadores que cuidaran de tu salud.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
        <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
          <div class="container-fluid mb-5 ">
            <div class="row ">
             

             <div class="col-sm-9  col-8 col-md-9 col-lg-9 col-xl-10 p-4">  
               <img src="img/logo.png"class="img-fluid input radius" alt="logo">
               </div>
             
            
         </div>
           
         
         
                
            </div>

            <br>
            <br><br>
            <br> <br>
            <br><br>
            <div class="px-lg5 py-lg4 p-4 w-100 aling-self-center bg-dark-x  radius-card ">
                <h1 class="font-weigth-bold mb-4">Bienvenido</h1>
                <form class="mb-5" action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
                    <div class="mb-4 ">
                      
                      <label for="exampleInputEmail1" class="form-label font-weigth-bold">Email: </label>
                  
                        
                      <input type="email" class="form-control bg-white border-0 radius p-0" placeholder="
                      Ingresa tu email" required name="email" aria-describedby="emailHelp">
                      
                      
                    </div>
                    <div class="mb-4">
                     
                      <label for="exampleInputPassword1" class="form-label font-weigth-bold">Contrasena:</label>
                      
                      <input type="password" class="form-control bg-white border-0 radius p-0"  placeholder="
                      Ingresa tu contrasena"required name="password">
                    
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary w-100 radius mb-2 ">Iniciar sesion</button>
                    <div class="align-items-end d-flex flex-column">
                      <a href="Contrasena.html" id="emailHelp" class="form-text text-muted text-decoration-none  ">Olvidaste tu contraseña?</a>
                    </div>
                    
                  </form>
                  <p class="font-weight-bold text-center text-muted ">- O inicia sesion - </p>
                  <div class="d-flex justify-content-around">
                    
                    <button type="submit" class="btn btn-outline-light flex-grow-1 input mr-4 "><i class="fab fa-google lead mr-4"></i> Google</button>
                    <button type="submit" class="btn btn-outline-light flex-grow-1 input ml-4"><i class="fab fa-facebook lead mr-4"></i> Facebook</button>
                  </div>
            </div>
            <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mb-auto">
              <p class="d-inline-block mb-0 ">Aun no tienes una cuenta?</p> 
              <a href="Registro.php" class=" font-weight-bold text-decoration-none ">Crear una </a>
              <div>
                   <a href="planes.html" class=" font-weight-bold text-decoration-none mb-4">Acerca de nosotros</a>
              </div>

            </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     
    <script src="js/app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>
