<?php


    // les tableaux

    $notes = array(15, 88, 3); // => old php versions

    $notes = [11, 64]; // good practice

    $eleves = ['marc', 'doe', [55, 12, 5, ['coucou', 'cava']]];

    // var_dump($eleves);

    // echo $eleves[0]; // => marc 

    // echo $eleves[2][3][0]; // => coucou

    // tableaux indexés

    $eleves2 = [
        'prenom' => 'Jane',
        'nom' => 'Doe',
        'notes' => [8, 13, 4],
    ];

    // echo $eleves2['notes'][1]; // => 13

    $classe = [
        [
            'nom' => 'Doe',
            'prenom' => 'John',
            'notes' => [10, 5, 4],
        ],
        [
            'nom' => 'Doe',
            'prenom' => 'Jane',
            'notes' => [15, 3, 14],
        ],
    ];

    $moyenneJane1 = $classe[1]['notes'][0];
    $moyenneJane2 = $classe[1]['notes'][1];
    $moyenneJane3 = $classe[1]['notes'][2];

    $moyenneJaneTotale = ($moyenneJane1 + $moyenneJane2 + $moyenneJane3) / 3;
    $janePrenom = $classe[1]['prenom'];

    // echo "{$classe[1]['prenom}"; 

    // echo $moyenneJaneTotale;

    // $moyenneJane = ($classe[1]['notes'][0]) . ($classe[1]['notes'][1]) . ($classe[1]['notes'][2]);
    // echo ($moyenneJane1 + $moyenneJane2 + $moyenneJane3) / 3;



    // echo ($classe[1]['notes'][0]) . ($classe[1]['notes'][1]) . ($classe[1]['notes'][2]);

    // $moyenneJane = $classe[2]['notes'][1] . $classe[2]['notes'];

    echo "Salut " . $janePrenom . " tu as eu " . $moyenneJaneTotale . " de moyenne"; // => Salut Jane tu as eu 10.666666666667 de moyenne


    










