<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package danhowarddemotod
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
		<div class="site-info">
			<div class="ftr ftr-col1"><a href="/">
      <a href="<?php echo get_site_url();?>"><img src="<?php echo get_field('footer_logo','Options')['url'];?>" alt="<?php echo get_field('footer_logo','Options')['alt'];?>" /></a>
				<div class="ftr-content">
				<?php echo get_field('footer_text','Options');?>
			</div>
			    
			</div>
			<div class="ftr ftr-col4">
				<h3>Useful Link</h3>
				<div class="ftr-content"><ul id=" Footer-menu" class="menu">
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'Useful Link',
				)
			);
			?>			
					</ul>
			</div>
			</div>
				<div class="ftr ftr-col3">
				<h3>Explore</h3>
				<div class="ftr-content">
				<div class="menu-footer-menu-container">
					<ul id=" Footer-menu" class="menu">
          <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'Explore',
				)
			);
			?>
						
					</ul>
				</div>
			</div>
			</div>


			<div class="ftr ftr-col2">
				<h3>Contact Us</h3>
				<div class="ftr-content">
				<ul>
					<li>
          <img src="<?php echo get_field('footer_address_image','Options')['url'];?>" alt="<?php echo get_field('footer_address_image','Options')['alt'];?>" />
						<p><?php echo get_field('footer_address','Options');?></p>
					</li>
					<li>
          <img src="<?php echo get_field('footer_phone_image','Options')['url'];?>" alt="<?php echo get_field('footer_phone_image','Options')['alt'];?>" />
						 <a href="tel:<?php echo get_field('footer_phone','Options');?>"><?php echo get_field('footer_phone','Options');?></a>
   
					</li>
				
					<li>
          <img src="<?php echo get_field('footer_email_image','Options')['url'];?>" alt="<?php echo get_field('footer_email_image','Options')['alt'];?>" />
						<a href="mailto:<?php echo get_field('footer_email','Options');?>"><?php echo get_field('footer_email','Options');?></a>
					</li>
					
				</ul>
				<div class="social-icon">
        <?php if(have_rows('footer_social_icon','Options')): while(have_rows('footer_social_icon','Options')): the_row(); ?>
		           <a href="<?php echo get_sub_field('icon')['url'];?>" target="_blank"><i class="<?php echo get_sub_field('icon')['title'];?>"></i></a>
               <?php endwhile; endif;?>         
				</div>
			</div>
			</div>
		</div><!-- .site-info -->
	</div>
	<div class="copy-right">
  <p>Copyright © <?php echo date('Y');?>  <a href="<?php echo get_site_url();?>">Dan Howard and Co. Ltd.</a>All Rights Reserved.</p>
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
$('#property-slider').owlCarousel({
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
<?php wp_footer(); ?>

</body>
</html>
