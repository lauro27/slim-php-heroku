<?php
/*
Lamas Juan Pablo
Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*/

function esPar($valor)
{
    if($valor % 2 == 0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

function esImpar($valor)
{
    return !esPar($valor);
}

echo "8 es par: " . esPar(8) . "<br>";
echo "17 es par: " . esPar(17) . "<br>";
echo "8 es impar: " . esImpar(8) . "<br>";
echo "17 es impar: " . esImpar(17) . "<br>";

?>