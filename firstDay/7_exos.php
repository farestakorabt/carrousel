<?php


// fonction la fonction "moyenne" qui prendra en parametre un tableau et qui fera un return des moyennes des notes



function moyenne($tableau) {

        $laMoyenne = array_sum($tableau);

        $nombreDeNotes = count($tableau);
    
         $laMoyenneGenerale = $laMoyenne / $nombreDeNotes;
    
    
        return $laMoyenneGenerale;    
    
    
    }
//     $jean = [15, 18, 12, 6, 5, 18];

//     function moyenne($notes) 
//     {
//         return array_sum($notes) / count($notes);        
//     }

//     // echo moyenne($jean);

//     // echo "Jean a eu " . moyenne($jean) . " de moyenne.";

//     $cm1 = [    
//         "Jean" =>   [11, 12, 8, 2],
//         "Marie" =>  [15, 6, 11, 8],
//         "claire" => [13, 10, 11,5],
//         "Yves" =>   [15, 16, 8, 2],        
//     ];


//     foreach($cm1 as $eleve => $notes)
//     {
//         $moyenne = round(moyenne($notes));

//         // echo "La moyenne de $eleve est de $moyenne \n";    
//     };


// $ecoles = [
//     'cm1' => [
//         "Jean"   => [11, 12, 8, 2],
//         "Marie"  => [15, 6, 11, 8],
//         "claire" => [13, 10, 11, 5],
//         "Yves"   => [13, 10, 11, 5],
//     ],
//     'cm2' => [
//         "robert"  => [11, 12, 8, 2],
//         "fria"    => [15, 6, 11, 8],
//         "john"    => [13, 10, 11, 5],
//         "bernard" => [13, 10, 11, 5],
//     ],
//     'ce2' => [
//         "morgan"  => [11, 12, 8, 2],
//         "diana"   => [15, 6, 11, 8],
//         "mina"    => [13, 10, 11, 5],
//         "sabrina" => [13, 10, 11, 5],
//     ],
// ];


// foreach($ecoles as $ecole => $eleves)
// {
//     // echo "Pour la classe $ecole : \n";

//     foreach($eleves as $eleve => $note)
//     {
//         $moyenne = moyenne($note);

//         // echo "La moyenne de $eleve est de $moyenne \n";
//     }
// }