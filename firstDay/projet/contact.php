<?php

    require_once "../projet/include/header.php";

    var_dump($_FILES);


    // if(isset($_FILES['fichier']))
    // {
    //     $fichier = $_FILES['fichier']['name'];
    //     $tmp     = $_FILES['fichier']['tmp_name'];
        
    //     $message = "";
        
    //     if(pathinfo($fichier, PATHINFO_EXTENSION) === "jpg" || pathinfo($fichier, PATHINFO_EXTENSION) === "pdf")
    //     {
    //         move_uploaded_file("$tmp", "fichiers/$fichier"); 
    //         $message = "<p style='color: green'>Votre fichier a bien été enragistré</p>";
    //     } else {            
    //         $message = "<p style='color: red'>Format de fichier incorrect</p>";
    //     }        
        
    // }
    

    $erreur = null;  
    $succes = null; 
    $image = null; 
    
    
    if(isset($_FILES['fichier']) && $_FILES['fichier']['error'] === 0) {
        $fichier = $_FILES['fichier']['name'];
        $tmp     = $_FILES['fichier']['tmp_name'];

    $extension = strtolower(pathinfo($fichier, PATHINFO_EXTENSION));
    $valide = array('jpg', 'pdf');

    if(in_array($extension, $valide))
    {
        if(move_uploaded_file("$tmp", "fichiers/$fichier"))
        {
            $succes = "Transfert réussie";

            if($extension === 'jpg')
            {
                $image = "<img src='fichiers/$fichier'>";                
            }
            if($extension === 'pdf')
            {
                $image = "<embed src='fichiers/$fichier'>";                
            }
        }
      }      else {
        $erreur = "Echec lors de l'envoi";  
     } 

    }


?>

<img src="../projet/images/biblio4.jpg"  alt="bibliothèque" class="image3">


<h2>Contactez nous</h2>

Ecris nous sur: <a href="mailto:farestakorabt@gmail.com" class="contactMail">bibliotheque@paris.fr</a>


<h2 class="succes"><?= $succes ?></h2>
 
<h2 class='image12'><?= $image ?></h2>


<form action="" method="POST" enctype="multipart/form-data" accept=".jpg, .pdf"> 
    
    
    <input id="fichier" type="file" name="fichier">
    
    <input id="envoyer" type="submit" value="Enoyer"> 
    
    <h2><?= $erreur ?></h2>
    
    
</form>
















<?php 


// require_once "./include/footer.php";

?>