<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greentreearbouri
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
		<div class="site-info">
	<div class="ftr ftr-col1"><a href="https://wesandflloors.demotoday.info/">
				<img src="<?php echo get_template_directory_uri() . '/images/green_logo.png'; ?>" /></a>
				<div class="ftr-content">
				<p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Maecenas in interdum tortor, ac<br> efficitur mi. Donec posuere tortor erat, id tempus <br>ex porttitor sit amet.</p>
			</div>
			</div>
			<div class="ftr ftr-col4">
				<h3>Site Map</h3>
				<div class="ftr-content"><ul id=" Footer-menu" class="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Testimonials</a></li>
						
						<li><a href="#">Projects</a></li>
						<li><a href="#">Drawings for Planning</a></li>
						<li><a href="#">Contact Us</a></li>
						
					</ul>
			</div>
			</div>
				<div class="ftr ftr-col3">
				<h3>Quick Links</h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">
					<ul id=" Footer-menu" class="menu">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact Us</a></li>
						
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
			</div>
			</div>


			<div class="ftr ftr-col2">
				<h3>Contact Us</h3>
				<div class="ftr-content">
				<ul>
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/ftr-location.png'; ?>" />
						<p>20 Wilton Gardens, Wilton Rd, Cork</p>
					</li>
					<li>
                        <img src="<?php echo get_template_directory_uri() . '/images/ftr-phone.png'; ?>" />
						 <a href="tel:021 434 1996">Phone: 021 434 1996</a>
   <!--  <a href="tel:086 869 2633">Mob: 086 869 2633</a> -->
					</li>
					<li>
						 <a href="tel:086 869 2633">Mob: 086 869 2633</a>
						</li>
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/ftr-email.png'; ?>" />
						<a href="mailto:greentreearbourist@gmail.com">greentreearbourist@gmail.com</a>
					</li>
					
				</ul>
			</div>

			</div>
		
		</div><!-- .site-info -->
		<div class="copy-right">
				<p>Copyright © 2024  <a href="https://greentreearbourist.demotoday.info/">Green Tree Arbourist.</a>All Rights Reserved.</p>
			</div>
	</div>
</footer><!-- #colophon -->


<?php wp_footer(); ?>
<script>
$('#hero-slider').owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  autoplaySpeed:3500,
  dots: false,
  nav: true,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  responsiveClass: true,
  responsive: {
    320:{
      items: 1
    },
    480:{
      items: 1
    },
    768:{
      items: 1
    },
    992:{
      items: 1
    },
    1200:{
      items: 1
    }
}
});
</script>
<script>
$('#icon-script').owlCarousel({
  items:3,
  loop:true,
  margin:0,
  autoplay:false,
  autoplaySpeed:2500,
  dots: false,
  nav: false,
  responsiveClass: true,
  responsive: {
    320:{
      items: 1,
      autoplay:true,
    },
    480:{
      items: 1,
      autoplay:true,
    },
    768:{
      items: 3,
    },
    992:{
      items: 3,
    },
    1200:{
      items: 3,
    }
   }
});
</script>
<script>
	$('#trusred-slider').owlCarousel({
		items:7,
		loop:true,
		margin:20,
		autoplay:true,
		autoplaySpeed:3500,
		dots: false,
		nav: false,
  // animateOut: 'fadeOut',
  // animateIn: 'fadeIn',
  responsiveClass: true,
  responsive: {
  	320:{
  		items: 1
  	},
  	480:{
  		items: 1
  	},
  	768:{
  		items: 5
  	},
  	992:{
  		items: 5
  	},
  	1200:{
  		items: 5
  	}
  }
});
</script>
</body>
</html>
