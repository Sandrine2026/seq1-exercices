
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

?>