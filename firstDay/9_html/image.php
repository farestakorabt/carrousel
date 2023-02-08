<?php

var_dump($_POST);
var_dump($_FILES);

// if(isset($_FILES['image']))
// {
//     $image = $_FILES['image']['name'];
//     $tmp   = $_FILES['image']['tmp_name'];

//     move_uploaded_file("$tmp", "images/$image");    
// }

if(isset($_POST['email']))
{
    $mail = $_POST['email'];
    $txt = "mail.txt";
    $mail .= ",";
    file_put_contents($txt, $mail, FILE_APPEND);
    // echo "salut";
}

$mailRecus = explode(",", file_get_contents("mail.txt"));

var_dump($mailRecus);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="prenom" placeholder="votre prénom">

    <input type="mail" name="email" placeholder="votre mail">

    <input type="file" name="image">

    <input type="submit" value="Envoyer">
</form>

<ul>
    <?php
        foreach($mailRecus as $mail)
        {
            if($mail != "")
            {
                echo "<li>$mail</li>";
            }
        }

    ?>
</ul>
    
</body>
</html>