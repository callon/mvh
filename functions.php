<?php
	add_theme_support( 'post-thumbnails' ); 


	// Snippet for setting the permalinks to always be structured through the formula: www.example.com/postname/
	function reset_permalinks() {
	    global $wp_rewrite;
	    $wp_rewrite->set_permalink_structure( '/%postname%/' );
	}
	add_action( 'init', 'reset_permalinks' );
?>