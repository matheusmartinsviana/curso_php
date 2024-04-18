<?php

$carro = [
    'marca' => 'Ford',
    'modelo' => 'Fiesta',
    'Ano' => 2019,
    'Cor' => 'Vermelho',
    'Placa' => 'ABC-1234',
    'Proprietario' => 'João da Silva'
];

extract($carro);
foreach ($carro as $info => $value) {
    echo "$info: $value <br>";
}

$document = compact('Placa', 'Proprietario');
print_r($document);
?>