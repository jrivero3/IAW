<?php
//Creamos una constante para precio base
const PRECIO_BASE = 200; //Constantes siempre en mayusculas

//$precio a ser el precio del seguro final!!
 $precio = PRECIO_BASE;
    
 
  //-- segun el tomador
//con menos de 10 anos de carnet BASE x 2
//Obtenemos el valor del formulario
 $añoCarnet = $_POST["anoCarnet"];
 if((date("Y") - $añoCarnet) < 10){
     $precio *=2
 };
 
 

 
 
 //si es mujer 10% dcto.

 $sexo = $_POST['sexo'];
 
    if ($sexo=="mujer"){
        $precio=$precio*0.9;
    }
 
    
  
 /*   
 -- segun el vehiculo
con más de 10 anos de matriculación suplemento de 100€*/
  $anoMatricula = $_POST["añoMatricula"];
if((date("Y")-$añoMatricula) > 10){
    $precio = $precio + 100;
}  
 
    
/*    
electrico rebaja del 30%
diesel suplemento del 30%
*/

$tipoCombustible = $_POST["tipoCombustible"];

if($tipoCombustible == "electrico"){
    $precio = $precio * 0.70;
}elseif($tipoCombustible == "diesel"){
    $precio = $precio * 1.30;
}



/*
-- segun modalidad
'B'asico -> no cambia
'I'ntermedio -> suplemento 200€
'T'odo riesgo -> precio x 2
 */


$modalidad = $_POST["tipoSeguro"];

switch ($modalidad){
    case "intermedio": 
        $precio = $precio + 200;
        break;
    case 'todoRiesgo':
        $precio = $precio * 2;
        break;
    
}

$nombre = $_POST["nombre"];
$matricula = $_POST["matricula"];

       
echo "$nombre el seguro para tu vehiculo $matricula y vale $precio �";