<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foro
 */

?>

<?php $footer_settings = get_option('my_theme_footer_settings'); ?>

<footer id="colophon" class="site-footer">

<div class="container">
	<div class="site-info">			
	<div class="ftr ftr-col1">	
	<a href="<?php echo get_site_url();?>"><img src="<?php echo esc_url($footer_settings['footer_logo']); ?>" alt="Footer Logo"></a>
				<div class="ftr-content">
				<p><?php echo esc_html($footer_settings['description_text']); ?></p>
				
			</div>
			<div class="social-icon">
				<a href="<?php echo esc_url($url); ?>" target="_blank"><i class="fa-brands fa-linkedin <?php echo esc_attr($icon_class); ?>"></i></a>	
			</div>
			</div>

			<div class="ftr ftr-col4">
				<h3><?php echo esc_html($footer_settings['footer_title_text1']);?></h3>
				<div class="ftr-content">
					<ul id=" Footer-menu" class="menu">
					<?php 
                     wp_nav_menu(
						array(
							'theme_location' => 'footer_menu2',
							'menu_id'        => 'site-map'
						)
					 )
					?>						
					</ul>
			</div>
			</div>
				<div class="ftr ftr-col3">
				<h3><?php echo esc_html($footer_settings['footer_title_text2']);?></h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">					
					<ul id=" Footer-menu" class="menu">
					<?php
                          wp_nav_menu(
                            array(
                              'theme_location' => 'footer_menu1',
                              'menu_id'        => 'Useful-link',
                            )
                          );
                          ?>
					</ul>
				</div>
			</div>
			</div>

			<div class="ftr ftr-col2">
				<h3><?php echo esc_html($footer_settings['footer_title_text3']);?></h3>
				<div class="ftr-content">
				<ul>
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/foro_ftr-location.png'; ?>" />
						<p><?php echo esc_html($footer_settings['address_text']);?></p>
					</li>
					<li>
                        <img src="<?php echo get_template_directory_uri() . '/images/foro_ftr-phone.png'; ?>" />
						<p><a href="tel:<?php echo esc_html($footer_settings['phone_number']); ?>"><?php echo esc_html($footer_settings['phone_number']);?></a></p>
					</li>
				
					<li>
						 <img src="<?php echo get_template_directory_uri() . '/images/foro_ftr-email.png'; ?>" />
                      <p><a href="mailto:<?php echo esc_html($footer_settings['email_text']); ?>"><?php echo esc_html($footer_settings['email_text']); ?></a></p>
						
					</li>	
				</ul>
			</div>
			</div>	
	</div>

		</div><!-- .site-info -->
		<div class="copy-right">
			<p><?php echo esc_html($footer_settings['copyright_text']); ?> <a href="<?php echo get_site_url();?>">Foro</a> | All Rights Reserved</p>
				
			</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
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
  		items: 6
  	},
  	1200:{
  		items: 7
  	}
  }
});
</script>
</body>
</html>














