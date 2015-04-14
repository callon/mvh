<?php 
	/* Function that includes the script below - made to be used as the last function in the footer.php */
	function jq_scripts() {
 ?>
	 <script>

// DOC READY //
		$(document).ready(function() {

			//--------------------- RESIZE LOGO SCRIPT ---------------------//
			//Resizes the navbar-logo to fit inside the size of the nav
			var resize_logo = function(size) {
				if(size === "big") {
					var x = $("div.header-logo").height();
					$("svg.logo").width(x).height(x);

				} else if(size === "small") {
					var x = $("nav").height();
					$("svg.logo").width(x-4).height(x-4);

				} else if (size === "init") {
					var x = $("div.header-logo").height();
					$("svg.logo").attr('width', x).attr('height', x);
					console.log("Init logo header0");
				} else {
					console.log("resize_logo: None");
				}
			}

//--------------------- STICKY NAVIGATION SCRIPT ---------------------//
			var stickyNavTop = $('nav').offset().top;
			 
			var stickyNav = function(){
				var scrollTop = $(window).scrollTop();
				      
				if (scrollTop > stickyNavTop) { 
				    $('nav').addClass('sticky-nav');
				    $('nav').removeClass('header-nav'); 
				
				    $(".link-logo").appendTo("div.navbar-logo");
				    resize_logo("small");
				} else {
				    $('nav').removeClass('sticky-nav');
				    $('nav').addClass('header-nav');

				    $(".link-logo").appendTo("div.header-logo");
				    resize_logo("big");
				}
			};
			stickyNav();

//--------------------- SVG INLINE SCRIPT ---------------------//
			var svg_inline = function() {
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

				        // set the width and height of the img
		//		        var x = $("div.header-logo").height();
		//		        $svg = $svg.attr('width', x).attr('height', x);
						resize_logo('init');

				        // Remove any invalid XML tags as per http://validator.w3.org
				        $svg = $svg.removeAttr('xmlns:a');

				        // Replace image with new SVG
				        $img.replaceWith($svg);

				    }, 'xml');
				});
			}
			svg_inline();


			
	  
//--------------------- HEADER FULLSCREEN SCRIPT ---------------------//	  
			/*Sets the header (hero image) to fullscreen size*/ /*Sets the background image for the header (hero)*/
			$("header").height($(window).height());
			$("header").css("background-image", "url(<?php bloginfo('template_url'); ?>/img_temp/header_mvh.jpg)")


			// RESIZE SCRIPTS //
			$( window ).resize(function() {
			});

			// RESIZE SCRIPTS //
			$(window).scroll(function() {
			    stickyNav();
			});

// END OF DOC READY //
		});	


		
	</script>
<?php }; ?>