<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<main class="container">
		<article class="row">
			<div class="headline col s12"><h1><?php the_title(); ?></h1></div>
			<div class="text-content col s12 m7"><?php the_content(); ?></div>
<!--Custom-->	<div class="text-techs right-align col s12 m4 offset-m1">
					<p>Med Venlig Hilsen<br /><br />Adresse:<br />Dansehallerne<br />Bomstuen 22, 2. TV<br />14450 København K<br /><br />CVR: 777-7777-777<br /><br />Kontakt os:<br />contact@mvh.dk<br />+45 12 23 34 45</p>
				</div>
		</article>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>