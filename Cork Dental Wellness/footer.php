<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corkdentalwellne
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<div class="three_ftr_items">
				<div class="frst_ftr_item">
					<a href="https://corkdentalwellness.demotoday.info/home/"><img src="<?php echo get_template_directory_uri() . '/images/corkdental_ftr_logo.png'; ?>" /></a>
				</div>
				<div class="second_ftr_item"><p>Subscribe for Newsletter</p></div>
				<div class="thrd_ftr_item">
					<?php echo do_shortcode("[mc4wp_form id=35]");?>
				</div>
			</div>
			<div class="four_columns">
				<div class="ftr ftr-col1">
					<div class="ftr-content contact-info">

						<div class="contact-item  first_content">
							<div class="contact-item-img">
							<img src="<?php echo get_template_directory_uri() . '/images/cork_phn.png'; ?>" />
						</div>
							<div class="contact-item-content">
							<h4><a href="#">(0) 123456789</a></h4>
							<p>Got Questions? Call us 24/7</p>
						</div>
						</div>
						<div class="contact-item">
							<h4>Our Address</h4>
							<p>Lorem Road, 123 dummy, Cork, Ireland</p>
						</div>
						<div class="contact-item">
							<h4>Email</h4>
							<p> <a href="#">name@yourmail.com</a></p>
						</div>
						<div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a> 
                    </div>
					</div>	



				</div>
				<div class="ftr ftr-col2">
					<h3>Quick Links</h3>
					<div class="ftr-content">
						<ul>
							<li>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">About Us</a>
							</li>

							<li>
								<a href="#">Testimonials</a>
							</li>

							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="ftr ftr-col3">
					<h3>Services</h3>
					<div class="ftr-content">
						<ul>
							<li>
								<a href="#">Dental Implants</a>
							</li>
							<li>
								<a href="#">Orthodontic Services</a>
							</li>
							<li>
								<a href="#">oral surgery</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="ftr ftr-col4">
					<h3>Work Hours</h3>
					<div class="kt-lst">
						<div class="hours">
							<div class="day">
								<span class="day-name">Mon - Wed:</span>
								<span class="day-hours">09.00 AM - 02.00 PM</span>
							</div>
							<div class="day">
								<span class="day-name">Thur - Fri:</span>
								<span class="day-hours">10.00 AM - 01.00 PM</span>
							</div>
							<div class="day">
								<span class="day-name">Saturday:</span>
								<span class="day-hours">09.00 AM - 02.00 PM</span>
							</div>
							<div class="day">
								<span class="day-name">Sunday:</span>
								<span class="day-hours">Closed</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- .site-info -->
		
	</div>
	<div class="copy-right">
		<p>Copyright © 2024   <a href="https://corkdentalwellness.demotoday.info/">Cork Dental Wellness. </a>All Rights Reserved</p>
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
  nav: false,
  dots: false,
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
  		items: 2
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
