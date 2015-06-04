<?php
	
	$conexion = mysql_connect("localhost","adsi2015","adsi2015");

	if (!$conexion) {
		
		die('No se a podido establecer una conexion: '.mysql_error());
	}

	

		if (mysql_query("CREATE DATABASE Agenda",$conexion)) {
			
			echo "Se a creado la base datos correctamente ";
		}

		else{

			echo "No se a podido crear la base de datos por el siguiente error: ".mysql_error();			
		}
	

		//preparo esta peticion

		mysql_select_db("Agenda", $conexion);
		$sql = "CREATE TABLE MiAgenda
		(
			idPersona int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY (idPersona),
			Nombre varchar(15),
			Apellido varchar(15),
			Edad int,
			Telefono int
			)";

		//ejecuto la peticion

		mysql_query($sql, $conexion);


		// Cerrar la conexion
		mysql_close($conexion);

?>