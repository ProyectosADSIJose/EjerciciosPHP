<?php


//con esta funcion preparo una tabla de multiplicar
function miTabla($numero){
 for($multiplicador =0; $multiplicador<=10;$multiplicador++){

 	echo $numero."x".$multiplicador."=".$numero*$multiplicador."<br>";

 }

}

//con este for calculo las tablas de multiplicar
for ($otronumero=0; $otronumero<=10;$otronumero++){
  
  echo "tabla del".$otronumero."<br>";
  
   miTabla($otronumero);
}


?>