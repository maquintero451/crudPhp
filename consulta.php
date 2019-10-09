<?php 
	include 'db.php';
	$consul="SELECT idPersonas,nombre,apellido FROM personas";
	$resultado=$conet->query($consul);

	while ( $registro=$resultado->fetch_assoc()) {
		echo "<tr>
					<td>$registro[idPersonas]</td>
					<td> $registro[nombre] </td>
					<td> $registro[apellido] </td>
					<td><button class='btn btn-primary'>modificar</button> <button class='btn btn-danger'>eliminar</button>		</td>
				 </tr>";
	}
	
?>
