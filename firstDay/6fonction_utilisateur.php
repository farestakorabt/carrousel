<?php


$nom = 'Guillaume';


    function bonjour($nom, $prenom) {
        return "Bonjour $nom $prenom";

    // echo "Coucou"; will not be read => after return
    }

bonjour($nom, "Takorabt");

$phrase = bonjour($nom, "Takorabt");

var_dump($phrase);
