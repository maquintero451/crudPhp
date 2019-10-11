<?php include 'db.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	

</head>
<body>
	<div class="container-fluid">
		<div class="row mb-4">
			<div class="col">
				<div class="nav navbar-light bg-warning">
					<a href="index.php" class="navbar-brand">CRUD</a>
				</div>
			</div>
		</div>
	</div>
		<div class="container">
		<form id="formu" method="post">
			
		<div class="row d-flex">
			
				<div class="col-6">
					<input type="textbox" name="nombre" id="nombre" placeholder="Digite su nombre" autofocus class="form-control">
				</div>
				<div class="col-6">
					<input type="textbox" name="apellido"  id="apellido" placeholder="Digite su apellido"  class="form-control">
				</div>
			
		</div>
				
		<div class="row my-3">
			<div class="col">
				<input type="button" name="btnEnviar" class="btn bg-primary" value="Enviar" id="btnEnviar">
			</div>

		</div>
		</form>
		<div class="row my-3">
			<div class="col">
				<div class="alert alert-success alert-dismissible fade show" role="alert" id="aviso">
				  	usuario creado con exito
				  	<button type="button" class="close " data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				 	 </button>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col">	
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>acciones</th>
						</tr>
					</thead>
					<tbody id="cuerpoT">
						
					</tbody>
				</table>
			</div>
		</div>	
		
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
</body>
</html>