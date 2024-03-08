<?php
$str = " <br>string minuscula";
echo strtoupper($str); // VIRA MAIUSCULA

$str1 = " <br>STRING MAIUSCULA";
echo strtolower($str); // VIRA MINUSCULA

$str3 = "titulo";
echo "<br> ",ucfirst($str3); // primeira letra vira maiuscula


$str4 = "matheus amsdfasd asdfasd sdafasd";
echo "<br>", ucwords($str4); //todas palavras ficam com a 1 letra maiuscula

