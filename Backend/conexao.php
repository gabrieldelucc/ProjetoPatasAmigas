<?php

$servername = "localhost";
$database = "tcc_clovis2";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Erro ao conectar com o banco de dados");
}
