<?php
session_start();

if (isset($_SESSION["myId"]) && $_SESSION["myId"] !== session_id()) {
    header("Location: ./connexion.php");
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
    <h1><?= isset($_SESSION["myId"]) ? "Bienvenue " . $_SESSION['login'] : "Accueil"; ?>
        <?php
        if (isset($_SESSION["myId"])) {
            switch ($_SESSION["right"]) {
                case 0:
                    echo "| Administrateur";
                    break;
                case 1:
                    echo "| Modérateur";
                    break;
                default:
                    echo "| Utilisateur";
            }
        }
        ?></h1>
    <h2>Permission</h2>
    <h3>Admin</h3>
    <ul>
        <li>Accueil</li>
        <li>Admin</li>
        <li>Modo</li>
        <li>Rédacteur</li>
        <li>Tous</li>
        <li>Déconnexion</li>
    </ul>
    <h3>Modo</h3>
    <ul>
        <li>Accueil</li>
        <li>Modo</li>
        <li>Rédacteur</li>
        <li>Tous</li>
        <li>Déconnexion</li>
    </ul>
    <h3>Rédacteur</h3>
    <ul>
        <li>Accueil</li>
        <li>Rédacteur</li>
        <li>Tous</li>
        <li>Déconnexion</li>
    </ul>
    <h3>Tous</h3>
    <ul>
        <li>Accueil</li>
        <li>Tous</li>
        <li>Connexion</li>
    </ul>
</body>

</html>