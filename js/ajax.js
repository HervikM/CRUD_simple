$(document).ready(function () {
  mostrarDatos();

  $("#btn-enviar").click(function (e) {
    e.preventDefault();

    //parametros
    const datos = {
      Rut: $("#rut").val(),
      Nombres: $("#nombres").val(),
      Apellidos: $("#apellidos").val(),
      Fecha: $("#fecha").val(),
      Fono: $("#fono").val(),
      Direccion: $("#direccion").val(),
    };

    $("#rut").val("");
    $("#nombres").val("");
    $("#apellidos").val("");
    $("#fecha").val("");
    $("#fono").val("");
    $("#direccion").val("");

    $.ajax({
      data: datos,
      url: "registrar.php",
      type: "post",
      beforeSend: function () {
        $("#resultado").html("Cargando, espere porfavor...");
      },
      success: function (response) {
        $("#resultado")
          .css("visibility", "visible")
          .css("transition", "600ms all");
        setTimeout(() => {
          $("#resultado")
            .css("visibility", "hidden")
            .css("transition", "900ms all");
        }, 6000);
        $("#resultado").html(response);

        mostrarDatos();
      },
    });

    // alert("has presionado registrar");
  });

  // MOSTRAR CLIENTES
  function mostrarDatos() {
    $.ajax({
      url: "mostrar.php",
      type: "GET",
      success: function (response) {
        let datos = JSON.parse(response);
        let template = "";
        datos.forEach((cliente) => {
          template += `
          <tr  RUT='${cliente.run}'>

              <td>${cliente.run}</td>
              <td>${cliente.name}</td>
              <td>${cliente.lastname}</td>
              <td>${cliente.date}</td>
              <td>${cliente.phone}</td>
              <td>${cliente.direction}</td>
              <td id='btn-delete'>
                  <button class='buton-Eliminar' href='eliminar.php?rut=".$row["rut"]."'>
                     <i class="fas fa-trash-alt"></i>
                  </button>
              </td>
          </tr>
        `;
        });
        $("#listaDatos").html(template);
      },
    });
  }

  // ELIMINAR
  $(document).on("click", ".buton-Eliminar", function () {
    //  console.log("clicked");
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr("RUT");

    $.post("eliminar.php", { id }, function (response) {
      console.log(response);
      mostrarDatos();
      alert("Exito \n Ha eliminado el cliente correctamente");
    });
  });
});
