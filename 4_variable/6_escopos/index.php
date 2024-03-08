<?php
$num1 = 1;
//variavel local
function teste(){
    $num1 = 3;
    echo $num1;
}
teste();
echo "<br>",$num1; 

//global acessar variavel global em uma funcao (Chama variavel global sem passar parametro podendo alterar a variavel global dentro da funcao)
$abc = "asd";
function testeGlobal(){
    global $abc;
    $abc = "Matheus";
    echo "pos global",$abc;
}
testeGlobal();


//escopo estatico
function testeNum(){
    static $numTeste = 0;// valor é mantido entre chamadas de funções (static) ou seja 1 2 3 ao inves de  1 1 1
    $numTeste++;
    echo "<br>", $numTeste;
}

testeNum();
testeNum();
testeNum();
