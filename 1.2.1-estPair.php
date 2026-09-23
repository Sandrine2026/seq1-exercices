<?php

Exercice 1.2.1 — Fonction simple
function estPair($nombre)
{
    return $nombre % 2 == 0;
}
// Tests
var_dump(estPair(4));
var_dump(estPair(7));
var_dump(estPair(10));
var_dump(estPair(13));

?>