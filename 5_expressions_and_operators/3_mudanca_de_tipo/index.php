<?php

$funcionario = [
    "Matheus",
    "Joana",
    "Gabriel",
    "David",
    "Cleberson"
];
$dominio = "@gmail.com";

for($i = 0; $i < 5; $i++){
    echo "Email do funcionário $funcionario[$i]: " . $funcionario[$i] . $dominio . "<br><br>"; 
}

$x = 2;
$y = 4;

if(is_string($x . $y)){
    echo "<br><br> concatenação: " . $x . $y;
}