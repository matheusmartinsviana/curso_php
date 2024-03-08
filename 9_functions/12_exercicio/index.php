<?php

function sumEvenNumbers($num){
    $numPar = 0;
    if(is_int($num) && $num >= 1){
        for($x = 1; $x < $num; $x++){
            if($x % 2 == 0){
                $numPar += $x;
            }
        }
    }
    return $numPar;
}
echo sumEvenNumbers(9); // r=20 :)


// contar vogais
function countVowels($string){
    $contador = 0;
    if(is_string($string)){
        for($i = 0; $i < strlen($string); $i++){
            if($string[$i] === 'a' || $string[$i] === 'e' || $string[$i] === 'i' || $string[$i] === 'o' || $string[$i] === 'u'){
                $contador++;
            }
        }
    }
    return $contador;
}

echo countVowels('MatheusMatheus');


//metodo diferente para concatenação de array

$lista = ['Vinagre', 'Sal', 'Feijão', 'Abacate', 'Cerquilha'];

function arrayToList($array){
    $str = "<br> Você levou esses itens do mercado: ";

    for($i = 0; $i < count($array); $i++){
        if($i + 1 == count($array)){
            $str .= "$array[$i].";
        } else {
            $str .= "$array[$i], ";
        }
    }
    return $str;
}
echo arrayToList($lista);
