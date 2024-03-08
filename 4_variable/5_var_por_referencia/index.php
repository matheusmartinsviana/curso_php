<?php

$x = 10;
$y = & $x;
echo "<br>",$y;
$y = 50;
echo "<br>", $x;