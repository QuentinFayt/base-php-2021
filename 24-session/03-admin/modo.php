<?php
session_start();

if (!isset($_SESSION["myId"]) || $_SESSION["myId"] !== session_id() || ($_SESSION["right"] != 0 && $_SESSION["right"] != 1)) {
    header("Location: ./");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <ul>
        <li><a href="./">Accueil </a></li>
        <li><a href="admin.php">Admin </a></li>
        <li><a href="modo.php">Modo </a></li>
        <li><a href="redac.php">Rédacteur </a></li>
        <li><a href="tous.php">Tous </a></li>
        <?php
        if (!isset($_SESSION["myId"])) {
        ?>
            <li><a href="connexion.php">Connexion </a></li>
        <?php
        } else {
        ?>
            <li><a href="déconnexion.php">Déconnexion </a></li>
        <?php
        }
        ?>
    </ul>
    <h1>Modo</h1>
</body>

</html>