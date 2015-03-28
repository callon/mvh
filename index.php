<?php get_header(); ?>


<?php /* start of the loop */
 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class="entry">
  	<?php the_content(); ?>
  </div>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; 
/* End of the loop */ ?>

<?php get_footer(); ?>