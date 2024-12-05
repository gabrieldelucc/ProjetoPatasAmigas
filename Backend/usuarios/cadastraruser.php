<?php
// CONEXÃO COM O DB
include "../conexao.php";
//RECUPERAR OS VALORES DO FORMULÁRIO
if ($_POST) {
    session_start();

    $nome = $_POST['Usernome'];
    $email = $_POST['Useremail'];
    $cpf = $_POST['Usercpf'];
    $cidade = $_POST['Usercidade'];
    $UF = $_POST['Useruf'];
    $senha = $_POST['Usersenha'];
    $confirmar_senha = $_POST['Usersenhac'];
    $tipo = 'usuario';

    //VALIDAÇÃO DOS CAMPOS
    //EXEMPLO VALIDAÇÃO
    if ($senha != $confirmar_senha) {
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "As senhas não são iguais!");
        header('Location: ../../frontend/cadastro_usuario.php');
        return;
    }
    //QUERY INSERT NO DB
    $query = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, cidade_usuario, UF_usuario, cpf_usuario, tipo) VALUES ('$nome', '$email', PASSWORD('$senha'), '$cidade', '$UF', '$cpf', '$tipo')";
    //EXECUÇÃO DA QUERY
    $resultado = mysqli_query($con, $query);

    if ($resultado) {
        $_SESSION['msg_erro'] = array("cor" => "success", "msg" => "Usuário cadastrado com sucesso!");
        header('Location: ../../frontend/Acessar.php');
    } else {
        echo "Erro ao incluir o usuário!";
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "Erro ao incluir o usuário!");
        header('Location: ../../frontend/cadastro_usuario.php');
        return;
    }
}
