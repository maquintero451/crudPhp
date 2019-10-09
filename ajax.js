$(document).ready(function() {
	
	$('#aviso').hide();

	
	$('#btnEnviar').click(function(){


		$.ajax({
			url: 'create.php',
			type: 'POST',
			dataType: 'json',
			data: datos('GUARDAR')
		}).done(function(response)
		{
			if (response=="ok") 
			{
				alert("datos guardados")
					$('#aviso').show()
			}
			else
			{
				alert(response)
			}
		})
		
	
		tabla()

	})
	function tabla(){
		var tabla= $.ajax({
		url: 'consulta.php',
		
		dataType:'text',
		async:false
		}).responseText;
		$('#cuerpo').html(tabla)
	}
	tabla()
	function datos(accion)
	{
		return{
			"idPersona":document.getElementById('idPersona').value,
			"nombre":document.getElementById('nombre').value,
			"apellido":document.getElementById('apellido').value,
		}
	}
})
