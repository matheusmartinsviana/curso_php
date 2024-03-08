<?php
//estar dentro da variavel não afeta no resultado
echo "Temos a expressão: (2 + 2 * 6 / 6) <br><br>";
echo "2 x 6 = 12 (2 + 12 / 6) <br><br>";
echo "12 / 6 = 2 (2 + 2) <br><br>";
echo "2 + 2 = 4 <br><br>";

echo "> " . 2 + 2 * 6 / 6 . " <";

//encapsulamento de variável
$a = 4;
$y = 8;
$x = 3;
$num1 = $x + $y * $a;
echo "<br>" . $num1;