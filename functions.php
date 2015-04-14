<?php
	add_theme_support( 'post-thumbnails' ); 

	// 404 function to link to the 404.php file later.
	function post_404(){
		echo "<h1>Oops, something went wrong and it wasn't even your fault!</h1>";
	}


	// Snippet for setting the permalinks to always be structured through the formula: www.example.com/postname/
	add_action( 'init', 'reset_permalinks' );
	function reset_permalinks() {
	    global $wp_rewrite;
	    $wp_rewrite->set_permalink_structure( '/%postname%/' );
	}

	// allow svg upload in wordpress
	function custom_mtypes( $m ){
	    $m['svg'] = 'image/svg+xml';
	    $m['svgz'] = 'image/svg+xml';
	    return $m;
	}
	add_filter( 'upload_mimes', 'custom_mtypes' );

	include 'functions_custom_wp.php';
	include 'functions_gets.php';
	include 'functions_js.php';
?>
