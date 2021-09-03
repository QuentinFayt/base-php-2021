<?php

$x = 1;
$y = 2;
while ($x !== $y) {
    $x = mt_rand(1, 5);
    $y = mt_rand(1, 5);
    if ($x === $y) {
        echo "C'est égale!\n";
    } else {
        echo "C'est pas égale!\n";
    }
}
