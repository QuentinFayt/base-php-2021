<?php

$x = 1;
$y = 2;
while ($x !== $y) {
    $x = mt_rand(1, 5);
    $y = mt_rand(1, 5);
    if ($x === $y) {
        echo $x . $y . "C'est égale!</br>";
    } else {
        echo $x . $y . "C'est pas égale!</br>";
    }
}
