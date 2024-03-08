<?php

$x = 4;

while($x <= 30){
    echo "$x ... <br>";
    if($x === 24){
        echo "Chegou no número 24, quebrando loop <br>";
        break;
    }
    $x+=2;
}
echo "O loop se encerrou por conta que a condição TRUE";