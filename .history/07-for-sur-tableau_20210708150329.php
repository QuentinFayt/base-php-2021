<?php

$string = "bonjour les amis";

$nbString = strlen($string);

for($i=0; $i<$nbString;$i++){
    if($string[$i]===" "){
        echo "<br/>";
    }
    else{
        echo "<p>$string[$i]</p>";
    }
}