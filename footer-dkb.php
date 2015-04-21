	<?php get_footer(); ?>
	
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