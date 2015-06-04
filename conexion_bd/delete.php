<?php

		$conexion = mysql_connect("localhost","adsi2015","adsi2015");


	    mysql_select_db("agenda", $conexion);

	    $peticion = mysql_query("DELETE FROM miagenda  WHERE Nombre = 'jose' AND Apellido = 'silva'");

	    mysql_close($conexion);



?>