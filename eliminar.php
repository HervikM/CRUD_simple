<?php
include'includes/conexion.php';

    
    $rut = $_POST['id']; 
    
    $sqlEliminar = " DELETE FROM cliente WHERE  rut ='$rut'";

    if ($conn->query($sqlEliminar) === TRUE) {
        echo "Eliminado con exito";
      } else {
        echo "Error deleting record: " . $conn->error;
      }

?>