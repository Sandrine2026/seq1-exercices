<?php

//Exercice 1.2.2 — Paramètre par défaut

function calculerPrixTTC($prixHT, $tauxTVA = 0.18)
{
    return $prixHT + ($prixHT * $tauxTVA);
}

$prix1 = calculerPrixTTC(10000);
echo "Prix TTC avec 18% de TVA : " . $prix1 . " FCFA<br>";

$prix2 = calculerPrixTTC(10000, 0.20);
echo "Prix TTC avec 20% de TVA : " . $prix2 . " FCFA";

?>