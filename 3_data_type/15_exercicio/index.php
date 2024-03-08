<?php

$pessoa = [
    'Nome' => 'Matheus',
    'Peso' => 60,
    'Profissão' => 'Desenvolvedor Web',
    'Idade' => '18'
];

if($pessoa['Idade'] >= 18) {
    echo "Descrição da pessoa: <br>";
    echo "Nome: " . $pessoa['Nome'];
    echo "<br>Idade: " . $pessoa['Idade'];
    echo "<br>Peso: " . $pessoa['Peso'];
    echo "<br>Profissão: " . $pessoa['Profissão'];
    echo "<br>" . $pessoa['Nome'] . " é maior de  idade";
}
