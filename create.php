<?php 

	include 'db.php';
	
		class Persona 
		{
			
			function __construct()
			{
				
			}
			public function Guardar($datos)
			{
				
				$nombre=$datos['nombre'];
				$apellidos=$datos['apellido'];
				$conex=new Conexion();

				$stmt=$conex->prepare("INSERT INTO personas(nombre,apellido) VALUES (:nombre,:apellidos)");
				$stmt->bindValue(':nombre',$nombre,PDO::PARAM_STR);
				$stmt->bindValue(':apellidos',$apellidos,PDO::PARAM_STR);
				
				$stmt->execute();
				echo json_encode("ok");
			
			
			}
			public function Consultar()
			{
				$conex=new Conexion();
				$stmt=$conex->prepare("SELECT * FROM personas");
				$stmt->execute();
				echo json_encode($stmt->fetchAll(PDO::FETCH_OBJ));
			}
			public function Eliminar($id)
			{
				$idP=$id['idP'];
				$conex=new Conexion();
				$stmt=$conex->prepare("DELETE FROM personas WHERE idPersonas= :id");
				$stmt->bindValue(':id',$idP,PDO::PARAM_INT);
				$stmt->execute();
				echo json_encode($idP);
			}
			public function Modificar($datos)
			{
				$idP=$datos['idP'];
				$nombre=$datos['nombre'];
				$apellidos=$datos['apellido'];
				$conex=new Conexion();

				$stmt=$conex->prepare("UPDATE personas SET nombre=:nombre,apellido=:apellidos WHERE idPersonas=:idP");
				$stmt->bindValue(':idP',$idP,PDO::PARAM_INT);
				$stmt->bindValue(':nombre',$nombre,PDO::PARAM_STR);
				$stmt->bindValue(':apellidos',$apellidos,PDO::PARAM_STR);
				
				$stmt->execute();
				echo json_encode("ok");
			
			
			}


		}
		$funciones=new Persona();
		switch ($_POST['accion']) {
			case 'añadir':
				$funciones->Guardar($_POST);
				break;
			case 'consultar':
				$funciones->Consultar();
				break;
			case 'eliminar':
				$funciones->Eliminar($_POST);
				break;
			default:
				# code...
				break;
		}
		

 ?>