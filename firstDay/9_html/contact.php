<?php

$title = "Page de contact";

require_once "header.php";

var_dump($_POST);


if(isset($_POST['nom']))
{
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    
    echo  "<h1>Bonjour $nom $prenom</h1> <br>";
    echo  "<p>Votre mail est : $mail</p>";
}


?>


<h1>Contact</h1>

 <!-- post =>informations sensibles  --> 
 <!-- get => utiliser l'url  -->

  <!-- action sur quelle page il va, vide ça sera sur la meme page -->
   <!-- id est recommandé si on utilise <label> -->

<form action="" method="post"> 

    <div>
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom" placeholder="Ex: Cindy" require>

    </div>

    <div>
        <label for="prenom">Votre prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Ex: " require>
        
    </div>

    <label for="mail">Votre mail</label>
    <input type="email" name="mail" id="mail">
    
    <input type="submit" value="Enoyer">    
    
</form>

<h2>Tous les mails récupérés : </h2>




<?php

// var_dump($_SERVER);




require_once "footer.php";