<?php

function sumDigits($num){
    $result = 0;
    $numToString = strval($num); //converte para string para percorrer no for
    for($i = 0; $i < strlen($numToString); $i++){
        $result += intval($numToString[$i]); //converte dnv para int
    }
    return $result;
}

$dado = sumDigits(1854);
echo $dado;