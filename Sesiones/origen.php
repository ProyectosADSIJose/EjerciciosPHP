<?php

session_start();
$primeravariable = "hola";
$_SESSION['segundavariable']= "Adios";

echo $primeravariable;

echo "<a href='destino.php'>Voy al destino</a>";


?>