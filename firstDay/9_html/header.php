<?php

function lien($lien, $titre)
{
    $actif = "";

    $lienTemp = "/firstDay/9_html/$lien";
    // var_dump($_SERVER["REQUEST_URI"]);

    if($lienTemp === $_SERVER["REQUEST_URI"])
    {
        $actif = "actif";
    } 

    return "<a href='$lien' class='$actif'>$titre</a>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        if(isset($title)) {
            echo $title;
        } else {
            echo 'Bienvenue';
        }
       ?> 
    </title>  
    <style> 
        a {
            color: black;
            text-decoration: none;
        }
        .actif {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>

        <?= lien('index.php', 'Accueil') ?>
        <?= lien('contact.php', 'Contact') ?>
        <?= lien('market.php', 'Market') ?>

    </nav>