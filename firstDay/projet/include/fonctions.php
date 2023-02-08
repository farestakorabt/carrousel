<?php

function lien($lien, $titre)
{
    $actif = "";


    $lienTemp = "/firstDay/projet/$lien";

    if($lienTemp === $_SERVER["REQUEST_URI"])
    {
        $actif = "actif";
    } 

    return "<a class='$actif' href='$lien'>$titre</a>";
}




?>