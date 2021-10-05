<?php

require_once("./config.php");

$db = @mysqli_connect(MDB_HOST,MDB_USER,MDB_PWD,MDB_NAME,MDB_PORT);

if(!$db){

    die('<h1 style="color:red; display:block; width:90%; margin:0 auto; text-align:center; line-height:90vh">Erreur de connexion: '.mysqli_connect_error()."</h1>");
}