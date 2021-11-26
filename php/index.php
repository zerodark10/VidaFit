
    <?php
     include("php/base.php");
   
     session_start();
     if(isset ($_SESSION['id_usuario'])){
       header("Location: home.php");
     }
     //registrar
     if (!empty ($_POST)){
        
        $correo =mysqli_real_escape_string($conn,$_POST['email']);
        $password =mysqli_real_escape_string($conn,$_POST['password']);
    

        $sql = "SELECT email FROM users WHERE email ='$correo' AND password ='$password' ";
        
        $resultado =$conn->query($sql);
        $rows =$resultado->num_rows;
        if($rows > 0){
          $row =$resultado->fetch_assoc();
          $_SESSION['iduser']=$row["email"];
          header("Location: home.php");
         
        }else{
          echo"<script>
          alert('usuario o password incorrecto');
          windows.location='index.php';
          </script>";
          }
        
     }


    ?>