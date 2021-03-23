<?php
/*
Lamas Juan Pablo
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/
function Invertir($array)
{
    $retorno = "";
    for ($i=count($array)-1; $i >= 0; $i--) { 
        $retorno .= $array[$i];
    }
    return $retorno;
}

$array = ["h","o","l","a"];
echo Invertir($array);
?>