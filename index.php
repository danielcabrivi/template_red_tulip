<?php
    include_once "conexao.php";

    $sql = 'select * from tb_sites';

    $links = $con->query($sql);
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
				<div class="12u">
					<div id="wrapper-banner">						
						<!-- Banner -->								
						<div id="banner">
							<a href="#"><img src="images/banner2.jpg" alt="banner image" /></a>
						</div>	
					</div>
				</div>						
			</div>		
		
		    <div class="container">						
				<div class="12u">
					<div id="strapline">						
						<h2>Welcome to the CSS3_red_tulip template</h2>
					</div>
				</div>						
			</div>		
		
			<div class="container">			
			
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
						</div>
					</section>

					<section class="8u">				
						
						<h3>Welcome to the CSS3_red_tulip template</h3>
						<p>This simple, fixed width website template is released under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>. This means you are free to download and use it for personal and commercial projects. However, you <strong>must leave the 'design from css3templates.co.uk' link in the footer of the template</strong>.</p>
						<p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS3</strong>.</p>
						<p>You can view more free CSS3 web templates <a href="http://www.css3templates.co.uk">here</a>.</p>
						<p>This template is a fully documented 5 page website, with an <a href="examples.php">examples</a> page that gives examples of all the styles available with this design. There is also a working PHP contact form on the contact page.</p>
						<h3>Browser Compatibility</h3>
						<p>This template has been tested in the following browsers:</p>
						<ul>
							<li>Internet Explorer 9</li>
							<li>FireFox 24</li>
							<li>Google Chrome 31</li>
						</ul>	
						
					</section>						

				</div>
				
			</div>
        </div>	
		
    <?php
    include_once "page_footer.php"
    ?>
			
	</body>
</html>
