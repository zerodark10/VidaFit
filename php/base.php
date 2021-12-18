<?php
$server = "sql111.epizy.com";
$username ="epiz_30153231";
$password= "eV0NIea4uXWGVD";
$database= "epiz_30153231_99";


    $conn =
    mysqli_connect ($server,$username,$password,$database);

    if(!$conn){

    
    die("Connecion error:");
}