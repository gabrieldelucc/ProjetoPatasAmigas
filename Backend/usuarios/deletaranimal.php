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

// Verificar se o ID foi passado
if (isset($_GET['id'])) {
    $idAnimal = $_GET['id'];

    // Preparar a consulta para excluir o animal
    $sql = "DELETE FROM cadastroanimal WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idAnimal);

    if ($stmt->execute()) {
        // Armazenar a mensagem de sucesso na sessão
        $_SESSION['mensagem'] = "Animal excluído com sucesso.";
    } else {
        // Armazenar a mensagem de erro na sessão
        $_SESSION['mensagem'] = "Erro ao excluir o animal: " . $conn->error;
    }

    $stmt->close();
} else {
    $_SESSION['mensagem'] = "ID do animal não fornecido.";
}

// Fechar a conexão
$conn->close();

// Redirecionar de volta para a página anterior
header("Location:../../frontend/perfilOng.php"); // Altere para o nome correto da página
exit;