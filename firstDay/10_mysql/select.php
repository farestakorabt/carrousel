<?php

include_once "ajout.php";

$link = mysqli_connect("localhost", "root", "");

conntect_bdd($link, "test");

$req = "SELECT * FROM user";

$reponse = request_bdd($link, $req);

$tableau = mysqli_fetch_all($reponse, MYSQLI_ASSOC);

// var_dump($tableau);

function getHtml($nom, $prenom, $email) {
    return <<<HTML
    <div>
        <h2>$nom $prenom</h2>
        <h3>$email</h3>
    </div>

HTML;
}

foreach($tableau as $tab)
{
    $nom = $tab['nom'];
    $prenom = $tab['prenom'];
    $email = $tab['email'];

    echo getHtml($nom, $prenom, $email);
}






?>