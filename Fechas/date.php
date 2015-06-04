<?php

echo " Hoy es ".date("l")." , ".date("j")." de ".date("F")." de ".date("y")."<br><br>";

echo "<br>formato de fechas <br>";
echo date("c");

echo "<br>Zona horario <br>";
echo date("e");

echo "dia en el que estamos<br>";
echo date("d");
echo"<br>dia en el que estoy sin cero inicial<br>";
echo date("j");
echo "<br>3 letras dia de la semana en ingles<br>";
echo date("D");
echo"<br>palabra del dia de la semana completa<br>";
echo date("l");
echo"<br>dia de la semana en la q2ue nos encontramos<br>";
echo date("n");
echo"<br>dia de la semana en el que me encuentro<br>";
echo date("w");
echo"<br>numero de dias desde que empezo el año<br>";
echo date("z");
echo"<br>numero de semana en la que me encuentro del año<br>";
echo date("W");
echo"<br>meses<br>";
echo date("F");
echo"<br>numero de mes en elq ue estoy<br>";
echo date("m");
echo"<br>dias que existen en el mes que me encuentro<br>";
echo date("t");

echo"<br>año completo en el que estamos<br>";
echo date("Y");
echo"<br>dos numeros del año<br>";
echo date("y");
echo"<br>si el año es biciesto<br>";
echo date("l");
echo"<br>formato año mes dia, minuto, hora, segundo.<br>";
echo date("c");
echo"<br>si es am o pm<br>";
echo date("a");
echo"<br>si es am o pm en mayusculas<br>";
echo date("A");
echo"<br>hora del dia de 8 a 12<br>";
echo date("g");
echo"<br>hora del dia en formato 24<br>";
echo date("G");
echo"<br>minitos con ceros<br>";
echo date("i");
echo"<br>segundos con ceros<br>";
echo date("s");
echo"<br>micro segundos<br>";
echo date("u");

echo"<br>eb que zona horaria estamos<br>";
echo date("e");

echo "<br><br>FECHAS EN CASTELLANO<br><br>";
function dameTiempo(){

	switch (date("l")){

		case "Monday":
		    $dia="lunes";
		    break;
		case "Tuesday":
		    $dia="martes";
		    break;
		case "Wednesday":
		    $dia="miercoles";
		    break;
		case "Thursday":
		    $dia="jueves";
		    break;
		case "Friday":
		    $dia="viernes";
		    break;
		case "Saturday":
		    $dia="sabado";
		    break;
		case "Sunday":
		    $dia="domingo";
		    break;    


	}
	switch(date("F")){
        case "January":
            $mes="enero";
            break;
        case "February":
            $mes="febrero";
            break;
        case "March":
            $mes="marzo";
            break;
        case "January":
            $mes="April";
            break;
        case "January":
            $mes="May";
            break;
        case "June":
            $mes="junio";
            break;
        case "July":
            $mes="julio";
            break;
        case "August":
            $mes="agosto";
            break;
        case "September":
            $mes="septiembre";
            break;
        case "October":
            $mes="octubre";
            break;
        case "November":
            $mes="Noviembre";
            break;
        case "December":
            $mes="diciembre";
            break;

	}
	echo " Hoy es ".$dia." , ".date("j")." de ".$mes." de ".date("y");
}
dameTiempo();

?>