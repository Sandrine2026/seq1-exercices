<?php
// Exercice 1.2.5 — Fonction sur un tableau

function moyenneTableau($notes)
{
    $somme = array_sum($notes);
    $nombreNotes = count($notes);

    return $somme / $nombreNotes;
}

$notes = [12, 15, 9, 18, 11];

$moyenne = moyenneTableau($notes);

echo "La moyenne est : " . $moyenne;
?>