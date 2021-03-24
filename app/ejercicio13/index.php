<?php
/*
Lamas Juan Pablo
Aplicación No 13 (Invertir palabra)
Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
1 si la palabra pertenece a algún elemento del listado.
0 en caso contrario.
*/
function Revisar($palabra, $max)
{
    $palabrasValidas = ["Recuperatorio", "Parcial",  "Programacion"];
    if(strlen($palabra) <= $max)
    {
        foreach ($$palabrasValidas as $key => $value) {
            if ($palabra == $value)
            {
                return 1;
            }
        }
    }
    return 0;
}

echo Revisar("Programacion", 20);
echo Revisar("Prueba fallida", 5);
echo Revisar("Otra prueba fallida",100)

?>