<?php

$produtos = [
    'Sofá' => 2499,
    'Cafeteira' => 190,
    'Carro' => 30.000,
    'Espelho' => 80,
    'Caneta' => 2.
];

$newArray = produtosCaros($produtos);
print_r($newArray);

function produtosCaros($array) {
    $arrayReturn = [];
    foreach($array as $item => $preco) {
        if($preco > 10){
            array_push($arrayReturn, $item);//quero inserir o nome do item no arrayReturn
        }
    }
        return $arrayReturn;
}