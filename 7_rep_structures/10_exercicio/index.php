<?php
//imprima apenas numeros pares
$funcionarios = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

$funcionariosSize = count($funcionarios);

for($i = 0; $i < $funcionariosSize; $i++){
    if($funcionarios[$i] % 2 == 0){
        echo "<br> $funcionarios[$i]";
    }
}