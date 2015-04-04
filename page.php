<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<main class="container">
		<article class="row">
			<div class="headline col s12"><h1><?php the_title(); ?></h1></div>
			<div class="text-content col s12 m7"><?php the_content(); ?></div>
<!--Custom-->	<div class="text-techs right-align col s12 m4">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptate quos culpa commodi iusto expedita suscipit esse, placeat. Natus totam libero at accusantium excepturi doloremque quae, vitae dignissimos soluta quod!</p>
				</div>
		</article>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>