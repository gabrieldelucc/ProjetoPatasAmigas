<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos de Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        .pagamentos-container {
            grid-area: 'content';
            display: 'flex';

            padding-left: 11rem;
            padding-right: 2rem;
            padding-block: 1rem;
        }

        .pagamentos-container>h3 {
            font-weight: 300;
        }

        .formas-pgto>h2 {
            padding-block: 0.75rem;
            font-weight: 400;
        }


        .pagamentos-metodos {
            display: flex;
            align-items: center;
        }

        .forma-pgto {
            display: flex;
            flex-direction: row;
            max-width: 75%;

            gap: 0.25rem;
        }

        .cartao {
            border-style: solid;
            border-color: black;
            border-width: 2px;

            display: flex;
            align-items: center;

            gap: 0.5rem;

            padding: 1rem;
            height: 3rem;
        }

        .numero-cartao {
            margin-left: auto;
        }

        .del-metodo {
            border: none;
            background: transparent;

            font-weight: bold;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .add-metodo {
            border: none;
            background: transparent;
            color: #006969;

            font-weight: bold;
        }

.Menufod {
            width: 140px;
            background-color: #a0a0a0;
            padding: 20px;
            height: 53%;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
            
        }

        .Menufod h3 {
            color: #069690;
        }

        .Menufod a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .Menufod a:hover {
            background-color: #575757;
        }
    </style>
</head>

<body>

   
    <?php include "menu.php" ?>

   <div class="Menufod">
        <h3>Menu</h3>
        <a href="informacoesconta.php">Informações da Conta</a>
        <a href="seguranca.php">Segurança</a>
        <a href="pagamento.php">Métodos de Pagamento</a>
        <a href="historicocompra.php"> Historico </a>
        
    </div>
    <main class="pagamentos-container">
        <h1>Gerencie seus Pagamentos</h1>
        <h3>Adicione ou delete seus métodos</h3>

        <div class="formas-pgto">
            <h2>Suas formas de pagamento</h2>
            <div class="pagamentos-metodos">
                <div class="forma-pgto">
                    <div class="cartao">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="nome-metodo">Cartão de débito</span>
                        <span class="numero-cartao">9879<span class="estrelinhas">****</span></span>
                    </div>
                    <button title="Excluir método de pagamento" type="button" class="del-metodo"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2 icone-lixeira">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg></button>
                </div>
            </div>
            <button class="add-metodo">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <span>adicionar novo método</span>
            </button>
        </div>
    </main>

   
    <script src="menu.js" defer></script>
    <?php include "footer.php" ?>
</body>

</html>