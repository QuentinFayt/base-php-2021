<?php

if (isset($_GET["id"]) && ctype_digit(($_GET["id"])) && !empty(($_GET["id"]))) {
} else {
    header("Location:./");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First CRUD | Article |
        <!-- Titre de l'article -->
    </title>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <h1>First CRUD | Article |
        <!-- Titre de l'article -->
    </h1>

</body>

</html>