<?php
include_once "../conexao.php";

$id = $_GET['id'];

$sql = 'delete from tb_sites where id = ' . $id;
$con->exec($sql);

Header('Location: index.php');
