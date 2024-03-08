<?php
//mostrando array inteiro com ,
$array = ['Matheus', 'Gabi', 'Pablo'];

$implodeFunction =  implode(' ,',$array); // a função implode mostra todo a array com o PRIMEIRO paramêtro, entre eles

echo $implodeFunction;

//concatenando nomes
$nome = 'Matheus';
$sobrenome = 'Martins';
juntarNomes($nome, $sobrenome);
function juntarNomes($nome, $sobrenome){
    echo "<br>" .$nome . " " .$sobrenome;
}

//par ou impar
function verificarNum($num){
    echo $num % 2 == 0 ? "<br> Par" : "<br> Impar";
}

verificarNum(0);