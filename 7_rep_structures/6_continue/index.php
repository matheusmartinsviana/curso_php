<?php

$x = 10;

while($x > 0){
    if($x === 5 || $x === 6){
        echo "<br> Pulou a execução";
        $x--;
        continue;
    }
    echo "<br> " . $x;
    $x--;
}