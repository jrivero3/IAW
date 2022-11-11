<?php

$precioBase = 200;
$nombre = $_POST["nombre"];
$añoCarnet = $_POST["añoCarnet"];


//Calculamos la antiguedad de carnet
//Obtenemos la fecha actual usando la funcion date
$fechaActual =date("Y");



//Definimos que si la antiguedad es menor de 10 años, que se multiplique el precio
//Base por 2

$precioActual = 0;
function diferenciaAnosCarnet($añoCarnet){
    
    $precioActual = $precioBase * 2;
   return $precioActual;
}


/*
//Si es mujer tendrá un 10% de descuento
$mujer = $_POST["mujer"];

function mujer($mujer){
if($mujer){
    $precioBase = ($precioBase * 0.10) ;
}
}
echo "<br>";


*/