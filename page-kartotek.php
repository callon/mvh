<?php get_header("dkb"); ?>
	<main class="container">
		<section class='card-index-searches'></section>
		<?php get_all_cards(); ?>
		<?php get_new_card(); ?>
	</main>
<?php get_footer("dkb"); ?>