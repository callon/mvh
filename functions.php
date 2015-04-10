<?php
	add_theme_support( 'post-thumbnails' ); 


	// Snippet for setting the permalinks to always be structured through the formula: www.example.com/postname/
	function reset_permalinks() {
	    global $wp_rewrite;
	    $wp_rewrite->set_permalink_structure( '/%postname%/' );
	}
	add_action( 'init', 'reset_permalinks' );
?>


<?php 
	/* Function that includes the script below - made to be used as the last function in the footer.php */
	function jq_scripts() {
 ?>
	 <script>

// DOC READY //
		$(document).ready(function() {

//--------------------- STICKY NAVIGATION SCRIPT ---------------------//
			var stickyNavTop = $('nav').offset().top;
			 
			var stickyNav = function(){
				var scrollTop = $(window).scrollTop();
				      
				if (scrollTop > stickyNavTop) { 
				    $('nav').addClass('sticky-nav');
				    $('nav').removeClass('header-nav'); 
				} else {
				    $('nav').removeClass('sticky-nav');
				    $('nav').addClass('header-nav');
				}
			};
			stickyNav();

//--------------------- SVG INLINE SCRIPT ---------------------//
			function svg_inline() {
			/*
			 * Replace all SVG images with inline SVG
			 */
				jQuery('img.svg').each(function(){
				    var $img = jQuery(this);
				    var imgID = $img.attr('id');
				    var imgClass = $img.attr('class');
				    var imgURL = $img.attr('src');

				    jQuery.get(imgURL, function(data) {
				        // Get the SVG tag, ignore the rest
				        var $svg = jQuery(data).find('svg');

				        // Add replaced image's ID to the new SVG
				        if(typeof imgID !== 'undefined') {
				            $svg = $svg.attr('id', imgID);
				        }
				        // Add replaced image's classes to the new SVG
				        if(typeof imgClass !== 'undefined') {
				            $svg = $svg.attr('class', imgClass+' replaced-svg');
				        }

				        // set the width and height of the image
				        var x = $("nav").height();
				        $svg = $svg.attr('width', x).attr('height', x);

				        // Remove any invalid XML tags as per http://validator.w3.org
				        $svg = $svg.removeAttr('xmlns:a');

				        // Replace image with new SVG
				        $img.replaceWith($svg);

				    }, 'xml');
				});
			}
			svg_inline();


			//--------------------- RESIZE LOGO SCRIPT ---------------------//
			//Resizes the navbar-logo to fit inside the size of the nav
			function resize_logo() {
				var x = $("nav").height();
				$("svg.navbar-logo").width(x).height(x);
			}
			resize_logo();
	  
//--------------------- HEADER FULLSCREEN SCRIPT ---------------------//	  
			/*Sets the header (hero image) to fullscreen size*/ /*Sets the background image for the header (hero)*/
			$("header").height($(window).height());
			$("header").css("background-image", "url(<?php bloginfo('template_url'); ?>/img_temp/header_mvh.jpg)")


			// RESIZE SCRIPTS //
			$( window ).resize(function() {
				resize_logo();
			});

			// RESIZE SCRIPTS //
			$(window).scroll(function() {
			    stickyNav();
			    resize_logo();
			});

// END OF DOC READY //
		});	


		
	</script>
<?php }; ?>