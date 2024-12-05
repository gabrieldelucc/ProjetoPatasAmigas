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

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificar se a sessão está iniciada e obter o nome da ONG
$nome_ong = isset($_SESSION['nome_ong']) ? $_SESSION['nome_ong'] : null;

// Consultar informações da ONG correspondente ao nome da sessão
$sql = "SELECT * FROM tb_ong WHERE nome_ong = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nome_ong);
$stmt->execute();
$result = $stmt->get_result();
$ong = $result->fetch_assoc();

// Consultar animais cadastrados
$sql_animais = "SELECT id, nomeAnimal, porteAnimal, etariaAnimal, fotoAnimal FROM cadastroanimal";

$result_animais = $conn->query($sql_animais);

// Fechar a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($ong['nome_ong']) ? $ong['nome_ong'] : 'ONG'; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <style>
    .header {
        background-color: #069690;
        color: white;
        padding: 20px 20px;
        text-align: left;
        margin: 100px auto 0 auto;
        width: 90%;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header img {
        width: 150px;
        height: auto;
        margin-right: 20px;
    }
    .header-content {
        flex: 1;
    }
    .contact-info {
        text-align: right;
    }
    .animal-card {
        margin: 10px 0;
        padding: 10px;
    }
    .animal-card .card {
        width: 100%;
        max-width: 250px;
        margin: 0 auto;
    }
    .animal-card .card-img-top {
        height: 150px;
        object-fit: cover;
    }
    .card-body {
        padding: 10px;
    }
</style>
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header d-flex align-items-center">
        <?php 
        if (!is_null($ong['foto_ong'])) {
            $imagemOngBase64 = base64_encode($ong['foto_ong']);
            $imagemOngSrc = 'data:image/jpeg;base64,' . $imagemOngBase64;
            echo '<img src="' . $imagemOngSrc . '" alt="Logo da ONG">';
        } else {
            echo '<img src="https://via.placeholder.com/150" alt="Imagem não disponível">';
        }
        ?>
        <div class="header-content">
            <h1><?php echo isset($ong['nome_ong']) ? $ong['nome_ong'] : 'Nome da ONG'; ?></h1>
            <p><?php echo isset($ong['slogan']) ? $ong['slogan'] : 'Slogan'; ?></p>
        </div>
        <div class="contact-info">
            <p><?php echo isset($ong['email_ong']) ? $ong['email_ong'] : 'Email não disponível'; ?> / 
            <?php echo isset($ong['telefone_ong']) ? $ong['telefone_ong'] : 'Telefone não disponível'; ?><img src="https://img.icons8.com/?size=100&id=85059&format=png&color=FFFFFF" style="width: 10%; height: 10%;"></p>
            <p><?php echo isset($ong['rua_ong']) ? $ong['rua_ong'] : 'Rua não disponível'; ?>, 
            <?php echo isset($ong['bairro_ong']) ? $ong['bairro_ong'] : 'Bairro não disponível'; ?>, 
            <?php echo isset($ong['cidade_ong']) ? $ong['cidade_ong'] : 'Cidade não disponível'; ?><img src="https://img.icons8.com/?size=100&id=7880&format=png&color=FFFFFF" style="width: 10%; height: 10%;">
        </div>
        
    </header>

    <!-- Seção de Animais -->
    <div class="container">
        <div class="row">
        <div class="d-flex justify-content-between align-items-center mt-4">
            <h2>Animais Disponíveis para Adoção</h2>
            <a href="cadastraranimal.php" class="btn principalcardbutton" style="max-width: 20%; width: 100%; text-align: center;">Adicionar um Novo Animal</a>
        </div>
        <?php
if ($result_animais && $result_animais->num_rows > 0) {
    while ($row = $result_animais->fetch_assoc()) {
        if (!is_null($row['fotoAnimal'])) {
            $imagemBase64 = base64_encode($row['fotoAnimal']);
            $imagemSrc = 'data:image/jpeg;base64,' . $imagemBase64;
            echo '<div class="col-md-4 animal-card">';
            echo '<div class="card">';
            echo '<img src="' . $imagemSrc . '" class="card-img-top" alt="' . htmlspecialchars($row['nomeAnimal']) . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title principalcardtitle2">' . htmlspecialchars($row['nomeAnimal']) . '</h5>';
            echo '<p class="card-text">Porte: ' . htmlspecialchars($row['porteAnimal']) . '</p>';
            echo '<p class="card-text">Idade: ' . htmlspecialchars($row['etariaAnimal']) . '</p>';
            echo '<a href="#" class="btn principalcardbutton">Ver mais</a>';
            echo '<a href="#" class="btn btn_dangercardanimal" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id="' . $row['id'] . '">Remover</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div class="col-md-4 animal-card">';
            echo '<div class="card">';
            echo '<img src="https://cdn-icons-png.flaticon.com/512/194/194279.png" class="card-img-top" alt="Imagem não disponível">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($row['nomeAnimal']) . '</h5>';
            echo '<p class="card-text">Porte: ' . htmlspecialchars($row['porteAnimal']) . '</p>';
            echo '<p class="card-text">Idade: ' . htmlspecialchars($row['etariaAnimal']) . '</p>';
            echo '<a href="#" class="btn principalcardbutton">Ver mais</a>';
            echo '<a href="#" class="btn btn_dangercardanimal" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id="' . $row['id'] . '">Remover</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
} else {
    echo '<div class="col-12"><p>Nenhum animal disponível para adoção no momento.</p></div>';
}
?>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    // Variável para armazenar o ID do animal a ser excluído
    let animalId;

    // Captura o evento de abrir o modal
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('[data-bs-target="#confirmDeleteModal"]');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                animalId = this.getAttribute('data-id');
            });
        });

        // Adiciona evento ao botão de confirmação do modal
        document.getElementById('confirmDeleteButton').addEventListener('click', function() {
            window.location.href = '../backend/usuarios/deletaranimal.php?id=' + animalId; // Redireciona para a exclusão
        });
    });
</script>

    <!-- Modal de confirmacao de deletar registro de animal-->
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmação de Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir este animal?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
