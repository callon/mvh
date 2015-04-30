<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('description'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/materialize.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/magnific-popup.min.js"></script>
	
	<link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?>>
	<?php 
		$header_img = get_look("mvh"); 
	?>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<header style="background-image: url(<?php echo $header_img; ?>);">
	<!-- navbar placeholder - Work In Progress -->
	<?php get_nav("mvh") ?>
</header>
