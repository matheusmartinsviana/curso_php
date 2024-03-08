<?php
//crie um array com uma função range 10 até 45
//imprima com uma soma de 6
//se passar de 30 imprima uma frase dizendo que o numero é alto

$num = range(10, 45);

for($i = 0; $i < count($num); $i++) {
    $soma = $num[$i] + 6;
    if($soma > 30) {
        echo "<br> o número $soma é muito alto";
    } else {
        echo "$soma <br>";
    }
}