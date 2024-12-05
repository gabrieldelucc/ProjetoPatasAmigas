<?php
session_start();
?>

<body>
<nav class="navbar navbar-dark sticky-top fixed-top" style="background-color: darkcyan;">
    <div class="container-fluid">
        <div class="d-flex flex-wrap">
            <button class="btn btn_link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <img src="https://img.icons8.com/?size=100&id=36389&format=png&color=FFFFFF" alt="Configurações" width="30" height="30">
            </button>

            <button type="button" class="btn btna btn-link ms-5 ms-md-5 ms-lg-5 menubuttons" onclick="window.location.href='sobre_nos.php';">Quem Somos</button>

            <button type="button" class="btn btna btn-link ms-5 ms-md-5 ms-lg-5 menubuttons" onclick="window.location.href='ongsparceiras.php';">Quero Adotar</button>

            <button type="button" class="btn btna btn-link ms-5 ms-md-5 ms-lg-5 menubuttons" onclick="window.location.href='feedback.php';">Avalie-nos</button>

        </div>   

        <div style="display: flex; align-items: center;">
            <a href="principal.php" class="btn btna btn-link">
                <img src="https://img.icons8.com/?size=100&id=2797&format=png&color=FFFFFF" alt="TelaInicial" width="30" height="30">
            </a>

            

            <?php
            // Verificar se a sessão está iniciada e obter o TIPO DA CONTA
            $tipoconta = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : null;

            if ($tipoconta == "ong") {
                $linkConfig = 'infoong.php';
            } elseif ($tipoconta == "usuario") {
                $linkConfig = 'informacoesconta.php';
            } else {
                    $linkConfig = '#'; // Se o tipo não for válido
                    $tipoconta = "Tipo de usuário não reconhecido.";
                }
                echo '<a href="' . $linkConfig  . '" class="btn btna btn-link">
            <img src="https://img.icons8.com/?size=100&id=2969&format=png&color=FFFFFF" alt="Configurações" width="30" height="30">
            </a>';







            if (!isset($_SESSION['usuario'])) {
                // Se a sessão não existir, exibe o botão "Entrar"
                echo '<a type="button" href="Acessar.php" class="btn btn-outline-light" style="border-radius: 20px; font-family: \'Poppins\', sans-serif;">Entrar</a>';
            } else {

                // Checa o tipo de usuário e define o link do perfil com base nisso
                if ($tipoconta == "ong") {
                    $linkPerfil = 'perfilOng.php';
                } elseif ($tipoconta == "usuario") {
                    $linkPerfil = 'perfilUser.php';
                } else {
                        $linkPerfil = '#'; // Se o tipo não for válido
                        $tipoconta = "Tipo de usuário não reconhecido.";
                    }

                // Exibe o botão de conta com o link correto
                echo '<div class="btn-group dropdown">
        <button type="button" class="btn btna btn-link custom-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://img.icons8.com/?size=100&id=86280&format=png&color=FFFFFF" alt="Meu Perfil" width="30" height="30">
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="' . $linkPerfil . '">Meu Perfil</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a type="button" class="btn btnz" data-bs-toggle="modal" data-bs-target="#confirmModal">Sair</a></li>
        </ul>
      </div>';

  
     

            }

            
            ?>
            <!-- Janela de Confirmação -->
            <div class="modal fade" id="confirmModal" tabindex="-1" data-bs-backdrop="false" aria-labelledby="confirmModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="confirmModalLabel">Confirmar Saída</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  <div class="modal-body">
                      Você tem certeza que deseja sair?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <a href="../Backend/usuarios/logoff.php" class="btn btn-danger">Sair</a>
                  </div>
              </div>
          </div>
      </div>
        </div>


        <div class="offcanvas offcanvas-start" style="background-color: darkcyan; z-index: 2050;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header d-flex justify-content-center" style="height:115px; width:400px; position: relative;">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
        <img src="Imagens/logo_1.png" class="d-block w-100" alt="...">
    </div>
    <br>
    <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center" style="background-color: #f4f4f4f4; height: calc(100vh - 230px);">
        <!-- Botões de navegação -->
        <button class="btn mb-4" onclick="window.location.href='ongsparceiras.php'">Quero Adotar</button>
        <button class="btn  mb-4" onclick="window.location.href='vitrine_prod.php'">Produtos</button>
        <button class="btn mb-4" onclick="window.location.href='sobre_nos.php'">Sobre nós</button>
        <button class="btn mb-4" onclick="window.location.href='feedback.php'">Avalie-nos</button>
    </div>
    <div class="offcanvas-footer d-flex justify-content-center" style="height:auto; width:400px; position: relative;">


        <!-- Botões de redes sociais -->
        <div class="d-flex justify-content-center mb-3">
            <button type="button" class="btn btn-link">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-white-icon.png" alt="Instagram" width="30" height="30">
            </button>

            <button type="button" class="btn btn-link">
                <img src="https://img.icons8.com/?size=100&id=87264&format=png&color=FFFFFF" alt="Facebook" width="30" height="30">
            </button>

            <button type="button" class="btn btn-link">
                <img src="https://img.icons8.com/?size=100&id=37326&format=png&color=FFFFFF" alt="Youtube" width="30" height="30">
            </button>

            <button type="button" class="btn btn-link">
                <img src="https://img.icons8.com/?size=100&id=8824&format=png&color=FFFFFF" alt="Youtube" width="30" height="30">
            </button>
        </div>
        <!-- Texto de Copyright -->
        <h1 style="color:white; font-size: 1.2rem; text-align: center;">©2024 por Patas Amigas. Todos os direitos reservados.</h1>
    </div>
</div>


    </div>
</nav>
</body>
</html>
