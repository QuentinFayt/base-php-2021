<?php

$heure = date("H:i:s");

echo "<h1>Il est $heure et tout va bien</h1>";
echo '<h1>Il est $heure et tout va bien</h1>';
echo '<h1>Il est '.$heure.' et tout va bien</h1>';
echo '<h1>Il est ',$heure,' et tout va bien</h1>';
?>

<h2><?=$heure //echo en abrégé?></h2>
<? $heure ?>