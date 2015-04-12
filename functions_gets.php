<?php

function get_last_post_type($type){
	$args = array( 'post_type' => $type, 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	$results = new WP_Query( $args );
	return $results;
}

function get_segment_project($get_function, $type){
	$result = $get_function($type);
	while ( $result->have_posts() ) : $result->the_post();
	if ( has_post_thumbnail() ) {
		the_post_thumbnail("full", array('class' => "responsive-img"));
	}
	echo "<h2>";
	the_title();
	echo "</h2>";
	echo "<div class='row excerpt'><div class='col s9'>";
	the_excerpt();
	echo "</div>";
	
	echo "<div class='readmore-link center-align col s3'><a href=".get_permalink().">Læs mere her</a></div>";
	endwhile;
}

function get_this_project($type){
	
}

function get_post_from_tag($tag) {
		// The Query
		$results = new WP_Query(array('posts_per_page'=>3, 'tag' => $tag));
		

		// The Loop
		if ( $results->have_posts() ) {
			while ( $results->have_posts() ) {
				$results->the_post();
				echo "<article>";
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail("full", array( 'class' => 'responsive-img' ));
					} 
					echo '<h1>' . get_the_title() . '</h1>';
					the_excerpt();
				echo "</article>";
			}
		} else {
			post_404();
		}
	}


?>