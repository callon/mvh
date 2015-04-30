<?php get_header("dkb"); ?>
	<main class="container" id="kartotek" name="kartotek">
		<section class='card-index-searches'></section>
		<div class="row">
		<?php the_card(); ?>
		<?php the_card(); ?>
		<?php get_card_from(); ?>
		</div>
	</main>
<?php get_footer("dkb"); ?>