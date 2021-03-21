<?php
include_once "conexao.php";

$sql = 'select * from tb_sites';
$links = $con->query($sql);

$sql = 'select * from tb_outros_sites';
$moreLinks = $con->query($sql);
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

        <div class="container">
            <div class="12u">
                <div id="wrapper-banner">
                    <!-- Banner -->
                    <div id="banner">
                        <a href="#"><img src="images/banner2.jpg" alt="banner image" /></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="row">

            <section class="4u">
                <div id="sidebar">
                    <section class="12u">
                        <h3>Latest News</h3>
                        <h4>New Website Launched</h4>
                        <h5>June 1st, 2014</h5>
                        <p>2014 sees the redesign of our website. <a href="#">Read more</a></p>
                    </section>
                    <section class="12u">
                        <h3>Useful Links</h3>
                        <ul>
                            <?php
                            foreach ($links as $link):
                                ?>
                                <li><a href="<?=$link['url']?>"><?=$link['nome']?></a></li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </section>
                    <section class="12u">
                        <h3>More Useful Links</h3>
                        <ul>
                            <?php
                            foreach ($moreLinks as $link):
                                ?>
                                <li><a href="<?=$link['url']?>"><?=$link['nome']?></a></li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </section>
        </div>
        </section>

            <section class="8u">
                <h2>Cadastro de Useful Links</h2>
                <form action="envia_banco.php" method="get">
                    <div class="form_settings">
                        <p><span>Nome do site</span><input type="text" name="nome" /></p>
                        <p><span>Url</span><input type="text" name="url" /></p>
                        <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" value="Enviar" /></p>
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
