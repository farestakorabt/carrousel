<?php

$link = mysqli_connect("localhost", "root", "");

function conntect_bdd($link, $bdd) {
    if(mysqli_connect_errno())
    {
        echo "Echec de la connexion : ", mysqli_connect_error();
        exit();
    }
    echo "Connexion réussie";
    mysqli_select_db($link, $bdd);
}

conntect_bdd($link, "test");


mysqli_select_db($link, "test");

$nom = "toto";
$prenom = "coucou";
$email = "toto@gmail.fr";

$requete = "INSERT INTO `user` (`id`, `nom`, `prenom`, `email`) VALUES (NULL, '$nom', '$prenom', '$email')";


function request_bdd($link, $requete)
{
    if(mysqli_query($link, $requete)) {
        echo "Requette bien exécutée";
        return mysqli_query($link, $requete);
    } else {
        echo "Erreur sur la requette";
    }
}
request_bdd($link, $requete);


