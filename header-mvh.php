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


	<style>
<?php 
	$args = array( 'post_type' =>   array( 'look' ), 'tag' => 'settings_color_look', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	$results = new WP_Query( $args );
	
	while ( $results->have_posts() ) : $results->the_post();
		$mvh_color = get_field("mvh_color");
		$dkb_color = get_field("dkb_color");
?>
		.mvh-text-color { color: <?php echo $mvh_color; ?>; }
		.mvh-background-color { background-color: <?php echo $mvh_color; ?>; }
		.mvh-border-color { border-color: <?php echo $mvh_color; ?>; }
		.mvh-fill-color { fill: <?php echo $mvh_color; ?>;}

		.dkb-text-color { color: <?php echo $dkb_color; ?>; }
		.dkb-background-color { background-color: <?php echo $dkb_color; ?>; }
		.dkb-border-color { border-color: <?php echo $dkb_color; ?>; }
		.dkb-fill-color { fill: <?php echo $dkb_color; ?>;}
	</style>
	<?php endwhile; ?>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<header>
	<div class="header-logo">
		<a href="<?php bloginfo('url'); ?>" class="link-logo"><img class="svg logo" src="<?php bloginfo('template_url'); ?>/img_temp/black_logo.svg"></a>
	</div>
	<!-- navbar placeholder - Work In Progress -->
	<nav class="mvh-border-color header-nav">
    	<div class="nav-wrapper">
     		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
     		<ul><li><a href="<?php bloginfo('url'); ?>/dkb/">Det Kolde Bord</a></li></ul>
			<?php wp_page_menu( array( "menu_class" => "left side-nav" ) ); ?>
			<div class="navbar-logo right"></div>
		</div>
	</nav>
</header>

	
