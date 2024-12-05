<?php
// VERIFICAR OS DADOS EMAIL E SENHA ESTÃO SENDO ENVIADOS PELO FRONTEND
if (isset($_POST)) {
    // CONEXÃO COM O DB
    include "../conexao.php";
    // SOLICITA PERMISSÃO DE USO DE SESSÃO DO NAVEGADOR, PARA ARMAZENAR VARIÁVEIS
    session_start();
    
    // RECEPCIONAR OS DADOS EMAIL E SENHA
    $email = $_POST['Ongemail'];
    $senha = $_POST['Ongsenha'];

    // VALIDAÇÕES DOS DADOS RECEPCIONADOS
    if ($email == "" || $senha == "") {
        $_SESSION['msg_erro'] = "Preencha corretamente os campos!";
        header('Location: ../../frontend/Acessar.php');
        exit();
    }

    // LOGIN
    // QUERY DE BUSCA
    $query = "SELECT nome_ong, email_ong, tipo FROM tb_ong WHERE email_ong = '$email' 
                AND senha_ong = PASSWORD('$senha')";
    $resultado = mysqli_query($con, $query);

    // VERIFICA A QUANTIDADE DE REGISTROS
    if (mysqli_num_rows($resultado) == 1) {
        // USUÁRIO VÁLIDO!!
        // RECUPERO OS DADOS QUE O BANCO DE DADOS RETORNOU
        $dados_usuario = mysqli_fetch_array($resultado);
        
        // UTILIZAR SESSÃO PARA ARMAZENAR E COMPARTILHAR OS DADOS DO USUÁRIO ENTRE PÁGINAS
        $_SESSION['usuario'] = $dados_usuario;
        $_SESSION['nome_ong'] = $dados_usuario['nome_ong']; // Armazenando o nome da ONG na sessão
        $_SESSION['tipo'] = $dados_usuario['tipo'];

        // REDIRECIONAMENTO PARA A TELA PRINCIPAL
        header('Location: ../../frontend/PerfilOng.php');
        exit();
    } else {
        // E-mail ou senha incorreto
        $_SESSION['msg_erro'] = "E-mail ou senha incorretos!";
        header('Location: ../../frontend/Acessar.php');
        exit();
    }
}
