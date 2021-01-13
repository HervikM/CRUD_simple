<?php  

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "usuarios";

//Create conexion
$conn = new mysqli($servername, $username, $password, $database);

//check conexion
if($conn->connect_error){
    die("Conexion fallida: ". $conn->connect_error);
}

?>