<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Montanum
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
		<div class="site-info">
			<div class="ftr ftr-col1"><a href="https://montanum.demotoday.info/home/">
				<img src="<?php echo get_template_directory_uri() . '/images/montanum_ftr_logo.png'; ?>" /></a>
				<div class="ftr-content">
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>
			</div>
			<div class="social-icons">
				<!-- <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/Facebook.png'; ?>" /></a> -->
				<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			
			</div>
			</div>
			
			<div class="ftr ftr-col3">
				<h3>Information</h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">
					<ul id=" Footer-menu" class="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			</div>
			<div class="ftr ftr-col4">
				<h3>Services</h3>
				<div class="ftr-content">
					<ul>
				<li><a href="#">Selling a Business</a></li>
						<li><a href="#">Buying a Business</a></li>
						<li><a href="#">Funding Transactions</a></li>
						<li><a href="#">Planning for Sale</a></li>
					</ul>
			</div>
			</div>
<div class="ftr ftr-col2">
				<h3>Contact</h3>
				<div class="ftr-content">
				<ul>
					
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/montanum_ftr_email.png'; ?>" />
						<a href="mailto:info@montanum.ie">info@montanum.ie</a>
					</li>
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/montanum_ftr_loc.png'; ?>" />
						<p>5 Mount Street Upper,Dublin 2 D02 AW82,Ireland</p>
					</li>
				</ul>
			</div>

			</div>
		</div><!-- .site-info -->
		<div class="copy-right">
				<p>Copyright © 2024  <a href="https://montanum.demotoday.info/home/">Montanum Advisory</a>.All Rights Reserved</p>
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
  dots: true,
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

</body>
</html>
