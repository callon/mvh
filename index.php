<?php get_header(); ?>

<main class="container">
	<section class="last-project-promo"><?php 
	// Just a test of get_post_from_tag() 
	get_post_from_tag("mvh") ?>
	</section>	
	<section class="about-promo"></section>
	<section class="earlier-projects-promo"></section>
	<section class="actor-records-promo"></section>	
</main>

<?php get_footer(); ?>