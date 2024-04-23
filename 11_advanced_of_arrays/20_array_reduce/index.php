<?php

$numeros = [1, 2, 54, 7, 5, 23, 234, 7, 9];

function soma($x, $y) {
    return $x + $y;
}

$resultadoSoma = array_reduce($numeros, "soma");
echo "$resultadoSoma <br>";
