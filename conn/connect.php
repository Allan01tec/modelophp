<?php 
$host = "localhost";
$database = "tinsphpdb01";
$root = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

try{
    //lembre dessa variavel quando usar um comando SQL no PHP
    $conn = new mysqli($host,$root,$pass,$database,$port);
    mysqli_set_charset($conn, $charset);
}catch (Throwable $th){
    die("Atenção um ERRO foi encontrado!".$th);
}

?>  