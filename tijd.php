<?php
$input = $argv[1];
$findme = "s";
$pos = strpos($argv[1], $findme);

if ($pos === false) {
    echo "Geen tijd gevonden";
} else {    
    echo (int)$argv[1];
    echo " seconden";
}

?>
