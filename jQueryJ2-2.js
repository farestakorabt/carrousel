$(function() {
    //Exercice 18
    //DataTable
    //https://www.datatables.net/

    // permet de mettre en français
    $.extend( $.fn.dataTable.defaults, {
        'language': {
            'url': 'http://cdn.datatables.net/plug-ins/1.10.21/i18n/French.json'
        }
    } );

    $('table.tableau_data').DataTable();

    //Exercice 19
    //plugin jQuery InnerFade
    //https://www.jque.re/plugins/effects-ui/innerfade/index.html
    //par défaut animationtype = 'fade', 'slide'
    //par défaut speed = 'normal' ('fast', 'slow')
    //par défaut type = 'sequence' ('sequence', 'random', 'random_start')
    //$('.portefolio').innerfade();

    let dejafait = false;
    let portefolio = $('ul.portefolio').clone();

    $(document).on('mouseover', 'ul.portefolio', function() {
        if (dejafait == false) {
            dejafait = true;
            $('.portefolio').innerfade({
                //type d'animation pour passer d'une image à une autre
                animationtype: 'fade', //'fade', 'slide'
                //vitesse de l'animation de transition entre les images
                speed: 'slow', //'normal' ('fast', 'slow')
                //temps d'attente entre chaque image
                timeout: 2000, //millisecondes
                type: 'random_start', //random = aléatoire
                containerheight: '250px', //dimension de cadre
                runningclass: '' //innerfade
            });
        }
    });

    $(document).on('click', 'ul.portefolio', function() {
        $('.portefolio').remove();
        $('h2.exercice19').after(portefolio);
    });

    //Exercice 20
    //plugin jquery Cycle
    //http://malsup.com/jquery/cycle/
    //$('div.cycle').cycle();
    //fx: shuffle, zoom, turnDown, curtainX, scrollRight
    $('div.cycle1').cycle(
        {
            fx:     'shuffle',
            easing: 'easeOutBack',
            delay:  -1000
        }
    );

    $('div.cycle2').cycle(
        {
            fx:    'zoom',
            sync:  false,
            delay: -2000
        }
    );

    $('div.cycle3').cycle(
        {
            fx:    'turnDown',
            delay: -2000
        }
    );

    $('div.cycle4').cycle(
        {
            fx:    'curtainX',
            sync:  false,
            delay: -2000
        }
    );

    $('div.cycle5').cycle(
        {
            fx:    'scrollRight',
            next:   '.cycle5',
            timeout:  0,
            easing:  'easeInOutBack'
        }
    );

    //Exercice 21
    //Plugin Owl Carousel
    // https://owlcarousel2.github.io/OwlCarousel2/
    $("div.owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


});
