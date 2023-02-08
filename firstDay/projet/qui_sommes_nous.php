<?php
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






<div>
        <h1 class="titre">Bienvenue sur notre bibliothèque CBU</h1>


        <img src="../projet/images/biblio1.jpg" alt="bibliothèque" class="image1">

        <p>
            Bienvenue dans ma bibliothèque est une chronique qui vous fait découvrir des romans français ou étrangers ainsi 
            que des recueils de nouvelles récents. Et de temps en temps, un roman graphique. La chronique est diffusée le lundi à 8h45,
             le mercredi à 11h45 et le jeudi à 16h45. Vous pouvez également la retrouver en podcast.
        </p>


    </div>

<div>
        <h2 class="titre">
            Lorem ipsum dolor sit amet consectetur
        <h2>


        <img src="../projet/images/biblio3.jpg" alt="bibliotheque_nantes" class="image2">

        <p>
            Bienvenue dans ma bibliothèque est une chronique.
        </p>
    </div>

    <h1><?= $error ?></h1>
    <h1><?= $success ?></h1>

    <form action="" method="POST"> 

   

    <label for="mail">Votre mail</label>
    <input type="email" name="mail" id="mail">
    
    <input type="submit" value="S'inscrire">    
    
</form>

<section>
    <ul>
        <?php 
           foreach($mails_recus as $mails_recu)
           {
               if($mails_recu != "")
               {
                   echo "<li>$mails_recu</li>";
               }
           }
        ?>
    </ul>
</section>




<hr>
<?php


    require_once "./include/footer.php";

?>


