<?php

do {
    $x = mt_rand(-10, 10);
    $y = mt_rand(-10, 10);
    if ($x === $y) {
        echo "$x et $y sont égale!</br>";
    } else {
        echo "$x et $y ne sont pas égale car";
        echo $x < $y ? ' $x est plus petit que $y!</br>' : ' $x est plus grand que $y!</br>';
    }
} while ($x !== $y);
