$(document).ready(function () {
  mostrarEmpleados();

  function mostrarEmpleados() {
    $.ajax({
      type: "POST",
      url: url + "empleado/mostrarEmpleados",
      success: function (response) {
        console.log(response);
        $("#productos tbody").html(response);
      },
      error: function () {
        console.log("error ajax");
      },
    });
  }

  // Agregar productos
  $("#btnAdd").click(function (e) {
    e.preventDefault();
    var form = $("#frmProductos");
    var method = form.attr("method");
    var action = form.attr("action");
    var data = form.serialize();
    $.ajax({
      type: method,
      url: action,
      data: data,
      success: function (response) {
        // console.log(response)
        var mensaje = response
          ? "Empleado insertado"
          : "Error al insertar el empleado";
        alert(mensaje);
        form[0].reset();
      },
      error: function () {
        console.log("ERROR");
      },
    });
  });

  //Modificar productos
  $("#btnModificar").click(function (e) {
    e.preventDefault();
    var form = $("#frmProductos");
    var method = form.attr("method");
    var action = form.attr("action");
    var data = form.serialize();
    $.ajax({
      type: method,
      url: action,
      data: data,
      success: function (response) {
        var mensaje = response
          ? "Producto modificado"
          : "Error al modificar el empleado";
        alert(mensaje);
      },
      error: function () {
        console.log("ERROR");
      },
    });
  });

  // Eliminar productos
  $("body").on("click", "#btnEliminar", function (e) {
    e.preventDefault();
    var href = $(this).attr("href");
    swal.fire({ 
      icon: 'question', 
      title: '¿Esta seguro de eliminar ?',
      showCancelButton: true, 
      confirmButtonText: 'Si, Eliminar' 
      }).then(function(result) { 
              if (result.isConfirmed) { 
                $.ajax({
                  type: "GET",
                  url: href,
                  success: function (response) {
                    var mensaje = response
                      ? "Producto eliminado"
                      : "Error al eliminar el empleado"; 
                    Swal.fire(mensaje);
                    // Invocar función para listar productos
                    mostrarEmpleados();
                  },
                  error: function () { 
                    Swal.fire("Error de ajax");
                  },
                });

              } 
              else if (result.isDismissed) { 
                  swal.fire( 
                      'Operación cancelada', '', 
                      'warning' 
                  ) 
              } 
      }); 
   
  });
});
