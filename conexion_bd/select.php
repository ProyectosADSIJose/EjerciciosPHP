<?php

	//Realizamos la conexion

	$conexion = mysql_connect("localhost","adsi2015","adsi2015");

	//Estructura de control por si falla:

	if (!$conexion) {
		die("No se a podido establecer una conexion porque: ".mysql_error());
	}

	// Seleccion de bade de datos.

	mysql_select_db("agenda", $conexion);

	//realizo la peticion.
	$peticion = mysql_query("SELECT * FROM miagenda");

	//listo los elementos de la base de datos.

	while ($fila = mysql_fetch_array($peticion)) {
		
		echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
		echo "<br>";
	}

	//Cerrar  conexion
	mysql_close($conexion);
	

?>