<?php

$array = [];

for($i = 0; $i < 11; $i++){
    array_push($array, $i);
    echo "<br>";
}
print_r($array);

$arraySize = count($array);
for($i = 0; $i < $arraySize; $i++){
    echo "<br> índice $i = $array[$i]";
}