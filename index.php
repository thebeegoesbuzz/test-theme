<!DOCTYPE html>   
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css?v=1">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div id="container">
		<header>
			<ul id="nav">
				<li><a href="#nowhere" title="Home">Home</a></li>
			</ul><!-- /#nav  -->
		</header><!-- /header -->
		
		<section id="main">
			
			<?php

if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

?>		
		</section><!-- /main -->
		
		<footer>
		
		</footer><!-- /footer -->
	</div><!--!/#container -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
	<script src="js/plugins.js?v=1"></script>
	<script src="js/script.js?v=1"></script>
</body>
</html>
