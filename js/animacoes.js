// WOW JS

new WOW().init();

// BANNER SLICK
$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

// GALERIA SLICK
$('.galeria').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});

function EnviarWhats() {

    var site = "*Site Ideia Tech 360 - Orçamento*";
    var form = document.forms['orcamento'];

    var nome = form.elements['nome'].value;
    var fone = form.elements['fone'].value;
    var email = form.elements['email'].value;
    var mens = form.elements['mens'].value;

    var numWhats = '5511987521436';
    var quebraDeLinha = '%0A';

    nome = window.encodeURIComponent(nome);
    fone = window.encodeURIComponent(fone);
    email = window.encodeURIComponent(email);
    mens = window.encodeURIComponent(mens);

    window.open("https://wa.me/" + numWhats + "?text=" + site + quebraDeLinha + quebraDeLinha + nome + quebraDeLinha + fone + quebraDeLinha + email + quebraDeLinha + mens)

    window.open(url, '_blank');
}