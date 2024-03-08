<?php

Class Pessoa { // cria-se o objeto pessoa

    function falar(){ // define o método do objeto 
        echo "Olá pessoal!";
    }

}

$matheus = new Pessoa(); // define a variavel matheus como um objeto Pessoa

$matheus->nome = "Matheus"; // cria a propriedade nome no objeto (porque agora matheus é um objeto = pessoa)

echo $matheus->nome . "<br>";

$matheus->falar(); // chama o metodo de falar de matheus ou de pessoa(Porque agora matheus é uma pessoa)

$sete = 5+2;
echo $sete;