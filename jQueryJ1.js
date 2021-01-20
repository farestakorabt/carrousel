//à partir de jQuery 3.0
//voir https://code.i-harness.com/fr/docs/jquery/ready
//$(document).ready(function() { //pour les versions jQuery inférieur à la version 3.0
$(function() {
    // instructions après que la page html soit complètement chargé
    console.log('page html complètement chargé');

    //façon en javascript
    /*
    document.querySelector('button.ceBouton').addEventListener('click', function() {
        //ce qui se passe lorsqu'on clique sur le bouton avec la class ceBouton
    });
     */

    $(document).on('click', 'button.ceBouton', function() {
        //ce qui se passe lorsqu'on clique sur le bouton avec la class ceBouton
        $('p.premier').text('Ma première page jQuery');
    });

    //onclick click évènement cliquer sur l'élement html sélectionné
    //onmouseover mouseover //évènement survole du pointeur de la souris sur l'élément html sélectionné
    //onmouseout mouseout //ce déclenche quand le curseur de la souris quitte la zone de l'élément html sélectionné
    //onmousedown mousedown //clique droit de la souris sur l'élément html sélectionné
    //onmouseup mouseup //on relache le clique de la souris sur l'élément html sélectionné
    //onkeydown keydown //quand on appuie sur une touche du clavier dans l'élément html sélectionné
    //onkeyup keyup //quand on relache une touche du clavier dans l'élément html sélectionné
    //onblur blur //quand on perd le focus de l'élément html sélectionné
    //onfocus focus //quand on prend le focus de de l'élément html sélectionné
    //onsubmit submit //c'est lors d'une soumission de formulaire html sélectionné
    //onchange change //se déclenche si un la value d'un élément html sélectionné est modifié

    //je modifie le texte contenu dans tous les paragraphes sauf ceux avec la class premier
    //$('p').not('.premier').text('On modifie les paragraphes qui n\'ont pas la class premier');

    
    //.html(); //récupère ou modifie la valeur à l'intérieur d'un élément html sélectionné
    //.text(); //récupère ou modifie le texte à l'intérieur d'une élément html sélectionné
    //.val(); récupère ou modifie la valeur de l'attribut value d'un champ de formulaire html (input)
    //.not(); //exclus de la sélection l'élement html
    //.css() //récupère ou modifie la valeur d'une propriété style css à un élément
    //.clone(); //duplique un élément html sélectionné
    //.append(); //ajoute du contenu à la fin d'un élément html sélectionné
    //.attr(); //récupère ou modifie la valeur d'un attribut (propriété) d'un élément html sélectionné
    //.removeAttr(); //supprime un attribut (propriété) d'un élément html sélectionné
    //.remove(); //supprime un élément html sélectionné
    //.addClass(); //ajoute une class Css à l'élément sélectionner
    //.removeClass(); //supprime une class Css à l'élément sélectionner
    //.hide(); //cache un élément html sélectionné
    //.show(); //affiche un élément html sélectionné
    //.toggle(); //alterne entre cacher afficher un élément html sélectionné
    //.clone() //duplique l'élément html sélectionner
    //.find( //trouve un autre élément html dans l'élement html sélectionné
    //.parent(); //sélectionne l'élément html parent
    //.children(); //sélectionne l'élément html enfant

    //Exercice 2. Sélectionner plusieurs paragraphes pour les modifier => .css( , .not(
    /*
    On créer 3 nouveaux paragraphes en dessous du premier (dans le fichier html)
    On créer un nouveau bouton en dessous du premier et il faut que quand on clique dessus,
    cela rajoute le texte «Bonjour !» en couleur blue et en gras dans tout les paragraphes
    sauf celui avec la class css «premier».
    */

    //$('p.premier').css('color', 'red'); //change le texte en rouge sur le paragraphe avec la class premier

    $(document).on('click', 'button.ceBouton2', function() {
        /*
        $('p').not('.premier').text('Bonjour !');
        $('p').not('.premier').css('color', 'blue');
        $('p').not('.premier').css('font-weight', 'bold');
        */
        //$('p').not('.premier').text('Bonjour !').css('color', 'blue').css('font-weight', 'bold').css('background-color', 'yellow');
        //https://www.w3schools.com/jquery/css_css.asp
        //$(selector).css({property:value, property:value, ...})
        $('p').not('.premier').text('Bonjour !').css({'color': 'blue', 'font-weight': 'bold', 'background-color': 'yellow'});

        //let valeur = $('p.premier').css('color'); //Blabla
        //$('p').html('<input type="text" value="valeur par défaut" />');
        //$('p').not('.premier').css('color', valeur);

        //$('p').html(); //récupère le contenu html de tout les paragraphes
        //$('p').html('<div></div>') //modifie le contenu de tout les paragraphe pour mettre une div
        //$('p').text(); //récupère le texte contenu dans paragraphe
        //$('p').text('Salut !'); //met le texte Salut ! dans paragraphe
        //$('input').val(); //récupérer la valeur de votre input
        //$('input').val('nouvelle valeur'); //met la valeur 'nouvelle valeur' dans l'attribue valeur de votre input
        //$('p').css('color'); //récupère la couleur css
        //$('p').css('color', 'blue'); //met la couleur blue dans la propriété color css des paragraphes
        //$('p').attr('id'); //récupète la valeur de l'attribut id
        //$('p').attr('id', 'beauparagraphe'); //ajoute/modifie un attribut id pour lui donner la valeur 'beauparagraphe'

    });

    // console.log('avant le click button#valider');

    $(document).on('click', 'button#valider', function() {
        console.log('click button#valider');
        let nom = $('input#nom').val();
        let prenom = $('input#prenom').val();
        $('p.recapitulatif').text('Nom: ' + nom + ' Prénom: ' + prenom);
    });

    $(document).on('mouseover', 'button.dupliquer', function() {
        let clonage = $('form#formulaire').clone();
        $('form#formulaire').after(clonage);
    });

    //beforebegin = before
    //beforeend = append
    //afterbegin = prepend
    //afterend = after

    //before //ça ajoute votre code html avant votre element html sélectionné
    //append //ça ajoute votre code html à la fin de l'intérieur de votre élément html sélectionné
    //prepend //ça ajoute votre code html au début de l'intérieur de votre élement html sélectionné
    //after //ça ajoute votre code html après l'élement html sélectionné

    //Exercice 03. Cloner un paraphe .clone( , .append(
    //On veut dupliquer le paragraphe avec le css «premier» et le rajouter
    // à la fin du body lorsque qu’on clique sur un troisième bouton
    $(document).on('click', 'button.exercice03', function() {
        let clone_premier = $('p.premier').clone();
        $('body').append(clone_premier);
    });

    //Exercice 04. mouseout, .attr( , .val(
    /*
    Dans le fichier html on créer un champ button avec la class «monBouton»
    En jQuery on le modifie grâce à un évènement enlevé le curseur avec la souris sur lui
     même pour lui rajouter/modifier les attribut html suivant :
    - id avec la valeur champ 'texte'
    - class avec la valeur 'ceChampsDeFormulaire'
    - type avec la valeur 'text'
    - Value avec la valeur 20
    - monAttribut avec la valeur 'monAttribut'
    */
    $(document).on('mouseout', 'input.monBouton', function() {
        $(this).attr('id', 'texte');
        $(this).attr('class', 'ceChampsDeFormulaire');
        $(this).attr('type', 'text');
        $(this).attr('value', 20);
        $(this).attr('monAttribut', 'monAttribut');
    });

    //Exercice 05. removeAttr( //supprimer un attribut html .addClass( , removeClass(
    /*
    Créer dans le html un champ input class monInput type text qui a un attribut disabled
    + créer un bouton avec la class ceBouton5
    créer un évènement clique attacher à ce bouton
    -Supprimer l’attribut disabled,
    rajouter un nouvelle class css «jolie» à l’élement «monInput» et supprimer
    la class css monInput avec .removeClass
    */
    $(document).on('click', 'button.ceBouton5', function() {
        $('input.monInput').removeAttr('disabled'); //supprime l'attribut disabled de l'élément
        $('input.monInput').addClass('jolie'); //ajoute la class css jolie à l'élément
        $('input.monInput').removeClass('monInput'); //supprime la class css monInput de l'élément
    });

    //Exercice 06
    /*
    Dans votre fichier html créer une nouvelle div avec la class «jolie» contenant un
    textarea avec une class «jolie» et une balise html span qui elle même contient 3
    textarea. Le dernier textarea à également une class css «jolie»
    En jQuery via un évènement click déclencher par un nouveau bouton, sélectionner
    uniquement le dernier textarea avec la class jolie pour y mettre le texte «trouvé !»
    */
    //.find( //permet de trouver la sélection se trouvant dans l'arboresence enfant de l'élement html sélectionné
    //$('div.jolie > span');
    //$('div.jolie').find('span.joliespan').children();
    //.next(); et //prev(); //sélectionne l'élément html suivant ou précédent
    //.children(); //.parent(); //sélectionne les éléments html enfants ou parents
    //de l'élement sélectionner

    /*
    $('form.formulaire > input#nom');
    $('form#formulaire').find('input#nom');
    $('form#formulaire').children(); //séléctionne les balises html enfant de l'élément html sélectionné
     */
    $(document).on('click', 'button.ceBouton6', function() {
        $('div.jolie').find('span').find('textarea.jolie').val('trouvé !');
        //$('div.jolie > span > textarea.jolie').val('trouvé !');
    });

    /* Exercice 06 bis
    //Supprimer l’avant dernier textarea avec .remove( et .prev( .next(
    Parler de .parent() pour sélectionner le span parent.
    On rajoute au parent du dernier textarea.jolie la class css jolie
    */
  
    // $(document).on('click', 'button.ceBouton6bis', function() {
    //     //supprime l'avant dernier textarea
    //     $('div.jolie').find('span').find('textarea.jolie').prev().remove();
    //     //ajoute la class css jolie au parent du dernier textarea.jolie
    //     $('div.jolie').find('span').find('textarea.jolie').parent().addClass('jolie');
    // });

    //.hide( .show( .toggle(
    //$('p.nouveau_paragraphe').hide(); //fait disparaître le paragraphe avec la class 'nouveau_paragraphe'
    //$('p.nouveau_paragraphe').show(); //fait apparaître le paragraphe avec la class 'nouveau_paragraphe'
    //$('p.nouveau_paragraphe').toggle(); //alterne entre disparition / apparition le paragraphe avec la class 'nouveau_paragraphe'

    //Exercice 07. .hide( / .show( .toggle(
    /*
    Maintenant on veut faire que lors du clique sur un bouton de class «hideshow»,
    cela fasse apparaître, disparaître  le paragraphe avec une class exercice_07
    mettre un petit texte dans le paragraphe
    */
    $(document).on('click', 'button.hideshow', function() {
        $('p.exercice_07').toggle('slow'); //slow, fast, normal = lent, rapide, normal
    });

    $(document).on('click', 'button.carre_anime', function() {
        $('div.carre').animate({'left':220}, 'slow');
        $('div.carre').animate({'background-color': 'blue'}, 'slow');
        $('div.carre').animate({'top':1300}, 'slow');
        $('div.carre').animate({'background-color': 'red'}, 'slow');
        $('div.carre').animate({'left':20}, 'slow');
        $('div.carre').animate({'top':1170}, 'slow');
    });






});
