<?php
session_start();
include_once "conexao.php";

$username = $_POST['username'];
$senha = $_POST['passwd'];

$sql = "select * from tb_usuario where login = '$username' and senha = '$senha'";
$resultado = $con->query($sql);

if ($resultado->rowCount()){
    //credenciais válidas
    $_SESSION['login_ativo'] = true;
    Header('Location: index.php');
}else{
    //credenciais inválidas
    $_SESSION['login_ativo'] = false;
    Header('Location: login.php?erro_login=1');
}

die();