<?php get_header(); ?>

<main class="container">
	<section class="last-project-promo"><?php 
		get_segment_project("get_last_post_type", "mvh");
	 ?>
	</section>	
	<hr class="mvh-background-color divider">
	<section class="about-promo">
	<?php
		$result = get_segment("mvh_segment2");
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
	<hr class="mvh-background-color divider">
	<section class="earlier-projects-promo">EARLIER PROJECTS PROMO (3 BOXES)</section>
	<hr class="mvh-background-color divider">
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
		the_card();
	?>
	</section>
</main>

<?php get_footer(); ?>