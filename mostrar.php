<?php
  include"includes/conexion.php";

      $sqlMostrar = "SELECT * FROM cliente";
      $result = $conn->query($sqlMostrar);
      if($result->num_rows > 0){

          $json = array();
          while($row = $result->fetch_assoc()){
            // Agregamos datos a JSON
          $json[] = array(
              'run'=> $row["rut"],
              'name' => $row["nombres"],
              'lastname' => $row["apellidos"],
              'date' =>  $row["fecha_nacimiento"],
              'phone' => $row["fono"],
              'direction' =>  $row["direccion"],
              ) ;
          }
      } else {
          echo "0 results";
      }
      $jsonstring = json_encode($json);
      echo $jsonstring;

?>