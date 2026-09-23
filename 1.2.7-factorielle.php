<?php
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