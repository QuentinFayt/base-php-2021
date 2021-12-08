<?php
session_start();

echo "<h3>ID de la session:</h3></br><p>" . session_id() . "</p>";

$_SESSION["monIdDeSession"] = session_id();


var_dump($_SESSION);

echo '<a href="02-session.php">Page 2</a>';
