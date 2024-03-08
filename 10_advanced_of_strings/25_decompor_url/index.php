<?php
$url = "https://wwww.google.com";
$arrayUrl = parse_url($url);

print_r($arrayUrl);

$url2 = "https://www.horadecodar.com.br/?php";
$arrayUrl2 = parse_url($url2);
echo "<br>";
print_r($arrayUrl2);

$url2 = "https://www.horadecodar.com.br/usuarios/matheusviana?id=12";
$arrayUrl2 = parse_url($url2);
echo "<br>";
print_r($arrayUrl2);

/*
Array ( [scheme] => https [host] => wwww.google.com )
Array ( [scheme] => https [host] => www.horadecodar.com.br [path] => / [query] => php )
Array ( [scheme] => https [host] => www.horadecodar.com.br [path] => /usuarios/matheusviana [query] => id=12 )
*/