<?php

// 1. parfum: chocolat 6€, vanille 5€, fraise 6€: un seul
// 2. conteneur: pot 1€ ou cornet 2€, jamais les deux
// 2. supplement: pepite de choco 2€ et nappage 1€, peut choisir les 2

// recuperer les choix de l'utilisateur et lui affciher le tarif total

$message = "";

var_dump($_GET);

// if(isset($_GET['parfum']))
// {

//     if($_GET['parfum'] === 'chocolat')
//     {
//         $parfumPrix = 5;
//     } else {
//         $parfumPrix = 6;
//     }

//     $parfum     = $_GET['parfum'];
//     $conteneur  = $_GET['conteneur'];
//     $supplement = $_GET['supplement'];

//     $supplementPrix = array_sum($supplement);

//     $total = $parfumPrix + $conteneur + $supplementPrix;
    
//     echo $message = "<h3>Vous avez choisi une glace au parfum $parfumPrix dans un conteneur 
//     $conteneur avec un supplémenet $supplement qui vous coute $total €<h3>";

//     // echo $total;   
// }

if(isset($_GET['parfum']))
{
    $parfum = $_GET['parfum'];
        if($_GET['parfum'] === 'chocolat')
    {
        $parfumPrix = 5;
    } else {
        $parfumPrix = 6;
    }
    $total = $parfumPrix + $_GET['conteneur'];
    if(isset($_GET['add']))
    {
        $total += array_sum($_GET['add']);
    }
    echo  "Pour le $parfum $total";
}






?>

<h3>Choisir votre glace</h3>
<form action="" method="get">

    <select name="parfum" id="parfum">
        <option value="chocolat">Chocolat 5€</option>
        <option value="vanille">Vanille 6€</option>
    </select>

    <fieldset>

    <legend>Choix du conteneur</legend>
        <div>
            <input type="radio" id="pot" name="conteneur" value="1">Pot 1€
            <input type="radio" id="cornet" name="conteneur" value="2">Cornet 2€
        </div>
    </fieldset>

    <label for="supplement">Choix du suplément</label>
    <select name="supplement[]" id="supplement" multiple>
        <option value="2" name="add[]">Pépites de chocolat 2€</option>
        <option value="1" name="add[]">Nappage 1€</option>
    </select>

    <input type="submit" value="Envoyer">

    

</form>

