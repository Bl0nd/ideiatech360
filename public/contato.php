<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vedors/email/Exception.php';
require 'vedors/email/PHPMailer.php';
require 'vedors/email/SMTP.php';

if (isset($_POST['nome'])) {
    $assunto = 'Ideia Tech 360';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="site">
    <meta name="author" content="Fernanda">
    <title> .: Site Já - Ideia Tech 360 :. </title>

    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- LITY -->
    <link rel="stylesheet" href="assets/css/lity.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Cabeçalho -->
    <?php require_once('conteudo/topo.php'); ?>

    <main>

        <!-- mapa -->
        <section class="map-contato">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.033985270784!2d-46.43194172309075!3d-23.49528535107992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dd09800149%3A0x4f436ed77615106c!2sAvenida%20Marechal%20Tito%2C%201500%20-%20S%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1727804158332!5m2!1spt-BR!2sbr"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <section class="site formulario">
            <h2>Formulário de contato - Agência ideia tech 360</h2>

            <form action="#" method="POST" class="animate__animated animate__wobble animate__delay-2s">
                <div>
                    <input type="text" name="nome" placeholder="Nome: " required>
                    <input type="email" name="email" placeholder="E-mail: " required>
                    <input type="tel" name="fone" placeholder="Telefone: " required>
                </div>
                <div>
                    <textarea name="mens" placeholder="Mensagem: " cols="30" rows="10"></textarea>
                    <input type="submit" value="Enviar E-mail">
                </div>
            </form>
        </section>

        <!-- Galeria de Fotos -->
        <?php require_once('conteudo/galeria_cont.php'); ?>

    </main>

    <!-- Footer -->
    <?php require_once('conteudo/rodape.php'); ?>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- SLICK JS -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/animacoes.js"></script>
    <!-- LITY -->
    <script src="assets/js/lity.min.js"></script>


</body>

</html>