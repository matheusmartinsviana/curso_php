<?php

$bool = true;
$string = "{Text}";
$integer = 1;
$float = 1.0;
$array = [0, 1, 2];
$arrayAssociativo = [0 => 'Zero', 1 => 'Um', 2 => 'Dois'];

echo '$bool' . " É uma variável do tipo boleana, e tem o valor = $bool <br>";
echo '$string' . " É uma variável do tipo string, e tem o valor = $string <br>";
echo '$integer' . " É uma variável do tipo intera, e tem o valor = $integer <br>";
echo '$float' . " É uma variável do tipo float, e tem o valor = $float <br>";
echo '$array' . " É uma variável do tipo array, e tem o valor = $array[1]"; echo "<br>";
echo '$arrayAssociativo' . " É uma variável de array associativo ['chave' => 'valor'], e tem o valor = "; print_r($arrayAssociativo);