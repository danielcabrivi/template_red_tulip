<?php
if(isset($_GET['erro_login'])){
    $erro = "ERRO: Login ou senha inválidos !!!!";
}else{
    $erro = "";
}

if(isset($_GET['redirect'])){
    $redireciona = $_GET['redirect'];
}else{
    $redireciona = '/segundophp/index.php';
}

?>

<!DOCTYPE HTML>
<html>
<?php
include_once "page_head.php"
?>
<body>
<?php
include_once "page_header.php"
?>

<div id="site_content">
    <div class="container">

        <!-- Features -->
        <div class="row">
            <section class="12u">
                <h1>LOGIN</h1><br/>
                <h2><?=$erro?></h2>
                <form action="autenticar.php?redirect=<?=$redireciona?>" method="post">
                    <div class="form_settings">
                        <p>
                            <span>Usuário</span>
                            <input type="text" name="username"/>
                        </p>
                        <p>
                            <span>Senha</span>
                            <input type="password" name="passwd"/>
                        </p>
                        <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" value="Logar" /></p>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<?php
include_once "page_footer.php"
?>
</body>
</html>
