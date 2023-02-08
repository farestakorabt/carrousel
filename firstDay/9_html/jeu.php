<?php
$aDeviner = 150;
$message = "";
// $reponseClient = $_POST['numero'];

  if(isset($_POST['numero']))
  {
    $reponseClient = $_POST['numero'];
      if($reponseClient < $aDeviner)
      {
          $message = "C'est en dessous de 150";
      } elseif($reponseClient > $aDeviner) {
        $message = "C'est en dessus de 150";        
      } else {
        $message = "C'est pareil, bravo !";                
      }
  }






?>

<h2>Saissir un chiffre</h2>

<form action="" method="post">
    <input type="text" id="numero" name="numero" placeholder="saisir un numero">

    <input type="submit" value="Enoyer">    

</form>