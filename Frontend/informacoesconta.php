<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">

    <style>
        
        /* Css temporario aqui, só pra n fundir com o do cauã dnv ;() */
        body {
            background-color: #f0f8ff;
        }

        .form-container {
            margin: 50px auto;
            padding: 30px;
            max-width: 600px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-group h1 {
            font-size: 1rem;
            color: #333;
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

        .menubar1 {
  grid-area: "menu";

  position: fixed;
  left: 0;

  display: flex;
  flex-direction: column;

  padding-inline: 1rem;
  padding-block: 0.75rem;
  gap: 0.25rem;

  max-width: 9rem;

  list-style: none;

  background-color: #706f6f;
}

.menubar1 > li {
   max-width: 80%; 

  position: relative;

  font-weight: 400;

  cursor: pointer;

  text-wrap: wrap;
  overflow-wrap: break-word;
  -ms-word-wrap: break-word;
  word-wrap: break-word;
}

.menubar > li:hover {
   width: 128.5%; 
}

.menubar > li::before {
  content: "";

  position: absolute;
  left: calc(6.5% * -2.25);

  width: 8%;
  height: 100%;

  background-color: rgb(0 0 0 / 50%);

  opacity: 0;

  transition: width 300ms ease-out, left 300ms ease-in;
}

.menubar > li[data-active]::before {
  opacity: 1;
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

    
   <div class="Imgpessoa">
      <img src="pessoa.jpg"> </img>

           
   </div>

        
        </div>
    </div>

    
    <div class="form-container">
        <form action="contrpet.php" method="get">
            <div class="form-group">
                <label for="imagem">Adicionar/Alterar Imagem:</label>
                <input type="file" id="imagem" name="imagem" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                <h1>Nome:</h1>
                <input type="text" name="Nome" id="Nome" class="form-control" placeholder="Digite o nome completo">
            </div>
            <div class="form-group">
                <h1>CPF:</h1>
                <input type="number" name="CPF" id="CPF" class="form-control" placeholder="Digite o CPF completo">
            </div>
            <div class="form-group">
                <h1>Email:</h1>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email">
            </div>
            <div class="form-group">
                <h1>Cidade:</h1>
                <input type="text" name="Cidade" id="Cidade" class="form-control" placeholder="Digite a cidade">
            </div>
            <div class="form-group">
                <h1>UF:</h1>
                <input type="text" name="uf" id="uf" class="form-control" placeholder="Digite o UF" maxlength="2">
            </div>
            <div class="buttonel form-group">
                <input type="submit" value="Confirmar" name="Confirmar" class="btn btn-success">
                <input type="reset" value="Limpar" name="Limpar" class="btn btn-secondary">
            </div>
        </form>
    </div>

    
    
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['Confirmar'])) {
    
    
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $email = $_GET['email'];
    $cidade = $_GET['cidade'];
    $uf = $_GET['UF'];

    
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem = $_FILES['imagem']['name'];
        $caminhoImagem = 'uploads/' . $imagem;

        
        move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);
    } else {
        $caminhoImagem = null; 
    }

    
    $sql = "INSERT INTO cadastro (nome, cpf, email, cidade, UF, imagem) VALUES (:nome, :cpf, :email, :cidade, :uf, :imagem)";
    $stmt = $pdo->prepare($sql);
    
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':uf', $uf);
    $stmt->bindParam(':imagem', $caminhoImagem);
    
    
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados.";
    }
}
?>
    <?php include "footer.php" ?>

</body>

</html>
