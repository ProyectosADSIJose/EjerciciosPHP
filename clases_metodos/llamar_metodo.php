<?php

	class saluda{ 

		function saluda(){echo "Yo te saludo";}
		function adios(){echo "Yo te digo adios";}


	}

 	class subsaluda extends saluda{

 		var $atributo;
 		function holados(){}
 	}

$instancia = new saluda();
echo "<br>";

$ins = $instancia->adios();


?>