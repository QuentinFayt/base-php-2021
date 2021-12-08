<?php
session_start();
$login = ["admin", "modo", "redac"];
$pwd = ["admin", "modo", "redac"];
$perm = [0, 1, 2];
if (isset($_POST["login"]) && isset($_POST["password"]) && $_POST["login"] && $_POST["password"]) {
    if (in_array($_POST["login"], $login) && $pwd[array_search($_POST["login"], $login) !== false ? array_search($_POST["login"], $login) : die()] === $_POST["password"]) {
        $_SESSION["myId"] = session_id();
        $_SESSION["login"] = $_POST["login"];
        $_SESSION["right"] = $perm[array_search($_POST["login"], $perm)];
        header("Location: ./");
    }
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
    <h1>Connexion</h1>
    <form method="post" action="">
        <input type="text" name="login" placeholder="login" /><br />
        <input type="password" name="password" placeholder="password" /><br />
        <input type="submit" />
    </form>
</body>

</html>