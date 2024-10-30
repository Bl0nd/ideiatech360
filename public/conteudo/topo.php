<header id="topo-fixo">
        <!-- largura 1200 -->
        <div class="site">
            <div class="logo1"> <!-- logo -->
                <a href="#">
                    <h1 class=" animate__animated animate__rubberBand">Logo Ideia Tech 360</h1>
                </a>
            </div>

            <div>
                <div class="redeSocial"> <!-- Rede Social e login -->
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <a href="#">Login</a>
                </div>
                <!-- Fim Topo Rede Social e Login -->

                <button class="abrir-menu"></button>
                <nav class="menu"> <!-- inicio-menu -->
                    <button class="fechar-menu"></button>
                    <?php 
                      $pgAtual = basename($_SERVER['PHP_SELF'],'.php');
                    //var_dump($pgAtual)
                    
                    // if($pgAtual == 'index'){
                    //     var_dump('ativo');
                    // }else{
                    //     var_dump('vazio');
                    // }
                    // 

                    ?>
                    
                    <ul>
                        <li><a href="index.php" class="<?php echo($pgAtual == 'index') ? 'ativo': ''; ?>">Home</a></li>
                        <li><a href="sobre.php" class="<?php echo($pgAtual == 'sobre') ? 'ativo': ''; ?>">Sobre</a></li>
                        <li><a href="servico.php"class="<?php echo($pgAtual == 'servico') ? 'ativo': ''; ?>">Serviços</a></li>
                        <li><a href="portifolio.php"class="<?php echo($pgAtual == 'portifolio') ? 'ativo': ''; ?>">Portfólio</a></li>
                        <li><a href="#"class="<?php echo($pgAtual == 'index') ? 'ativo': ''; ?>">Blog</a></li>
                        <li><a href="contato.php"class="<?php echo($pgAtual == 'index') ? 'ativo': ''; ?>">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>