<?php
session_start();
//verificar se a sessão se usuário existe
if (isset($_SESSION['usuario']) == false) {
    //se não existir a sessão de usuário, rediciona login
    header('Location: ../frontend/principal2.php');
}
