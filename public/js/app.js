$(document).ready(function () {

    $('#contadores').DataTable();

    mostrarContadores();


    function mostrarContadores() {
      $.ajax({
        type: "POST",
        url: url + "contadores/mostrarContadores",
        success: function (response) {
          console.log(response);
          $("#contadores tbody").html(response);
        },
        error: function () {
          console.log("error ajax");
        },
      });
    }
  
    $("button#subContador").click(function(){
		$.ajax({
			type: "POST",
			url: url+"contadores/agregar",
			data: $('form#frmcontadores').serialize(),
			success: function(response){
               // console.log(response)
                var mensaje = response
                ? "Contador insertado"
                : "Error al insertar el contador";
            alert(mensaje);
            $("#registroC").modal('hide'); 
            },
            error: function () {
            console.log("ERROR");
            },
		});
	});
});