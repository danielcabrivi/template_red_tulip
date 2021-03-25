<?php
session_start();

$_SESSION['login_ativo'] = false;

Header('Location: index.php');
