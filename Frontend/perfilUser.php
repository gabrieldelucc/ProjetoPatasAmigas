<html>
    <body>
        <?php include "menu.php"; ?>
    </body>
</html>

<?php
// Configurações do banco de dados
$host = 'localhost';
$db = 'tcc_clovis2';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome_usuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : null;

$sql = "SELECT * FROM usuario WHERE nome_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nome_usuario);
$stmt->execute();
$result = $stmt->get_result();
$ong = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="estilos2.css">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos3.css">

    <style>
        body {
            background-color: #f0f8ff;
        }
        .usuariocontainer {
            margin: 50px auto;
            padding: 30px;
            max-width: 800px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            border: 10px;
            border-color: #005757;
            border-style: solid;
            border-radius: 5px;
        }

        .usuarioimg {
            flex: 1;
            margin-right: 30px;
        }

        .usuarioimg img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
        }

        .usuarioinfo {
            flex: 2;
        }

        .usuarioinfo h1 {
            color: #333;
            font-weight: bolder;
            font-size: larger;
        }

        .usuarioinfo p {
            font-size: larger;
            color: #555;
            margin-bottom: 10px;
        }
        usuarioinfo hr {
            color:black;
        }

        .buttonel {
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: white;
        }

        .buttonel a {
            display: inline-block;
            width: 100%;
            margin: 5px 0;
            padding: 10px;
            border: none;
            background-color: #008080;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="usuariocontainer">
        <div class="usuarioimg">
            <img src="https://www.portaldodog.com.br/wp-content/uploads/2019/03/studio-shot-cute-border-collie-dog_23-2148097503.jpg">
        </div>
        <div class="usuarioinfo">
            <h1>Nome: <?php echo isset($ong['nome_usuario']) ? $ong['nome_usuario'] : 'Nome do usuario'; ?></h1>
            
            <hr>
            <h1>CPF: <?php echo isset($ong['cpf_usuario']) ? $ong['cpf_usuario'] : 'Cpf'; ?></h1>
            
            <hr>
            <h1>Email: <?php echo isset($ong['email_usuario']) ? $ong['email_usuario'] : 'email do usuario'; ?></h1>
            
            <hr>
            <h1>Cidade: <?php echo isset($ong['cidade_usuario']) ? $ong['cidade_usuario'] : 'Cidade não disponível'; ?></h1>
          
            <hr>
            <h1>UF:  <?php echo isset($ong['uf_usuario']) ? $ong['uf_usuario'] : 'UF não disponível'; ?></h1>
            
            <hr>
            

        

            <div class="buttonel">
                <a href="informacoesconta.php">Editar suas informações</a>
            </div>
        </div>
    </div>

</body>

</html>
