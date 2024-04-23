<?php
$array = ["batata", "pera", "maça", "feijão", "arroz"];
$removidos = [];

foreach ($array as $key => $value) {
    if($value === "pera" || $value === "feijão") {
        $removidos = array_splice($array, $key, 1);
    }
}

print_r($array);
echo '<br>';
print_r($removidos);
