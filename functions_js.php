<?php 
	/* Function that includes the script below - made to be used as the last function in the footer.php */
	function jq_scripts($site_type) {
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
					console.log("init");
					var scrollTop = $(window).scrollTop();
					var stickyNavTop = $("nav").offset().top;
					if (scrollTop > stickyNavTop) { 
						resize_logo("small");
						console.log("SMALL LOGO");
					} else { 
						resize_logo("big");
						console.log("BIG LOGO");
					}
				} else {
					console.log("resize_logo: None");
				}
		
			}

		var recolor_logo = function() {	
			$("svg path").attr("class", "fill-color");
		}

//--------------------- STICKY NAVIGATION SCRIPT ---------------------//
			var stickyNavTop = $('nav').offset().top;
			 
			var stickyNav = function(){
				var scrollTop = $(window).scrollTop();
				      
				if (scrollTop > stickyNavTop) { 
					if($("nav").hasClass( "header-nav" )) {
					    $('nav').addClass('sticky-nav');
					    $('nav').removeClass('header-nav'); 
						
					    $(".link-logo").appendTo("div.navbar-logo");
					    resize_logo("small");
					    console.log("sticky nav small logo");
					}
				} else {
					if($("nav").hasClass( "sticky-nav" )) {
						
					    $('nav').removeClass('sticky-nav');
					    $('nav').addClass('header-nav');

					    $(".link-logo").appendTo("div.header-logo");
					    resize_logo("big");
					    console.log("sticky nav top of site");
					}
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

				        // Remove any invalid XML tags as per http://validator.w3.org
				        $svg = $svg.removeAttr('xmlns:a');

				        // Replace image with new SVG
				        $img.replaceWith($svg);

				        // SET THE WIDTH AND HEIGHT OF THE SVG
				        resize_logo("init"); // THIS IS WHERE WE ENSURE THAT THE SVG IS REAL SIZE WHEN DOC READY
				        recolor_logo();
			
				    }, 'xml');
				  
				});
		
			}
			svg_inline();

//--------------------- PROMOBOX HEIGHT SCRIPT ---------------------//
			var promobox_height = function() {
				$box = $(".promobox");
				$box.height($box.width());
			}
			promobox_height();
	  
//--------------------- HEADER FULLSCREEN SCRIPT ---------------------//	  
			/*Sets the header (hero image) to fullscreen size*/ /*Sets the background image for the header (hero)*/
			$("header").height($(window).height());
	//		$("header").css("background-image", "url(<?php bloginfo('template_url'); ?>/img_temp/header_mvh.jpg)")

//--------------------- SITE DEPENDENT MVH/DKB SCRIPT ---------------------//
			

//--------------------- DROPDOWN SCRIPT ---------------------//	
			// Dropper moves to the left ( the difference in width between dropper and trigger )	
/*			var trig_left = $(".drop-trigger").offset().left;
			var trig_width = $(".drop-trigger").innerWidth();
			var content_width = $("#dropper").innerWidth();
			var new_left = trig_left - ((content_width-trig_width)/2)

			// Dropper top

			var a = $(".drop-trigger").offset().top;
			var b = $("#dropper").height();

			var c = a-b;
			console.log(c);

			$("#dropper").css({"left" : new_left, "top" : c});

			*/

			


			// RESIZE SCRIPTS //
			$( window ).resize(function() {
				promobox_height();
				stickyNav();
			});

			// RESIZE SCRIPTS //
			$(window).scroll(function() {
				stickyNav();
			});


	
// END OF DOC READY //
		});	


		
	</script>
<?php }; ?>