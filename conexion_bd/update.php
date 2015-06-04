<?php

		$conexion = mysql_connect("localhost","adsi2015","adsi2015");


	    mysql_select_db("agenda", $conexion);

	    $peticion = mysql_query("UPDATE  miagenda SET Edad = '22' WHERE Nombre = 'jose' AND Apellido = 'silva'");

	    mysql_close($conexion);



?>
