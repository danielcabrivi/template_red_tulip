<?php
    include_once "conexao.php";

    $nome = $_GET['nome'];
    $url = $_GET['url'];

    echo $nome;
    echo "<br>";
    echo $url;
    echo "<br>";

    $sql = 'insert into tb_sites (nome, url) values ("' . $nome . '","' . $url . '")';
    echo $sql;

    $con->exec($sql);

    Header('Location: contato.php');