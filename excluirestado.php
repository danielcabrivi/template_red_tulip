<?php
include_once "conexao.php";

$id = $_GET['id'];

$sql = 'delete from tb_estados where id = ' . $id;
$con->exec($sql);

Header('Location: examples.php');
