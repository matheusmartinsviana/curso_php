<?php

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$arraySize = count($array); // é basicamente o .lenght (pega o tamanho do array)

for($i = 0; $i < $arraySize; $i++){
    if($array[$i] === 30 || $array[$i] === 40){
        echo "<br> Pulei o $array[$i]";
        continue;
    }
    echo "<br> " . $array[$i];
}