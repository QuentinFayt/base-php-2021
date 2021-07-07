<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les array</title>
</head>
<body>
    <h1>Les tableaux ou array</h1>
    <h2>Premier type</h2>
    <?php
        $eleves = array(
            "Aurélie",
            "Bilel",
            "Cahit",
            "Christian",
        );

        var_dump($eleves);

        echo $eleves[0];

        echo "<p> Pour compter le nombre d'élément d'un tableau on utilise count()</p>";

        $nbEleve = count($eleves);

        echo "Il y a ".$nbEleve.' dans le tableau $eleves';
        
    ?>
    <h2>Deuxième type</h2>
    <?php
        $eleves2 = [
            "Aurélie",
            "Bilel",
            "Cahit",
            "Christian",
                [
                    "un",
                    "deux",
                    "trois",
                ]
        ];
        echo "<pre>";
        print_r($eleves2);
        echo "</pre>";
        echo $eleves2[4][0];
    ?>
</body>
</html>