<?php

$host = 'mysql:host=db_wordpres2.mysql.dbaas.com.br;dbname=db_wordpres2';
$user = 'db_wordpres2';
$pass = 'qwe123qwe';

$con = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
