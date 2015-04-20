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
	<section class="earlier-projects-promo">
		<h4>Tidligere projekter</h4>
<?php
	// FÅ FASTSAT OG HENTET RESTEN I PHP - BRUG VARIABLER TIL AT GIVE SHIT FRA FØRSTE QUERY VIDERE TIL TITLERNE!
 ?>
		<div class="row">
			<div class="promobox promo"><div class="promo-content" style="background-image: url(<?php 
				$result = get_last_post_type("mvh");
				the_project_img_url($result);?>);"></div>
			</div>
			<div class="promobox promo"><div class="promo-content" style="background-image: url(<?php 
				$result = get_last_post_type("dkb");
				the_project_img_url($result);?>);"></div></div>
			<div class="promobox promo"><div class="promo-content border-helper">TEKST TESTKSKST</div></div>
		</div>
		<div class="row">
			<div class="promo"><h5>Tekst tekst</h5></div>
			<div class="promo"><h5>Tekst tekst</h5></div>
			<div class="promo"><h5>Tekst tekst</h5></div>
	</section>
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
	?>
		<div class="slider">
			<div id="slider-1"><?php the_card() ?></div>
		</div>
		
	</section>
</main>
<?php get_footer(); ?>