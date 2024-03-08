<?php
$frase = "O rato roeu a roupa do rei de romaaaa";//4
$contador = 0;
for($i = 0; $i  < strlen($frase); $i++) {
    if($frase[$i] === 'a'){
        $contador++;
    }
}

echo "<br>número de letra A na frase = $contador";