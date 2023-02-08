<?php

    function lien($lien, $titre)
    {
        $cheminTemp = "firstDay/projet/$lien";
        $actif = "";
        
        if($cheminTemp === $_SERVER["REQUEST_URI"])
        {
            $actif = "actif";
        }
    return "<a class='$actif' href='$cheminTemp'>$titre</a>";
    }



?>