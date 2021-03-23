<?php
/*
Lamas Juan Pablo
Aplicación No 11 (Potencias de números)
*/

for ($i=1; $i <= 4; $i++) { 
    for ($j=1; $j <= 4; $j++) { 
        echo "$i^$j: " . pow($i,$j) . "<br/>";
    }
}

?>