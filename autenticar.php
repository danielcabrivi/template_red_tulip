<?php

include_once "conexao.php";

$username = $_POST['username'];
$senha = $_POST['passwd'];

$sql = "select * from tb_usuario where login = '$username' and senha = '$senha'";
$resultado = $con->query($sql);

if ($resultado->rowCount()){
    $_SESSION['login_ativo'] = true;
}else{
    //credenciais inválidas
    $_SESSION['login_ativo'] = false;
    Header('Location: login.php?erro_login=1');
}

die();