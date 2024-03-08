<?php
$array = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15]
];

for($i = 0; $i < count($array); $i++){
    echo "<br> array na  " . $i . ": " . $array;
    for($j = 0; $j < count($array[$i]); $j++){
        echo "<br>" . $array[$i][$j];
    }
}