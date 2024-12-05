<?php
//VERIFICAR OS DADOS EMAIL E SENHA ESTÃO SENDO ENVIADOS PELO FRONTEND
if (isset($_POST)) {
    //CONEXÃO COM O DB
    include "../conexao.php";
    //SOLICITA PERMISSÃO DE USO DE SESSÃO DO NAVEGADOR, PARA ARMAZENAR VARIÁVEIS
    session_start();
    //RECEPCIONAR OS DADOS EMAIL E SENHA
    $email = $_POST['Useremail'];
    $senha = $_POST['Usersenha'];

    //VALIDAÇÕES DOS DADOS RECEPCIONADOS, OU SEJA, VALIDAR SE O EMAIL TEM FORMATO VÁLIDO
    //E SE A SENHA TEM FORMATO VÁLIDO.
    if ($email == "" && $senha == "") {
        $_SESSION['msg_erro'] = "Preencha corretamente os campos!";
        header('Location: ../../frontend/Acessar.php');
    }

    //LOGIN
    //QUERY DE BUSCA
    $query = "SELECT nome_usuario, email_usuario, tipo FROM usuario WHERE email_usuario = '$email' 
                AND senha_usuario = PASSWORD('$senha')";
    $resultado = mysqli_query($con, $query);
    //VERIFICA A QUATIDADE DE REGISTROS
    if (mysqli_num_rows($resultado) == 1) {
        //USUÁRIO VÁLIDO!!
        //RECUPERO OS DADOS QUE O BANCO DE DADOS RETORNOU
        $dados_usuario = mysqli_fetch_array($resultado);
        //UTILIZAR SESSÃO PARA ARMAZENAR E COMPARTILHAR OS DADOS DO USUÁRIOS
        //ENTRE PÁGINAS
        $_SESSION['usuario'] = $dados_usuario;
        $_SESSION['nome_usuario'] = $dados_usuario['nome_usuario'];
        $_SESSION['tipo'] = $dados_usuario['tipo'];
        //REDIRECIONAMENTO PARA A TELA PRINCIPAL
        header('Location: ../../frontend/principal.php');
    } else {
        //E-mail ou senha incorreto
        $_SESSION['msg_erro'] = "E-mail ou senha incorretos!";
        header('Location: ../../frontend/Acessar.php');
    }
} 