<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greentreearbouri
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">		
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
	
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
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'greentreearbouri' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="header-top">
					<div class="hdr-logo">
							<a href="https://greentreearbourist.demotoday.info/home/"><img src="<?php echo get_template_directory_uri() . '/images/green_logo.png'; ?>" />
							</a>
						</div> 
					<div class="social">
						<div class="email">
						<img src="<?php echo get_template_directory_uri() . '/images/top-email.png'; ?>" />
						<a href="mailto:info@greentreearbourist.com">info@greentreearbourist.com</a>
					</div>
					<div class="phn">
						<img src="<?php echo get_template_directory_uri() . '/images/top-phn.png'; ?>" />
						<a href="tel:1800-256-451">1800-256-451</a>
					</div>
					<div class="insta">
						<img src="<?php echo get_template_directory_uri() . '/images/top-insta.png'; ?>" />
						<a href="#">Request a Consultation</a>

					</div>
					</div>
				</div>
			</div>
				<div class="header-bottom">
<div class="container">
					<div class="site-branding">

						
						<div class="hdr-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'greentreearbouri' ); ?></button>
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

					</div><!-- .site-branding -->
				</div>
			</div>
			</div>
		</header><!-- #masthead -->

