<?php
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