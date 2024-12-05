<?php
//LOGOUT DO USUÁRIO
session_start();
session_destroy();
header('Location: ../../frontend/Acessar.php');
