<?php
    session_start();
    if (!isset($_SESSION['login_ativo']))
        $_SESSION['login_ativo'] = false;


    if (!$_SESSION['login_ativo'])
        Header('Location: /segundophp/login.php?redirect='.$_SERVER['REQUEST_URI']);

    session_write_close();

    include_once "../conexao.php";

    $sql = 'select * from tb_sites';
    $useful_links = $con->query($sql);
?>
<!DOCTYPE HTML>
<html>
    <?php
    include_once "../page_head.php"
    ?>
	<body>
    <?php
    include_once "../page_header.php";
    ?>

		<div id="site_content">
			<div class="container">

			<!-- Features -->
				<div class="row">
					<section class="12u">
                        <h1>Gerenciamento de Conteúdo - USEFUL LINKS</h1><br/>

                        <h2><a href="form.php">CADASTRAR NOVO</a> </h2>

                        <table style="width:100%; border-spacing:0;">
                            <tr><th>Nome</th><th width="10%">Editar</th><th width="10%">Excluir</th></tr>
                            <?php
                            foreach ($useful_links as $links):
                            ?>
                            <tr><td><?=$links['nome']?></td><td><a href="form.php?id=<?=$links['id']?>">O</a></td><td><a href="excluir.php?id=<?=$links['id']?>">X</a></td></tr>
                            <?php
                            endforeach;
                            ?>
                        </table>
					</section>
				</div>
		    </div>
		</div>

    <?php
    include_once "../page_footer.php"
    ?>
	</body>
</html>
