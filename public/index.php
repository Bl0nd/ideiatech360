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

        <!-- Banner -->

        <section class="banner">


            <!-- SLIDE -->

            <div class="slide">

                <div>
                    <div class="site">
                        <div class="box1">
                            <h2>Ideia tech <br> 360 </h2>
                        </div>
                    </div>
                </div>

                 <div>
                    <div class="site">
                        <div class="box1">
                            <h2>banner <br> BANNER </h2>
                        </div>
                    </div>
                </div> 

            </div>

            <div class="boxform">
                <form name="orcamento" method="post" class="animate__animated animate__wobble animate__delay-2s">
                    <h2>Faça seu Orçamento</h2>
                    <div>
                        <input type="text" name="nome" placeholder="Nome: " required>
                    </div>
                    <div>
                        <input type="tel" name="fone" placeholder="Telefone: " required>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="E-mail: " required>
                    </div>
                    <div>
                        <textarea name="mens" placeholder="Mensagem: " cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button onclick="EnviarWhats()">Orçamento</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Sobre -->
        <?php require_once('conteudo/sobre_cont.php'); ?>

        <!-- Condições Especiais -->
        <?php require_once('conteudo/condicoes.php'); ?>

        <!-- Serviços -->
        <?php require_once('conteudo/servico_cont.php'); ?>
        <!-- Galeria de Fotos -->
        <?php require_once('conteudo/galeria_cont.php'); ?>

        <!-- DESENVOLVEDORES -->
        <?php require_once('conteudo/dev.php'); ?>

        <!-- Perguntas Frequentes -->
        <?php require_once('conteudo/perguntas.php'); ?>

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