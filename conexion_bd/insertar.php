<?php

	$conexion = mysql_connect("localhost","adsi2015","adsi2015");

	if (!$conexion) {

		die("No se a podido establecer una conexion por las siguiente razon: ".mysql_error());
	}

	mysql_select_db("agenda", $conexion);

	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
		values ('jose','silva',22,'3125269046')");

		mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
		values ('fredy','ramirez',18,'31252644')");


		mysql_close($conexion);


?>