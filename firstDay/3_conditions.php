<?php

    // les operateurs logiques

    // ET => &&

    // OU => ||

    // $note = (int)readline('Entrez une note :'); // readline => terminal, like prompt for navigator

    // echo $note;

    // if($note > 10) 
    // {
    //     echo "Bravo ! tu as la moyenne" . '<br>';
    // }  elseif($note === 10) {
    //     echo "Oh là ! tu as eu chaud !";
    // } else {
    //     echo "Dommage tu n'as pas la moyenne !";
    // }


    // switch case

    // $choix = readline("Choisir 1, 2 ou 3\n");

    // switch($choix)
    // {
    //     case 1 :
    //         echo "Tu as choisi numero 1\n";
    //         break;
    // case 2:
    //     echo "Tu as choisi numero 2\n";
    //     break;
    // case 3:
    //     echo "Tu as choisi numero 3\n";
    //     break;
    // default;
    //     echo "Aucun des 3 choix";

    // }


    // exercice 

    // demander l'heure à l'user, si l'heure est comprise entre 9h et 12h et 14h et 18, afficher le magasin est ouvert, sinon le magasin est fermé

    $heure = readline('Entrez une heure');

    if(($heure >= 9) && ($heure <= 12))
    {
        echo 'Le magasin est ouvert';

    } elseif(($heure > 12) && ($heure < 14)) 
    {
        echo 'Le magasin est fermé';

    } else {
        echo "Le magasin est fermé";
    }

    if(($heure <= 9 && $heure <= 12) || ($heure <= 14 && $heure <= 18)) 
    {
        echo 'Le magasin est ouvert';
    } else {
        echo 'Le magasin est fermé !!!!';
    }












