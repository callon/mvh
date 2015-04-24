<?php

function get_last_post_type($type){
	if($type === "mvh") {
		$args = array( 'post_type' =>   array( 'mvh', 'dkb' ), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	} else {
		$args = array( 'post_type' => $type, 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	}
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

function get_segment($tag) {
	$args = array( 'post_type' => 'segment', 'tag' => $tag );
	$result = new WP_Query( $args );
	return $result;
}

function the_facts() {
	echo "<h5>"; 
	the_field("facts_headline");
	echo "</h5>";
	the_field("facts");
}



function the_card() {
	$args = array('post_type' => 'card', 'posts_per_page' => 1);
	$card = new WP_Query( $args );

	while ( $card->have_posts() ) : $card->the_post();
		$name = get_field("card_name");
		$job = get_field("job");
		$contact = get_field("contact");
		$projects = get_field("projects");

		$headshot_img = get_field("headshot_image");
		$img_arr = wp_get_attachment_image_src( $headshot_img, 'headshot' );

		
		echo "<div class='row'>";
			echo "<div class='business-card col s6 offset-s3 valign-wrapper'>";
				echo "<div class='no-line-height col s4'><img class='circle headshot responsive-img' src=".$img_arr[0]."></div>";
				echo "<div class='card-info valign row col s8'>";
					echo "<div class='col s3'>Navn:</div><div class='col s9'>".$name."</div>";
					echo "<div class='col s3'>Job:</div><div class='col s9'>".$job."</div>";
					echo "<div class='col s3'>Email:</div><div class='col s9'>".$contact."</div>";
					echo "<div class='text-color col s12'>Det Kolde Bord #".$projects."</div>";
		echo "</div></div></div>";
	endwhile;

}

function get_all_cards() {

}

function get_card_from() {

}


function get_promo_boxes($recruiting = false) {
	if($recruiting) {
		//DO STUFF IF RECRUTING IS TRUE
	} else {
		//
	}

}

function get_look($site) { ?>
	<style>
<?php 
	$args = array( 'post_type' =>   array( 'look' ), 'tag' => 'settings_color_look', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	$results = new WP_Query( $args );
	
	while ( $results->have_posts() ) : $results->the_post();
		if($site === "mvh") {
			$color = get_field("mvh_color");
			$header_img = get_field("mvh_header_img");
		} else if ($site === "dkb") {
			$color = get_field("dkb_color");
			$header_img = get_field("dkb_header_img");
		} ?>
		
		.text-color { color: <?php echo $color; ?>; }
		.background-color { background-color: <?php echo $color; ?>; }
		.border-color { border-color: <?php echo $color; ?>; }
		.fill-color { fill: <?php echo $color; ?>;}

		nav li a:hover, nav li a:active, li.current_page_item a {color: <?php echo $color; ?>;}
		a {color: <?php echo $color; ?>;}
	</style>

	<?php 
	return $header_img;
	endwhile; 
}

function get_nav($site) {
	$args = array( 'post_type' =>   array( 'look' ), 'tag' => 'settings_color_look', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC' );
	$results = new WP_Query( $args );
	$url = home_url();
	
	while ( $results->have_posts() ) : $results->the_post();
		$dkb_logo = get_field("dkb_logo");
		$mvh_logo = get_field("dkb_logo");

	?>
	
			

		<?php


		if($site === "mvh") { 
			echo "<div class='header-logo right-logo'>";
				echo "<a href='".$url."' class='right link-logo'><img class='svg logo' src='".$mvh_logo."'></a>";
			echo "</div>";
			echo "<nav class='border-color header-nav'><div class='left-margin nav-wrapper'>";
				echo "<ul class='left'>";
					echo "<li><a href='".$url."/dkb/'>Det Kolde Bord</a></li>";
					echo "<li><a href='#' class='drop-trigger' data-activates='dropper'>Projekter</a></li>"; // Dropdown activator
					echo "<li><a href='".$url."'>Om os</a></li>";
				echo "</ul>";
				echo "<div class='navbar-logo right-margin'></div>";
			echo "</div></nav>";
			// DROPDOWN CONTENT
				echo "<ul id='dropper' class='dropdown-content'>";
					echo "<li><a href='#'>BLBLBLBLa BLb adasdas Projekt</a></li>";
					echo "<li><a href='#'>Næstsidste</a></li>";
					echo "<li><a href='#'>Arkiv</a></li>";
				echo "</ul>";



		} else if($site === "dkb") {
			echo "<div class='header-logo left-logo'>";
				echo "<a href='".$url."/dkb/' class='left link-logo'><img class='svg logo' src='".$dkb_logo."'></a>";
			echo "</div>";
			echo "<nav class='border-color header-nav'><div class='right-margin nav-wrapper'>";
				echo "<ul class='right'>";
					echo "<li><a href='".$url."'>Med Venlig Hilsen</a></li>";
				echo "</ul>";
				echo "<div class='navbar-logo left-margin'></div>";
			echo "</div></nav>";
		}
		?>
		
		     		
		     
					
<?php	endwhile; 	
} // end of get_nav();

function the_project_img_url($project) {
	$result = $project;
	while ( $result->have_posts() ) : $result->the_post();
		if ( has_post_thumbnail() ) {
			$post_thumbnail_id = get_post_thumbnail_id( $post_id );
			$img = wp_get_attachment_image_src( $post_thumbnail_id, "large" );
			echo $img[0];
		}
	endwhile;
}

?>