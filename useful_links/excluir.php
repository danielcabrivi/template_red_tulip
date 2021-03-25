<?php

session_start();
if (!isset($_SESSION['login_ativo']))
    $_SESSION['login_ativo'] = false;


if (!$_SESSION['login_ativo'])
    Header('Location: /segundophp/login.php?redirect='.$_SERVER['REQUEST_URI']);

session_write_close();

include_once "../conexao.php";

$id = $_GET['id'];

$sql = 'delete from tb_sites where id = ' . $id;
$con->exec($sql);

Header('Location: index.php');
