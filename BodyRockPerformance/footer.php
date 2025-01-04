<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bodyrockperforma
 */

?>

	<footer id="colophon" class="site-footer">
		
			<div class="container">
		<div class="site-info">
			<div class="ftr ftr-col1"><a href="https://bodyrockperformance.demotoday.info/">
				<img src="<?php echo get_template_directory_uri() . '/images/bodyrocks_ftr_logo.png'; ?>" /></a>
				<div class="ftr-content">
				<p>Our vision is assisting our clients in any means possible to sustain and reach their health, nutrition and fitness goals.</p>
			</div>
			<div class="advc">
				<p>Need Advice?</p>
			</div>
			<div class="social-icons">
				<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/Unions.png'; ?>" /></a>
				<a href="tel:0863422935">0863422935</a>
			</div>
			</div>
			<div class="ftr ftr-col2">
				<h3>Our Services</h3>
				<div class="ftr-content">
				<ul>
					<li>
                       
						<a href="#">Individual</a>
					</li>
					<li>
						 
						<a href="#">Group</a>
					</li>
					<li>
						<a href="#">InBody Machine </a>
					</li>
					<li>
						<a href="#">28-Day Weight Loss Program</a>
					</li>
					<li>
						<a href="#">Classes</a>
					</li>
					<li>
						<a href="#">Gym Membership</a>
					</li>
					<li>
						<a href="#">Corporate</a>
					</li>
					<li>
						<a href="#">Online Training</a>
					</li>
				</ul>
			</div>

			</div>
			<div class="ftr ftr-col3">
				<h3>Quick Links</h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">
					<ul id=" Footer-menu" class="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			</div>
			<div class="ftr ftr-col4">
				<h3>Newsletter</h3>
				<div class="ftr-content">
				<p>Subscribe to the weekly newsletter for all the latest updates.</p>
				<?php echo do_shortcode("[mc4wp_form id=7]");?>
			</div>
			<div class="socialss-icons">

					
							<a href="#"><i class="fa-brands fa-facebook"></i></a>
							<a href="#"><i class="fa-brands fa-instagram"></i></a>
							<a href="#"><i class="fa-brands fa-tiktok"></i></a>
											</div>
			</div>

		</div><!-- .site-info -->
		<div class="copy-right">
				<p>Copyright © 2024  <a href="https://bodyrockperformance.demotoday.info/"> Body Rock Performance. </a>All Rights Reserved</p>
			</div>
	</div>
		
	</footer><!-- #colophon -->

<script>
$('#hero-slider').owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  autoplaySpeed:3500,
  dots: false,
  nav: false,
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
$('#client-slider').owlCarousel({
  items:3,
  loop:true,
  margin:4,
  autoplay:true,
  autoplaySpeed:2500,
  nav: true,
  dots: true,
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
      items: 2,
    },
    992:{
      items: 2,
    },
    1200:{
      items: 2,
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
  		items: 3
  	},
  	992:{
  		items: 3
  	},
  	1200:{
  		items: 3
  	}
  }
});
</script>
<?php wp_footer(); ?>

</body>
</html>
