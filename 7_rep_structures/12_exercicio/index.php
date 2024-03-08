<?php

$array = [];

for($i = 10; $i < 21; $i++){
    array_push($array, $i);
}
print_r($array);

$arraySize = count($array);
for($i = 0; $i < $arraySize; $i++){
    echo $array[$i] % 2 != 0 ? "<br> índice $i = $array[$i]" : "<br> Array par detectado";
}