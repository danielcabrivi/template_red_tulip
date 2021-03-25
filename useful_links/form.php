<?php

include_once "../conexao.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = 'select * from tb_sites where id = ' . $id;
        $links = $con->query($sql);

        foreach ($links as $link){
            $dados = $link;
        }
    }else{
        $id = 0;
    }

?>
<!DOCTYPE HTML>
<html>
    <?php
    include_once "../page_head.php"
    ?>
	<body>
    <?php
    include_once "../page_header.php"
    ?>

		<div id="site_content">
			<div class="container">

			<!-- Features -->
				<div class="row">
					<section class="12u">
						<h1>Gerenciamento de Conteúdo - USEFUL LINKS</h1><br/>
                        <?= $id ? "<h2>Editar</h2><br/>" : "<h2>Cadastrar</h2><br/>" ?>
                        <form action="salvar.php" method="post">
                            <div class="form_settings">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <p>
                                    <span>Nome do site</span>
                                    <input type="text" name="nome" value="<?= $id ? $dados['nome'] : "" ?>"/>
                                </p>
                                <p>
                                    <span>Url</span>
                                    <input type="text" name="url" value="<?= $id ? $dados['url'] : "" ?>" />
                                </p>
                                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" value="Enviar" /></p>
                            </div>
                        </form>
					</section>
				</div>
		    </div>
		</div>

    <?php
    include_once "../page_footer.php"
    ?>
	</body>
</html>

