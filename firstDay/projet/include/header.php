<?php

include_once "fonctions.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
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
            font-weight: bolder;
        }
    </style>
</head>
<body>

    <nav class="navigationBar">
        <?= lien('index.php', 'Accueil') ?>
        <?= lien('qui_sommes_nous.php', 'Qui sommes nous') ?>
        <?= lien('contact.php', 'Contact') ?>
        <?= lien('bibliotheque.php', 'Bibliotheque') ?>
    </nav>

    <div class="divGenerale">