<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segurança da Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        /* Css temporario aqui, só pra n fundir com o do cauã dnv ;() */
        


        .form-container {
            margin: 50px auto;
            padding: 30px;
            max-width: 500px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }



        .senhaseguranca h1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .senhaseguranca label {
            font-size: 1rem;
            color: #555;
            margin-top: 10px;
        }

        .senhaseguranca input[type="password"] {
            margin-bottom: 15px;
        }

        .buttonel {
            margin-top: 20px;
            text-align: center;
        }

        .buttonel input[type="submit"],
        .buttonel input[type="reset"] {
            width: 48%;
            margin: 5px 0;
            padding: 10px;
            border: none;
            background-color: #008080;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttonel input[type="submit"]:hover,
        .buttonel input[type="reset"]:hover {
            background-color: #005757;
        }

        .esquecisenha {
            text-align: center;
            margin-top: 10px;
        }

        .esquecisenha a {
            color: #008080;
            text-decoration: none;
        }

        .esquecisenha a:hover {
            text-decoration: underline;
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
    
    <div class="form-container">
        <div class="senhaseguranca">
            <h1>Segurança da Conta</h1>
            <p style="color: gray;">Altere a senha atual</p>

            <form action="contrpet.php" method="get">
                <div class="form-group">
                    <label for="Senha">Digite sua senha atual</label>
                    <input type="password" class="form-control" name="Senha" id="Senha" placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                    <label for="NSenha">Digite sua nova senha</label>
                    <input type="password" class="form-control" name="NSenha" id="NSenha" placeholder="Digite a nova senha">
                </div>
                <div class="form-group">
                    <label for="ConfirmarSenha">Confirme sua nova senha</label>
                    <input type="password" class="form-control" name="ConfirmarSenha" id="ConfirmarSenha" placeholder="Confirme a nova senha">
                </div>

                <div class="buttonel form-group">
                    <input type="submit" value="Confirmar" name="Confirmar" class="btn btn-success">
                    <input type="reset" value="Limpar" name="Limpar" class="btn btn-secondary">
                </div>
            </form>

            <div class="esquecisenha">
                Esqueceu sua senha? <a href="#">Clique aqui para redefinir</a>
            </div>
        </div>
    </div>
    <br><br>
    
    <?php include "footer.php"; ?>

</body>
</html>
