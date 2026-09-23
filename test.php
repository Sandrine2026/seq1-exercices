<?php

require "utils.php";

// Test de estPair()
$nombre = 8;

if (estPair($nombre)) {
    echo $nombre . " est pair.<br>";
} else {
    echo $nombre . " est impair.<br>";
}

// Test de moyenneTableau()
$notes = [12, 15, 9, 18, 11];

$moyenne = moyenneTableau($notes);

echo "La moyenne est : " . $moyenne;

?>