<?php

require_once("./config.php");

$db = @mysqli_connect(MDB_HOST, MDB_USER, MDB_PWD, MDB_NAME, MDB_PORT);

if (!$db) {

    die('<h1 style="color:red; display:block; width:90%; margin:0 auto; text-align:center; line-height:90vh">Erreur de connexion: ' . utf8_encode(mysqli_connect_error()) . "</h1>");
}

mysqli_set_charset($db, MDB_CHARSET);

if (isset($_GET['page'])) {
    if (in_array($_GET["page"], PUBLIC_PAGES)) {
        include "public_page/" . $_GET["page"] . ".php";
    } else {
        header("Location:https://http.cat/404");
        exit;
    }
} else {
    include "public_page/home.php";
}


mysqli_close($db);
