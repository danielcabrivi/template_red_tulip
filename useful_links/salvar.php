<?php

session_start();
if (!isset($_SESSION['login_ativo']))
    $_SESSION['login_ativo'] = false;


if (!$_SESSION['login_ativo'])
    Header('Location: /segundophp/login.php?redirect='.$_SERVER['REQUEST_URI']);

session_write_close();

include_once "../conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$url = $_POST['url'];

if ($id){
    $sql = 'update tb_sites set nome = "'.$nome.'", url = "'.$url.'" where id = ' . $id;
}else{
    $sql = 'insert into tb_sites (nome, url) values ("' . $nome . '","' . $url . '")';
}

$con->exec($sql);

Header('Location: index.php');