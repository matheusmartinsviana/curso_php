<?php

$str = "Testando explode";

$dividindoString = explode(" ", $str); // oque eu passar no primeiro parametro vai ser oque vai dividir
// ou seja sempre que achar um ESPAÇO a variavel vai dividir

print_r($dividindoString);

$frase = "Carro - Navio - Helicóptero - Barco - Jangada";

$arrayFrase = explode("-", $frase);

print_r($arrayFrase);