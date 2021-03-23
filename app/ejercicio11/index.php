<?php
/*
Lamas Juan Pablo
Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).
*/
function Potencias(){
    for ($i=1; $i <= 4; $i++) { 
        for ($j=1; $j <= 4; $j++) { 
            echo "$i^$j: " . pow($i,$j) . "<br/>";
        }
    }
    
}

Potencias();

?>