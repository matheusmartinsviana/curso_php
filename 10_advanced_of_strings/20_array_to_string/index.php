<?php
//exercicio = usar implode para formar a frase apartir do array
$arr = ["O", "PHP", "é", "muito", "legal"];

$str = implode(" ",$arr); // 1 paremêtro é o SEPARADOR  || segundo é o ARRAY
//implode faz ARRAY virar STRING
echo $str;