<?php

$car = ['Model' => 'R35', 'Company' => 'Nissan', 'Turbo' => true];

$index = [0 => 'Model', 1 => 'Company', 2 => 'Turbo'];

for($i = 0; $i < 3; $i++){
    echo "<br>";
    print_r ($index[$i]); //pega o nome do array
    echo " = ";
    echo $car[$index[$i]]; //pega o valor de index que é o nome da chave do array car.
}