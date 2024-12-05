<?php
// CONEXÃO COM O DB
include "../conexao.php";
//RECUPERAR OS VALORES DO FORMULÁRIO
if ($_POST) {
    session_start();

    $nome = $_POST['nomeanimal'];
    // $raca = $_POST[''];
    $especie = $_POST['especie'];
    $porte = $_POST['porte'];
    $sexo = $_POST['sexo'];
    $etaria = $_POST['faixa_etaria'];
    $desc = $_POST['descricao'];
    
    $foto = mysqli_real_escape_string($con, file_get_contents($_FILES['imagemanimal']['tmp_name']));
    
    //VALIDAÇÃO DOS CAMPOS
    //QUERY INSERT NO DB
    $query = "INSERT INTO cadastroanimal (nomeAnimal, especieAnimal, porteAnimal, sexoAnimal, etariaAnimal, descricaoAnimal, fotoAnimal) VALUES ('$nome', '$especie', '$porte', '$sexo', '$etaria', '$desc', '$foto')";
    //EXECUÇÃO DA QUERY
    $resultado = mysqli_query($con, $query);

    // REDIRECIONAMENTO PARA A TELA PRINCIPAL
    header('Location: ../../frontend/perfilOng.php');
    exit();
    if ($resultado) {
        $_SESSION['msg_erro'] = array("cor" => "success", "msg" => "Usuário cadastrado com sucesso!");
        header('Location: ../../frontend/cadastraranimal.php');
    } else {
        echo "Erro ao incluir o animal!";
        $_SESSION['msg_erro'] = array("cor" => "danger", "msg" => "Erro ao incluir o usuário!");
        header('Location: ../../frontend/cadastraranimal.php');
        return;
    }
}
