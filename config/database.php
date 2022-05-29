<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "FoodFast";

$conecta = mysqli_connect($hostname, $username, $password, $database);
if($coneta->connect_error){
    die("Error al conectar la base de datos en la pagina".$conecta->connect_error); 
}
 ?>