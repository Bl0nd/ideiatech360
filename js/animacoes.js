// WOW JS
new WOW().init();

// BANNER SLICK
// $('.banner').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
// });

// GALERIA SLICK
$('.galeria').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

//FORM PARA WHATS
document.getElementById('orcamento').addEventListener('submit', function (evento) {
    evento.preventDefault(); // impede a ação padrão do form
    EnviarWhats();
});

function EnviarWhats() {
    // alert("Teste de evento");
    // console.log("Cheguei aqui");

    var site = "*Site Ideia Tech 360 - Orçamento*";
    var nome = document.getElementById('nomeOrcamento').value;
    var fone = document.getElementById('foneOrcamento').value;
    var email = document.getElementById('emailOrcamento').value;
    var mens = document.getElementById('mensOrcamento').value;

    alert('Nome: ' + nome + '| Fone: ' + fone + '| Email: ' + email + '| Mens: ' + mens);
};