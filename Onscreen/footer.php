<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onscreen
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
	<div class="ftr ftr-col1"><a href=" https://onscreen.demotoday.info/">
				<img src="<?php echo get_template_directory_uri() . '/images/onscreen_logo.png'; ?>" /></a>
				<div class="ftr-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Aenean ullamcorper mauris ac justo cursus luctus.<br>Nunc nec imperdiet leo, a facilisis nisi. Cras suscipit<br>efficitur dui interdum dignissim. Cras semper dolor<br>vitae bibendum laoreet. </p>
			</div>
			    <div class="social-icon">
		           <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
		            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
		             <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
				</div>
			</div>
			<div class="ftr ftr-col4">
				<h3>Site Map</h3>
				<div class="ftr-content"><ul id=" Footer-menu" class="menu">
						<li><a href="https://onscreen.demotoday.info/">Home</a></li>
						<li><a href="https://onscreen.demotoday.info/?page_id=23">Corporate Videos</a></li>
						<li><a href="#">Product Demonstration</a></li>
						<li><a href="#">Service Demonstration</a></li>
						<li><a href="#">Recruitment video</a></li>
						<li><a href="#">TV</a></li>
						<li><a href="https://onscreen.demotoday.info/?page_id=9">Projects</a></li>
						
					</ul>
			</div>
			</div>
				<div class="ftr ftr-col3">
				<h3>Quick Links</h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">
					<ul id=" Footer-menu" class="menu">
						<li><a href="https://onscreen.demotoday.info/?page_id=49">About</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="https://onscreen.demotoday.info/?page_id=51">Reviews</a></li>
						<li><a href="https://onscreen.demotoday.info/?page_id=55">Blog</a></li>
						<li><a href="https://onscreen.demotoday.info/?page_id=53">Contact</a></li>
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
						 <img src="<?php echo get_template_directory_uri() . '/images/onscreen_loc.png'; ?>" />
						<p>Suite 10114, 5 Fitzwilliam Square,<br>Dublin 2, Ireland, DO2R744</p>
					</li>
					<li>
                        <img src="<?php echo get_template_directory_uri() . '/images/onscreen_phn.png'; ?>" />
						 <a href="tel:086 328 2515">086 328 2515</a>
   
					</li>
				
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/onscreen_email.png'; ?>" />
						<a href="mailto:info@onscreen.ie">info@onscreen.ie</a>
					</li>
					
				</ul>
			</div>

			</div>
		
		</div><!-- .site-info -->
		
	</div>
	<div class="copy-right">
				<p>Copyright © 2024  <a href="https://onscreen.demotoday.info/">ONSCREEN.</a>All Rights Reserved.</p>
			</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
<script>
	$('#trusred-slider').owlCarousel({
		items:6,
		loop:true,
		margin:0,
		autoplay:true,
		autoplaySpeed:3500,
		dots: false,
		nav: false,
  // animateOut: 'fadeOut',
  // animateIn: 'fadeIn',
  responsiveClass: true,
  responsive: {
  	320:{
  		items: 2
  	},
  	480:{
  		items: 2
  	},
  	768:{
  		items: 5
  	},
  	992:{
  		items: 6
  	},
  	1200:{
  		items: 6
  	}
  }
});
</script>
<script>
	$('#red-slider').owlCarousel({
		items:6,
		loop:true,
		margin:0,
		autoplay:true,
		autoplaySpeed:3500,
		dots: false,
		nav: false,
  // animateOut: 'fadeOut',
  // animateIn: 'fadeIn',
  responsiveClass: true,
  responsive: {
  	320:{
  		items: 2
  	},
  	480:{
  		items: 2
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
$('#vdeo-slider').owlCarousel({
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
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();



</script>






</body>
</html>


