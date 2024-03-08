<?php
$x = 10;
$y = 32;
$a = 4;

//operador and ( os dois lados precisam ser verdadeiros para ser TRUE )
if($x > $a && $x > $y){
    echo "this sentence is true <br>";
} else {
    echo "this sentense is false <br>";
}

//operador or ( apenas um lado precisa ser verdadeiro para TRUE )
if($x > $a || $x > $y){
    echo "this sentence is true <br>";
} else {
    echo "this sentense is false <br>";
}

//operador not ( retorna TRUE quando não é verdadeira )
if(!(5>2)){ // oque esse IF diz: > 5 não é maior que dois <
    echo "this is true";
} else {
    echo "this is false";
}