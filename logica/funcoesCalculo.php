<?php

function adicao($num1, $num2){
    return($num1 + $num2);
}

function subtracao($num1, $num2){
    return($num1 - $num2);
}

function multiplicacao($num1, $num2){
    return($num1 * $num2);
}

function divisao($num1, $num2){
    return($num1 / $num2);
}

function CelciusParaFahrenheit($num1){
    $f = ($num1 * 1.8) + 32;
    return $f;
}

function FahrenheitParaCelcius($num1){
    $c = ($num1 - 32) / 1.8;
    return $c;
}

function CentimetrosEmMetros($num1){
    $metro = $num1 / 100;
    return $metro;
}

function MetrosEmCentimetros($num1){
    $centi = $num1 * 100;
    return $centi;
}

?>