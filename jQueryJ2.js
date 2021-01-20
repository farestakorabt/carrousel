$(function() {
    // instructions après que la page html soit complètement chargé
    console.log('page html complètement chargé');

    //Exercice 09 datepicker
    $('input.date_naissance').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '-50:+5'
    });

    //Exercice 10 accordeon
    //$('div.accordeon').accordion();
    //$('div.accordeon').accordion( "option", "event", "mouseover" ); //permet d'utiliser un autre évènement que le "click"
    $('div.accordeon').accordion({ active: 2 }); //celui ouvert par défaut c'est le 3ème

    // //Exercice 11 slider
    // //$('div.curseur').slider();//par défaut est configuré de 0 à 100
    // $('div.curseur').slider({min: 0, max: 50}); //valeur de 0 à 50

    // //évènement qui se déclenche au clique du bouton "Obtenir la valeur de la réglette"
    // $(document).on('click', 'button.btn_reglette', function() {
    //    alert( $('div.curseur').slider('value') ); //affiche la valeur de la réglette
    // });

    // //évènement qui se déclenche au mouvement de la souris sur la réglette / le curseur
    // $(document).on('mousemove', 'div.curseur', function() {
    //     //met à jour la valeur de la réglette dans la div avec la class valeur_curseur
    //     $('div.valeur_curseur').text( $('div.curseur').slider('value') );
    // });

    // //détecte la position de la souris dans le corps de la page lorsqu'on la bouge
    // $(document).on('mousemove', 'body', function(e) {
    //     var posX = e.clientX; //récupère l'abscisse
    //     var posY = e.clientY; //récupère l'ordonné

    //     $('.x').text(posX);
    //     $('.y').text(posY);
    //     $('div.valeur_curseur').css('top', posY+60);
    //     $('div.valeur_curseur').css('left', posX);
    // });

    //Exercice 12 onglets
    $('div.onglets').tabs();

    //Exercice 13 select menu
    $('select#type_personne').selectmenu();

    //Exercice 14
    //on veut stylisé les boutons radio, checkox
    $('input[type="radio"]').checkboxradio();

    //Exercice 15 tooltips
    $('p.exerice15').tooltip();

    //Exercice 16 autocomplete
    let tableau = ['Elise', 'Elisabeth', 'Baptiste', 'Théo']; //on créé une variable tableau
    $('input.prenom').autocomplete({
        source: tableau
    });

    //Exercice 17
    //up : vers le haut, down : vers le bas, left : vers la gauche, right : vers la droite
    $(document).on('click', 'button.glissement', function() {
        $('img.animal').toggle('slide', { direction: 'down' }, 1000);
    });

    $(document).on('mouseover', 'hr.scroll', function() {
        $('img.animal').toggle('slide', { direction: 'right' }, 1000);
    });
});