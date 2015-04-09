<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.min.css">
	<link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?>>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/materialize.min.js"></script>
	
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<header>
	<!-- navbar placeholder - Work In Progress -->
		<nav>
	    	<div class="nav-wrapper">
<!-- logo -->	<a href="<?php bloginfo('url'); ?>" class="brand-logo right"><img class="svg navbar-logo" src="<?php bloginfo('template_url'); ?>/img_temp/black_logo.svg"></a>
	     		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
<!-- menu -->	<?php wp_nav_menu( array( 'container' => false, "menu_class" => "left side-nav" ) ); ?>
			</div>
		</nav>
</header>




<!-- STICKY NAV: http://www.hongkiat.com/blog/css-sticky-position/ -->