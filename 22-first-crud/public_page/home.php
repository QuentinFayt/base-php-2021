<?php
$sqlFetch = "SELECT a.idthearticle, a.thearticletitle, SUBSTR(a.thearticletext,1,250) AS thearticletext, a.thearticledate,
u.idtheuser, u.theuserlogin
FROM thearticle a
INNER JOIN  theuser u 
ON u.idtheuser = a.theuser_idtheuser
ORDER BY a.thearticledate DESC;";

$fetch = mysqli_query($db, $sqlFetch) or die('<h1 style="color:red; display:block; width:90%; margin:0 auto; text-align:center; line-height:90vh">Erreur lors de la requête : ' . mysqli_error($db));

$nbArticle = mysqli_num_rows($fetch);

if (empty($nbArticle)) {
    $empty = "Il n'y a pas encore d'articles";
} else {
    $result = mysqli_fetch_all($fetch, MYSQLI_ASSOC);
    /*var_dump($result);*/
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | Home</title>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <h1>First CRUD | Home</h1>
    <?php
    if (isset($empty)) {
    ?>
        <h3><?= $empty ?></h3>
    <?php
    } else {
        $wordPlural = $nbArticle === 1 ? "" : "s";
    ?>
        <h3>Il y a <?= $nbArticle ?> article<?= $wordPlural ?></h3>
    <?php
    }
    foreach ($result as $value) {
    ?>
        <hr>
        <h4><?= $value["thearticletitle"] ?></h4>
        <p><?= cuteTheText($value["thearticletext"], NEWS_HOME_LENGTH) ?> <a href="?page=article&id=<?= $value["idthearticle"] ?>">Lire la suite</a></p>
        <h5>Écrit par <a href="?page=user&id=<?= $value["idtheuser"] ?>"><?= $value["theuserlogin"] ?></a> le <?= frenchDate($value["thearticledate"]) ?></h5>
    <?php
    }
    ?>
</body>

</html>