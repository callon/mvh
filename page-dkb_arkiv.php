<?php get_header("dkb"); ?>

<main class="container archive">
	<h3 style="margin-top: 20px">Arkiv</h3>
	<?php
		// set the "paged" parameter (use 'page' if the query is on a static front page)
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		// the query
		$the_query = new WP_Query( array( 'post_type' => 'dkb', 'paged' => $paged, 'posts_per_page' => 3 ) ); 
		?>

		<?php if ( $the_query->have_posts() ) : ?>

		<?php
			// the loop
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
		?>
			<section class="archive">

		<?php
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
		?>

			</section>
			<?php if (($the_query->current_post +1) != ($the_query->post_count)) {
					echo '<hr class="background-color divider">';
			} ?>
			

		<?php endwhile; ?>
			
		<?php

			$big = 999999999; // need an unlikely integer

			echo "<div class='row'><div class='pagination col s12 center-align'>";
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $the_query->max_num_pages
				) );
			echo "</div></div>";

				// clean up after the query and pagination
				wp_reset_postdata(); 
		?>

		<?php else:  ?>
		<p><?php _e( 'Beklager, der er ingen projekter at vise' ); ?></p>
		<?php endif; ?>
	
</main>

<?php get_footer("dkb"); ?>