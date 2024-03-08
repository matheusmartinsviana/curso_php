<?php

$str = "Matheus Martins Viana";

$search = strpos($str, "i");//mostra o INDICE do primeiro APARECIMENTO da letra desejada

echo $search;

if($search === false){
echo "word indifined";
}


echo "<br><br>";


//-------------// strrpos
$str1 = "Matheus Martins Viana";

$search1 = strrpos($str1, "i");//mostra o INDICE do ultimo APARECIMENTO da letra desejada

echo $search1;

if($search1 === false){
echo "word indifined";
}

$p = substr($str ,strpos($str, "Viana"), 5);// STRING | INDICE DE INICIO | INDICE DE FIM

echo $p;
echo "<br>";

//--- strstr

$teste = "Teste da string";
echo strstr($teste, "da"); // função strstr mostra tudo depois de encontrar "da"
