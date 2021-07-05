<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les booléens:</h2>
    <?php

    $bin1=true;
    $bin2=false;

    /*On pourrait utiliser print_r() pour afficher le contenu de ces deux variables, mais
    une variable false ne s'affichera pas (afficherait 1 pour true)*/
    var_dump($bin1,$bin2);

    
    ?>    
    <h2>Les entiers:</h2>
    <?php

    $int1=1;
    $int2=-50;
    $int3=0;

    var_dump($int1,$int2,$int3);

    $calcule = $int2 * $bin1;

    echo $calcule;
    ?>
</body>
</html>