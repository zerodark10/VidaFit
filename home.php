<?php

include("php/base.php");
session_start();
if(!isset ($_SESSION['iduser'])){
  header("Location: index.php");
}
$iduser = $_SESSION['iduser'];


$sql = "SELECT email ,Nombre FROM users WHERE email ='$iduser'";
$resultado =$conn->query($sql);
$row = $resultado->fetch_assoc();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/bbab06b81b.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">
    <title>Vida-Fit</title>
  </head>
  <body class="bg-dark">

        <div class="col-lg-  d-flex flex-column align-items-end  ">
          <div class="container">
            <div class="row ">

            <div class="col-sm-9  col-8 col-md-10 col-lg-8 p-4 col-xl-10 col-xxl-10">  
            <img src="img/logo.png"class="img-fluid" alt="logo">
           
            </div>

            <div class="col-sm-3 col-4 col-md-2  col-lg-4  col-xl-2 col-xxl-2">
           <a href="Formulario.php"> <img src="img/user.png" class="img-fluid"   alt="user"></a> <?php
             echo utf8_decode($row['Nombre']);
            ?>
           
           <a href="php/cerrar.php">Cerrar sesion</a>
            </div>

           </div>
        </div>
      </div>
   


      


     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    
    <script src="js/app.js"></script>
    <link rel="manifest" href="manifest.json">

 
  </body>
 <footer class="bg-blue radius">
 <div class="container">
  <div class="row p-2 align-items-end">
    <div class="col  ">
    <i class="fas fa-home"></i>
   
    </div>
    <div class="col">
    <i class="fas fa-heartbeat"></i>
    </div>
    <div class="col">
    <i class="fas fa-sliders-h"></i>
    </div>
   </div> 
  </div>
 </footer>
</html>