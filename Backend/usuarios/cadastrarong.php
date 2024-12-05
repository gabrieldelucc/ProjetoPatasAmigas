<?php
// CONEXÃO COM O DB
include "../conexao.php";
//RECUPERAR OS VALORES DO FORMULÁRIO
if ($_POST) {
    session_start();

    $nome = $_POST['nome_ong'];
    $slogan = $_POST['slogan_ong'];
    $cnpj = $_POST['ongcnpj'];
    $estado = $_POST['ongestado'];
    $cidade = $_POST['ongcidade'];
    $bairro = $_POST['ongbairro'];
    $rua = $_POST['ongrua'];
    $email_contato = $_POST['ongemail_contato'];
    $senha = $_POST['ongsenha'];
    $confirmar_senha = $_POST['ongsenhac'];
    $telefone = $_POST['ongtelefone'];
    $foto = mysqli_real_escape_string($con, file_get_contents($_FILES['ongimagem']['tmp_name']));
    $tipo = 'ong';

    //VALIDAÇÃO DOS CAMPOS
    //EXEMPLO VALIDAÇÃO
    if ($senha != $confirmar_senha) {
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "As senhas não são iguais!");
        header('Location: ../../frontend/cadastro_ong.php');
        return;
    }
    
    //QUERY INSERT NO DB
    $query = "INSERT INTO tb_ong (nome_ong, slogan, cnpj_ong, estado_ong, cidade_ong, bairro_ong, rua_ong, email_ong, senha_ong, telefone_ong, foto_ong, tipo) VALUES ('$nome', '$slogan', '$cnpj', '$estado', '$cidade', '$bairro', '$rua', '$email_contato', PASSWORD('$senha'), '$telefone', '$foto', '$tipo')";
    //EXECUÇÃO DA QUERY
    $resultado = mysqli_query($con, $query);

    if ($resultado) {
        $_SESSION['msg_erro'] = array("cor" => "success", "msg" => "Ong cadastrado com sucesso!");
        header('Location: ../../frontend/Acessar.php');
    } else {
        echo "Erro ao incluir o usuário!";
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "Erro ao incluir a sua ONG!");
        header('Location: ../../frontend/cadastro_ong.php');
        return;
    }
}
