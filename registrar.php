<?php
  include"includes/conexion.php";

$rut = $_POST['Rut'];
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$fecha = $_POST['Fecha'];
$fonoo = $_POST['Fono'];
$direccion = $_POST['Direccion'];
$fono = intval($fonoo);

for($i=0; $i<9999999; $i++){
    
}

$sqlInsertar = 'INSERT INTO  cliente values ("'.$rut.'","'.$nombre.'","'.$apellido.'","'.$fecha.'","'.$fono.'","'.$direccion.'")';

if($conn->query($sqlInsertar) === TRUE){
    echo "Usuario registrado correctamente <i style='margin-left:5px;' class='far fa-smile'></i>";
    
}else{
    echo "ERROR: ".$sqlInsertar. "<br>".$conn->error;
}



$conn->close();
  
  ?>