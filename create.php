<?php 

	include 'db.php';
	
		class Persona 
		{
			
			function __construct()
			{
			
			}
			public function Guardar($nombre,$apellido)
			{
				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];

				$conex=new Conexion();
				$stmt=$conex->prepare("INSERT INTO personas(nombre, apellido) VALUES (:nombre,:apellido) ");
				$stmt->bindValue(":nombre",$nombre,PDO::PARAM_STR);
				$stmt->bindValue(":apellido",$apellido,PDO::PARAM_STR);
				if ($stmt->execute())
				{
					return "ok";
				}
				else
				{
					return "error";
				}
			}
		}



 ?>