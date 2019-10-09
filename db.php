<?php

	class Conexion extends PDO
	{
		
		function __construct()
		{
			try
			{
				parent::__construct("mysql:host=localhost;dbname=phpcrud","root","");
				parent::exec("set name utf8");
			}
			catch(PDOException $e)
			{
				echo "error al conector ".$e->getMessage();
			}
		}

	}
	

	
?>

