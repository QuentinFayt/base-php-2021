<?php

$monTableau = [
    "Bonjour,",
    " ça va",
        [
          "comment",
          "?",
        ]
];

echo $monTableau[0].$monTableau[2][0].$monTableau[1].$monTableau[2][1];