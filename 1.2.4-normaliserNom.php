<?php

// Exercice 1.2.4 — Manipulation de chaînes

function normaliserNom($nom)
{
    return strtoupper(trim($nom));
}
$nom = " koffi mensah ";

echo normaliserNom($nom);

?>