<?php get_header("mvh"); ?>

<main class="container">
	<section class="last-project-promo"><?php 
		$last_post_type = get_segment_project("get_last_post_type", "mvh");
	 ?>
	</section>	
	<hr class="background-color divider">
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
	<hr class="background-color divider">
	<section class="earlier-projects-promo">
		<h4>Tidligere projekter</h4>
<?php
		// The first box	
		$params = array( 'post_type' =>   array( 'mvh' ), 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC', "offset" => 1 );	
		$first_box = new WP_Query($params);
		while ( $first_box->have_posts() ) : $first_box->the_post();
			$first_id = get_the_ID();
		endwhile;

		// The second box
		$second_box = get_last_post_type("dkb");
		while ( $second_box->have_posts() ) : $second_box->the_post();
			$second_id = get_the_ID();
		endwhile;

	
 ?>
		<div class="row">
			<div class="promobox promo"><div class="promo-content" style="background-image: url(<?php the_project_img_url($first_box); ?>);"></div>
			</div>
			<div class="promobox promo"><div class="promo-content" style="background-image: url(<?php the_project_img_url($second_box); ?>);"></div></div>
			<div class="promobox promo"><div class="promo-content recruitment border-helper"><h5>Har du lyst til at deltage i Det Kolde Bord?</h5><div class="link"><a href="#">Læs mere her</a></div></div></div>
		</div>
		<div class="row">
			<div class="promo"><a href="<?php echo get_permalink($first_id) ?>#top"><h5><?php echo get_the_title($first_id); ?></h5></a></div>
			<div class="promo"><a href="<?php echo get_permalink($second_id) ?>#top"><h5><?php echo get_the_title($second_id) ?></h5></a></div>
		</div>
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
<?php get_footer("mvh"); ?>