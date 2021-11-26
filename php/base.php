<?php
$server = "sql207.epizy.com";
$username ="epiz_30357027";
$password= "UB6fMJOsUF7Bx";
$database= "epiz_30357027_99";


    $conn =
    mysqli_connect ($server,$username,$password,$database);

    if(!$conn){

    
    die("Connecion error:");
}
?>