<?php

do {
    $x = mt_rand(-10, 10);
    $y = mt_rand(-10, 10);
    if ($x === $y) {
        echo "$x et $y sont égale!</br>";
    } else {
        echo "$x et $y ne sont pas égale car";
        echo $x < $y ? ' $x est plus petit que $y! ' : ' $x est plus grand que $y! ';
        if (0 < $x && 0 < $y) {
            echo "Les deux sont positif!";
        } elseif (0 < $x || 0 < $y) {
            echo "Un seul est positif!";
        }
        if (0 < $x ^ 0 < $y) {
            echo " Test du XoR: l'un des deux positif mais pas les deux en même temps!";
        }
        echo "</br>";
    }
} while ($x !== $y);
