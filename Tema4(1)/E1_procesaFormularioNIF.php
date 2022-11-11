<?php

//Incluimos las funciones del NIF
include './E1_FuncionesNIF.php';

//Recogemos los datos del formulario

$nombre= $_POST["nombre"];
$NIF = $_POST["NIF"];

echo "El NIF de $nombre esta";

if (verificadorNIF($NIF)) {
    echo '<b> Bien</b>';
}
    else {
    echo ' <b>Mal</b>';
    }