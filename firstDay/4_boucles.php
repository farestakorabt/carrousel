<?php

    // tant que => while

    // $chiffre = null;


    // while($chiffre !== 10)
    // {
    //     $chiffre = (int)readline('Entrez un chiffre :');
    // }

    // echo "Bravi vous avez gagné !";

    // pour - for

    // for($i = 0; $i < 10; $i++)
    // {
    //     echo " - $i \n";    
    // }

    // four chaque => boucle de tableau => foreach

// $notes = [15,341,89,1,54,36];

// foreach($notes as $note){
//     echo " - $note \n";
// }

// foreach sur un tableau indexé

$eleves = [
    'cm2' => 'jean',
    'cm1' => 'marc',
    'cm3' => 'cindy',
];

foreach($eleves as $classe => $eleve)
{
    // echo "$eleve est dans la classe $classe \n";
}


$eleves2 = [
    'cm1' => ['jean', 'helene', 'antonio'],
    'cm2' => ['marc', 'stegen', 'milla'], 
    'cm3' => ['morgan', 'didi', 'dianou'], 
];

// v1 
// foreach($eleves2 as $classe => $eleve)
// {    
//     foreach($eleve as $key => $value)
//     {
//         echo "Dans la $classe il y a - " .  $value . "\n" ;

//     }
// }

// v2
// foreach($eleves2 as $classe => $list_eleves)
// {
//     echo "Dans la classe il y a - " .  $classe . "\n" ;    

//     foreach($list_eleves as $eleve)
//     {
//         echo "-$eleve \n" ;

//     }
// }

// demander à l'utilisateur de rentrer une note ou de taper 'fin'
//  chaque note sera sauvegardée dans un tableau $notes
//  quand l'utilisateur tape 'fin', on affiche toutes les notes

//  ajouter une note => $notes[] = 15 ..


// $note = [];
// $saisie = "";

// while($saisie != 'fin')
// {
//     $saisie = readline('Entrez une note ou tappez le mot fin');

//     // echo $saisie;

//     if($saisie != 'fin \n')
//     {
//         $note[] = $saisie;
//     }     
// }

// foreach($note as $key)
// {
//     echo $key;
// }


// on veut demander à un restaurateur de rentrer les horaires 'ouvetures de son restaurant.
// il veut pourvoir entrer de 11h 15h et de 19h à 22h.
// on demande à l'utilisateur de rentrer une heure et on lui dire si le restaurant est ouvert.

// $creaneau = "";
// $demandes_restaurateur = [];



// while($demandes_restaurateur != 'Non')
// {
//     $demandes_restaurateur == readline("saisir un creaneau d'ouverture : \n");
    
//     if($demandes_restaurateur >= 11 && $demandes_restaurateur <= 19 || $demandes_restaurateur >= 19 && $demandes_restaurateur <= 22)
//     {
//         echo "Creneau ouvert \n";
//     } else {
//         echo "Creneau fermé \n";       
//     }        

//     foreach($demandes_restaurateur as $key)
//     {
//         echo "";
//     }
// }

// -------------------------------
// correction 

// on veut demander à un restaurateur de rentrer les horaires 'ouvetures de son restaurant.
// il veut pourvoir entrer de 11h 15h et de 19h à 22h.
// on demande à l'utilisateur de rentrer une heure et on lui dire si le restaurant est ouvert.


while(true)
{
    $debut = (int) readline("Heure d'ouverture");
    $fin   = (int) readline("Heure de fermeture");

    if($debut < $fin) 
    {
        $creneaux[] = [
            'debut' => $debut,
            'fin'   => $fin,
        ];

        $action = readline('Saisir un autre créneau ?');

        if($action === 'n')
        {
            break;
        }
        
    } else {
        echo "Creaneau invalide !";
    }
}

$heure = readline("A quelle heure souhaitez-vous venir au restaurant ?");

// $creneaux = [12, 14];

// if($heure >= 12 && $heure <= 14)
// {
//     echo "Le restaurant est ouvert";
// } else {
//     echo "Le restaurant est fermé";
// }

$creaneauValid = false;

foreach($creneaux as $creaneau){
    if($heure >= $creaneau['debut'] && $heure <= $creaneau['fin']) {
        $creaneauValid = true;
        break;
    }
}

if($creaneauValid === true) {
    echo 'resto ouvert';
    
}else {
    echo 'resto fermé';
}

