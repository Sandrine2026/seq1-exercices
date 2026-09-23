
<?php

function estPair($nombre)
{
    return $nombre % 2 == 0;
}

function moyenneTableau($notes)
{
    $somme = array_sum($notes);
    $nombreNotes = count($notes);

    return $somme / $nombreNotes;
}

// Exercice 1.2.7 — Bonus : fonction récursive

function factorielle($n)
{
    // Cas de base
    if ($n == 0) {
        return 1;
    }

    // Appel récursif
    return $n * factorielle($n - 1);
}

echo "5! = " . factorielle(5);


?>