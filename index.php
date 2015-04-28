<?php get_header("dkb"); ?>
<main class="container">
	<section class="last-project-promo"><?php 
		$last_post_type = get_segment_project("get_last_post_type", "dkb");
	 ?>
	</section>	
	<hr class="background-color divider">
	<section class="about-promo">
	<?php
		$result = get_segment("dkb_segment2");
		while ( $result->have_posts() ) : $result->the_post();
		echo "<h3>";
		the_title();
		echo "</h3>";
		echo "<div class='row valign-wrapper'><div class='col m7 s12'>";
		the_content();
		echo "</div><div class='valign col m5 s12'><a href='#'>";
		if ( has_post_thumbnail() ) { 
			the_post_thumbnail(array("class" => " svg responsive-img"));
		} 
		echo "</a></div>";
		endwhile;
	?>
	</section>
	<hr class="background-color divider">
	<section class="recruitment-promo">
		<div class="row">
		<?php
			$result = get_segment("dkb_segment3");
			while ( $result->have_posts() ) : $result->the_post();
			echo "<h3 class='center-align'>";
			the_title();
			echo "</h3><div class='center-align col s10 offset-s1 m6 offset-m3'>";
			the_content();
			echo "</div>";
			endwhile;
	?>
		</div>
	</section>
	<hr class="background-color divider">
	<section class="older-project-promo">
	<?php
		$args = array( 'post_type' => "dkb", 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC', "offset" => 1 );
		$result = new WP_Query( $args );
	
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
		
		echo "<div class='readmore-link center-align col s3'><a href=".get_permalink()."#top>Læs mere her</a></div>";
		endwhile;

	?>
	</section>
	<hr class="background-color divider">
	<section class="actor-records-promo row">
	<?php
		$result = get_segment("mvh_segment4");
		while ( $result->have_posts() ) : $result->the_post();
		echo "<h3 class='center-align'>";
		the_title();
		echo "</h3>";
		echo "<div class='center-align col s6 offset-s3'>";
		the_content();
		echo "</div>";
		endwhile;

		// JUST A TEST OF CARD DESIGN
	?>
		<div class="slider">
			<div id="slider-1"><?php the_card() ?></div>
		</div>
		
	</section>
</main>

<?php get_footer("dkb"); ?>