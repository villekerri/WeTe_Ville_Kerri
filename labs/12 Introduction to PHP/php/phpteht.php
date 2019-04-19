<?php

$strings = array("Aaa", "Bbb", "Ccc", "Ddd", "Eee");
for ($i = 0 ; $i < count($strings) ; $i++){
    echo nl2br("$i = $strings[$i]\n");
}

$sade = 4.0;
$pi = 3.14159;
$ala = $pi * $sade * $sade;

echo "$ala";
?>