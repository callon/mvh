	<?php get_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/magnific-popup.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/materialize.js"></script>
	
	<?php jq_scripts("dkb"); ?>

	<script>
	<?php 
			$site_type = "dkb";
			if($site_type === "mvh") { 
				echo "$('svg path').attr('class', 'mvh-fill-color');";
			} else if ($site_type === "dkb") {
				echo "$('svg path').attr('class', 'dkb-fill-color');";
			}
	?>
	</script>
</body>
</html>