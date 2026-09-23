<?php

//Exercice 1.2.3 — Portée des variables

$nom = "Sandrine";
function afficherNom()
{
    $prenom = "Ninovige";

    echo "À l'intérieur de la fonction : " . $prenom . "<br>";

    // Pour accéder à la variable globale, on utilise global
    global $nom;

    echo "Variable globale dans la fonction : " . $nom . "<br>";
}

afficherNom();

echo "À l'extérieur de la fonction : " . $nom . "<br>";

?>