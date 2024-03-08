<?php

$i = 0;

while($i < 10){
    echo "Loop EXTERNO $i <br>";

    //segundo contador
    $j = 1;
    while($j <5){
        echo "Loop INTERNO $j <br>";
        $j++;
    }

    $i++;
}
