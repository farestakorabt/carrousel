<?php

//     function continuer() {
//     $i = 0;
//     while(true)
//     {
//         $reponse = readline("Voulez vous continuer ? \n");

//         if($reponse === "non")
//         {
//             echo "salut !";
//             return false;
//         } else {
//             $i++;

//             if($i == 2)
//             {
//                 echo "Vous etes tenace ! \n";
//             } elseif($i == 3)
//             {
//                 echo "Vous etes collant ! \n";
//             } 
//         }        
//     }
// };

// continuer();

function continuer() {
    $i = 0;
    
    $reponse = readline("Voulez vous continuer ? \n");

    if($reponse === "non")
    {
        return false;
    } elseif ($reponse === "oui")
    {
        $i++;
    } else {
        echo "Vous avez mal réponsdu \n";
    }

    if($i == 2){
        echo "Vous etes tenace ! \n";
    }
    if($i == 3){
        echo "Vous etes collant ! \n";
    }
    if($i == 4){
        echo "Vous etes tenace ! \n";
    }
}

continuer();