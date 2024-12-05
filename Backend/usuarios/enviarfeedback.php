<?php
// CONEXÃO COM O DB
include "../conexao.php";
//RECUPERAR OS VALORES DO FORMULÁRIO
if ($_POST) {
    session_start();

    $motivo = $_POST['Denúncia'];
    $motivod = $_POST['motivod'];
    $acusado = $_POST['User'];
    $data = $_POST['datadoocorrido'];
    $descricao = $_POST['descricao'];

    //QUERY INSERT NO DB
    $query = "INSERT INTO tb_reclamacoes (Motivo, MotivoD, Descricao, Acusado, dataocorrido) VALUES ('$motivo', '$motivod', '$descricao', '$acusado', '$data')";
    //EXECUÇÃO DA QUERY
    $resultado = mysqli_query($con, $query);

    if ($resultado) {
        $_SESSION['msg_erro'] = array("cor" => "success", "msg" => "Usuário cadastrado com sucesso!");
        header('Location: ../../frontend/feedback.php');
    } else {
        echo "Erro ao incluir o usuário!";
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "Erro ao incluir o usuário!");
        header('Location: ../../frontend/feedback.php');
        return;
    }
}
