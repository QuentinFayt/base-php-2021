<?php

$x = 1;
$y = 2;
while ($x !== $y) {
    $x = mt_rand(-10, 10);
    $y = mt_rand(-10, 10);
    if ($x === $y) {
        echo "$x et $y sont égale!</br>";
    } else {
        echo "$x et $y ne sont pas égale!</br>";
    }
}
