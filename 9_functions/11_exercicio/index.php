<?php

//pegando numero maiores que sete em um array
$arrayComum = [1, 4, 90, 8, 9, 88, 23, 1, 3, 22, 21];

function maiorQueSete($array){
    $newArray = [];
    $arraySize = count($array);
    $contador = 0;
    for($i = 0; $i < $arraySize; $i++){
        if($array[$i] > 7){
            array_push($newArray, $array[$i]);
            $contador++;
        }
    }
    return $newArray;
}

$arrayMaiorQueSete = maiorQueSete($arrayComum);
print_r($arrayMaiorQueSete); //mostrar array
foreach($arrayMaiorQueSete as $number){
    echo "<br> " . $number;
}
?>