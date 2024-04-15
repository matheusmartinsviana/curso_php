<?php

$array = [1 ,2 ,3 ,4 ,5 ,6 ,7];

// splice
$removidos = array_splice($array, 1, 5);

print_r($array);
echo '<br>';
print_r($removidos);
