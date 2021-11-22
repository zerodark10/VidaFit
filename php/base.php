<?php
$server = "localhost";
$username ="root";
$password= "";
$database= "vidafit";


    $conn =
    mysqli_connect ($server,$username,$password,$database);

    if(!$conn){

    
    die("Connecion error:");
}