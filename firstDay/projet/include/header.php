<?php
    require_once "../include/fonctions.php";   

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
        <?php

        $message = "";

        if(isset($title))
        {
            echo $title;
        } else {
            $message = "Bienvenue !";
        }
        ?>


        <style>
            a {
                color: chocolate;
                text-decoration: none;
            }
            .active {
                color: greenyellow;
            }
        </style>

    </title>

</head>
<body>

    <nav>
        <? lien('index.php', 'Acceuil') ?>
        <? lien('contact.php', 'Contact') ?>
    </nav>