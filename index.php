<?php get_header(); ?>

<main class="container">
	<section class="last-project-promo"><?php 
		get_segment_project("get_last_post_type", "mvh");
	 ?>
	</section>	
	<hr class="divider">
	<section class="about-promo">ABOUT PROMO</section>
	<hr class="divider">
	<section class="earlier-projects-promo">EARLIER PROJECTS PROMO (3 BOXES)</section>
	<hr class="divider">
	<section class="actor-records-promo">KARTOTEK PROMO</section>	
</main>

<?php get_footer(); ?>