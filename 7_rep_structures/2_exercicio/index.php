<?php

$array = [
    'Matheus',
    12,
    4,
    'João',
    'Cleber',
    2.3,
    'Marcos',
    9,
    true,
    'Luiza'
];

$x = count($array);
$y = 0;

while($y < $x){

    if(is_string($array[$y])){
        echo "<br>" . $array[$y];
    }
    $y++;
}

 //for
 echo "<br><br> com a estrutura FOR";
for($i = 0; $i < $x; $i++){
    if(is_string($array[$i])){
        echo "<br>" . $array[$i];
    }
}
