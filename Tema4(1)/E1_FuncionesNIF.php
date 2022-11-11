<?php

//Devuelve la letra del NIF correspondiente a $numero
//"" Si el numero no es correcto

function calculaLetraDelNIF($numero) {
    //letras del NIF
    $secuenciaLetrasNIF = "TRWAGMYFPDXBNJZSQVHLCKE";
    $resto = $numero % 23; //Tomamos el resto de dividir por 23
    //Devolvemos el caracter correspondiente a resto
    return $secuenciaLetrasNIF[$resto]; //Con los corchetes cogemos un numero de una cadena
    //En nuestro caso dentro de los corchetes estará la variable resto
}
/*
//Probamos la funcion
$NIF = "23523110";
echo "El NIF $NIF tiene la letra " . calculaLetraDelNIF($NIF);
*/


//Valida un nif devuelve verdadero/falso
function verificadorNIF($NIF) {
    //Extraemos el numero del NIF 
    //En subtr el off set sirve para decirle desde donde y cuantos
    $numeroNIF = substr($NIF, 0, 8); //Sería desde la posición 0, nos cogerá 8
    //Devolvemod la comparacion de la letra calculada y la real
    return (calculaLetraDelNIF($numeroNIF) == $NIF[8]);
}


/*
//Comprobamos la funcion

$NIF = "23523110";
if (verificadorNIF("75575200Y")) {
    echo '<b> Bien</b>';
}
    else {
    echo ' <b>Mal</b>';
    }
 * 
 * */
 
echo "<hr>";