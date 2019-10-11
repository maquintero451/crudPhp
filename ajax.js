	
	function eliminarP(id) 
	{
		$.ajax({
			url: 'create.php',
			type: 'POST',
			dataType: 'JSON',
			data: {"idP":id,"accion":"eliminar"}
		})
		.done(function(respuesta) {
			
			console.log(respuesta);
		})
		.fail(function() {
			console.log("error");
		})
	
		 jQuery.consultar();
	}
$(document).ready(function() {
	
	$('#aviso').hide();

	
	$('#btnEnviar').click(function(){


		$.ajax({
			url: 'create.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#formu').serialize()+"&accion=añadir"
		}).done(function(response)
		{
			consultar();
			console.log(response);
		}).fail(function() {
			console.log("error");
		})
		$('#aviso').show();
		$('#nombre').val("");
		$('#apellido').val("");
	})


	function consultar()
	{
		$.ajax({
			url: 'create.php',
			type: 'POST',
			dataType: 'JSON',
			data:{"accion":"consultar"}
		})
		.done(function(respuesta) {
			var x="";
			console.log(respuesta);
			for (var item in respuesta) {
				var tabla=document.getElementById('cuerpoT');
				
				x +=("<tr><td name='idP' >"+respuesta[item].idPersonas+"</td><td>"+respuesta[item].nombre+"</td><td>"+respuesta[item].apellido+"</td><td><input type='button' class='btn bg-primary mr-2'  value='Modificar'><input type='button' name='btnEliminar' onclick='eliminarP("+respuesta[item].idPersonas+");' class='btn bg-danger eliminar'  value='Eliminar'></td></tr>")
				tabla.innerHTML=x
			}
			
		
		})
		.fail(function() {
			console.log("error");
		})
		
		
		
	}
	consultar()


})
