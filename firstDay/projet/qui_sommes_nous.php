<?php

    $title = "Page qui sommes nous";

    require_once "../projet/include/header.php";


//     var_dump($_POST);
//     var_dump($_FILES);

//     if(isset($_POST['mail']))
//     {
//         $mail = $_POST['mail'];
//         $txt = "mails.txt";
//         $mail .= ',';
//         file_put_contents($txt, $mail, FILE_APPEND);      
//     } else {
//         echo 'mail déja existant !';
//     }

//    $tableauMail = file_get_contents("mails.txt", true); 

//    $tableauMailSansVirgule = explode(',', $tableauMail);

// correction

$success = null;
$error = null;
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'mails'. DIRECTORY_SEPARATOR . "mails.txt";
$mails_recus = explode(",", file_get_contents($fichier));

if(isset($_POST['mail']))
{
    $mail = $_POST['mail'];
    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        if(!in_array($mail, $mails_recus))
        {
            $success = "Votre mail est bien enregistré !";
            $mail .= ",";
            file_put_contents($fichier, $mail, FILE_APPEND);
            $mails_recus = explode(",", file_get_contents($fichier));

        } else {
            $error = "Mail déjà existant !";
        }
    }
}
   
?>






    <div class="landingPageTitleFirstDiv">
        <h1 class="quiSommesNousTitre">Qui sommes-nous ?</h1>


        <img src="../projet/images/carae-nantes-bibliotheque.jpg" alt="bibliothèque" class="image1">

        <p>
            Bienvenue dans ma bibliothèque est une chronique qui vous fait découvrir des romans français ou étrangers ainsi 
            que des recueils de nouvelles récents. Et de temps en temps, un roman graphique. La chronique est diffusée le lundi à 8h45,
             le mercredi à 11h45 et le jeudi à 16h45. Vous pouvez également la retrouver en podcast.
        </p>


    </div>

    <div class="landingPageTitleFirstDiv">
        <p class="landingPageSecondTitle">
            Les livres peuvent être lus sous forme numérique
        <p>


        <img src="../projet/images/books-gf833d4f8c_1920.jpg" alt="bibliotheque_nantes" class="image2">

        <p>
         Les livres peuvent être lus sous forme numérique grâce à des dispositifs techniques adaptés aux besoins des personnes handicapées : lecteur audio portable, appareils braille ou équipés de synthèse de parole, systèmes informatiques permettant un affichage en gros caractères, etc.
        </p>
    </div>

    <h1><?= $error ?></h1>
    <h1><?= $success ?></h1>

    <div class="divMailRecup">
        <p>Nous contactez ?</p>
        <form action="" method="POST" class="formMailRecup">     
    
            <label for="mail">Votre mail</label>
            <input type="email" name="mail" id="mail">
            
            <input type="submit" value="S'inscrire" id="buttonMailRecup">    
            
        </form>
    </div>


<section>
    <ul class="ulMailRecup">
        <?php 
           foreach($mails_recus as $mails_recu)
           {
               if($mails_recu != "")
               {
                   echo "<li> - $mails_recu</li>";
               }
           }
        ?>
    </ul>
</section>




<hr>
<?php


    require_once "./include/footer.php";

?>


