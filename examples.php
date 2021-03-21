<?php
    include_once "conexao.php";

    $sql = 'select * from tb_pais';
    $paises = $con->query($sql);

    $id = $_GET['id'];

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
									<li><a href="#">First Link</a></li>
									<li><a href="#">Another Link</a></li>
									<li><a href="#">And Another</a></li>
									<li><a href="#">Last One</a></li>
								</ul>
							</section>
							<section class="12u">
								<h3>More Useful Links</h3>
								<ul>
									<li><a href="#">First Link</a></li>
									<li><a href="#">Another Link</a></li>
									<li><a href="#">And Another</a></li>
									<li><a href="#">Last One</a></li>
								</ul>
							</section>
						</div>
					</section>					
					
					<section class="8u">						
						<h1>Examples</h1>
						<p>This page contains examples of all the styled elements available as part of this design. Use this page for reference, whilst you build your website.</p>
						<h2>Headings</h2>
						<p>These are the different heading formats:</p>
						<h1>Heading 1</h1>
						<h2>Heading 2</h2>
						<h3>Heading 3</h3>
						<h4>Heading 4</h4>
						<h5>Heading 5</h5>
						<h6>Heading 6</h6>
						<h2>Text</h2>
						<p>The following examples show how the text (within '&lt;p&gt;&lt;/p&gt;' tags) will appear:</p>
						<p><strong>This is an example of bold text</strong></p>
						<p><i>This is an example of italic text</i></p>
						<p><a href="#">This is a hyperlink</a></p>
						<h2>Lists</h2>
						<p>This is an unordered list:</p>
							<ul>
								<li>Item 1</li>
								<li>Item 2</li>
								<li>Item 3</li>
								<li>Item 4</li>
							</ul>
						<p>This is an ordered list:</p>
							<ol>
								<li>Item 1</li>
								<li>Item 2</li>
								<li>Item 3</li>
								<li>Item 4</li>
							</ol>
						<h2>Images</h2>
						<p>images can be placed on the left, in the center or on the right:</p>
						<span class="left"><img src="images/graphic.jpg" alt="example graphic" /></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum.
						</p>
						<span class="center"><img src="images/graphic.jpg" alt="example graphic" /></span>
						<span class="right"><img src="images/graphic.jpg" alt="example graphic" /></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur.</p>
						<h2>Tables</h2>
						<p>Tables should be used to display data and not used for laying out your website:</p>
						<table style="width:100%; border-spacing:0;">
						<tr><th>Sigla</th><th>Nome</th><th>Excluir</th></tr>
						<tr><td>Item 1</td><td>Description of Item 1</td><td><a href="">X</a> </td></tr>
						<tr><td>Item 2</td><td>Description of Item 2</td><td><a href="">X</a> </td></tr>
						<tr><td>Item 3</td><td>Description of Item 3</td><td><a href="">X</a> </td></tr>
						<tr><td>Item 4</td><td>Description of Item 4</td><td><a href="">X</a> </td></tr>
						</table>
						<h2>Form Elements</h2>
						<form action="#" method="post">
							<div class="form_settings">
								<p><span>Form field example</span><input type="text" name="name" value="" /></p>
								<p><span>Textarea example</span><textarea rows="8" cols="50" name="name"></textarea></p>
								<p><span>Checkbox example</span><input class="checkbox" type="checkbox" name="name" value="" /></p>

                                <p><span>Dropdown list example</span>
                                    <select id="id" name="name">
                                        <?php
                                        foreach ($paises as $pais):
                                        ?>
                                        <option value="<?=$pais['id']?>>"><?=$pais['nome']?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </p>

								<p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="button" /></p>
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
