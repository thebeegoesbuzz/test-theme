<!DOCTYPE html>   
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?v=1">
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div class="container">
		
		<header role="banner" class="header group">
			<nav id="nav">
				<ul>
					<li id="logo"><a href="/"><?php bloginfo('name'); ?></a></li>
					<li><a href="#nowhere" title="Home">Home</a></li>
				</ul>
			</nav><!-- /#nav  -->
		</header><!-- /header -->
		
		<div class="main-content" role="main">
				
			    <?php if (have_posts()) : ?>
			    <?php while (have_posts()) : ?>
			    
				<?php the_post(); ?>
				
					<article>
						<header>
						<p class="date"><?php the_date(); ?></p>	
						<h1><?php the_title(); ?></h1></header>
						<?php the_content(); ?>
					</article>
					
				<?php  endwhile; ?>
					
				<?php endif; ?>
		    
		</div><!-- /main-content -->
		
		<footer>
		
		</footer><!-- /footer -->
		
	</div><!--!/.container -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
	<script src="js/plugins.js?v=1"></script>
	<script src="js/script.js?v=1"></script>
	<?php wp_footer(); ?> 
	
</body>
</html>
