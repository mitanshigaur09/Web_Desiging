<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onscreen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">		
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'onscreen' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="hero-top">
			<div class="hero-col">
							<div class="hero-col-content">
								<ul>
									<li><a href="https://onscreen.demotoday.info/?page_id=49">About</a></li>
									<li><a href="#">Testimonials</a></li>
									<li><a href="https://onscreen.demotoday.info/?page_id=51">Reviews</a></li>
									<li><a href="https://onscreen.demotoday.info/?page_id=55">Blog</a></li>
									<li><a href="https://onscreen.demotoday.info/?page_id=53">Contact</a></li>
								</ul>
							</div>
							<div class="hero-col-icons">
							 <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
		                     <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
		                     <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
							</div>

						</div>
		</div>
		<div class="site-branding">
			<div class="hdr-logo">
					<a href="https://onscreen.demotoday.info/"><img src="<?php echo get_template_directory_uri() . '/images/hdr_onscreen_logo.jpg'; ?>" />
					</a>
				</div>
				<div class="hdr-menu">
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'onscreen' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>
	<div class="icon_btn_sect">
						<a href="#">Request a Consultation</a>
		</div><!-- .site-branding -->
</div>
		
	</header><!-- #masthead -->
