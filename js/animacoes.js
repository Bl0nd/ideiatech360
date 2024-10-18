// WOW JS

new WOW().init();

// BANNER SLICK

$('.slide').slick({
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

    if (nome === '') {
        alert('Por favor, insira seu nome: ');
        return false;
    }

    // Expressão regular para validar telefone no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
    const exFone = /^\(\d{2}\) \d{4,5}-\d{4}$/;
    if (!exFone.test(fone)) {
        alert('Insira um telefone valido, no formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX');
        return false;
    }

    // Expressão regular para validar formato de e-mail
    const exEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!exEmail.test(email)) {
        alert('Insira um email valido');
        return false;
    }

    if (mens.length < 20) {
        alert('A mensagem deve conter mais de 20 caracteres');
        return false;
    }

    var numWhats = '5511987521436';
    var quebraDeLinha = '%0A';

    nome = window.encodeURIComponent(nome);
    fone = window.encodeURIComponent(fone);
    email = window.encodeURIComponent(email);
    mens = window.encodeURIComponent(mens);

    window.open("https://wa.me/" + numWhats + "?text=" + site + quebraDeLinha + quebraDeLinha + nome + quebraDeLinha + fone + quebraDeLinha + email + quebraDeLinha + mens)

    window.open(url, '_blank');

    form.reset();
}

//Menu Mobile
document.querySelector(".abrir-menu").onclick = function () {
    document.documentElement.classList.add("menu-ativo");
}

document.querySelector(".fechar-menu").onclick = function () {
    document.documentElement.classList.remove("menu-ativo");
}

//MENU FIXO
window.onscroll = function () {
    var top = document.documentElement.scrollTop;
    if (top > 900) {
        document.getElementById("topo-fixo").classList.add('menu-fixo');
    }
    else {
        document.getElementById("topo-fixo").classList.remove('menu-fixo');
    }
}