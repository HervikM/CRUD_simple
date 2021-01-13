<?php
  include"includes/conexion.php";
  include"includes/head.php";
  include"includes/formulario.php";
?>

    <!-- TABLA CLIENTES -->
    <div class="flex-table">
        <h2>
            <i class="fas fa-users"></i> Clientes registrados
        </h2>
      <table id="tablaClientes" cellspacing="0" >
          <thead id="theads"> 
              <th>Rut</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Fecha nacimiento</th>
              <th>Fono</th>
              <th>Direccion</th>
              <th>Acciones</th>

          </thead>
          

            <tbody id="listaDatos"> </tbody>
      </table>

    </div>
    
    <div id="resultado">

    </div>  
  
  </div>
  </div>
</body>
</html>