<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bodyrockperforma
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
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bodyrockperforma' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<div class="hdr-logo">
				<a href="https://bodyrockperformance.demotoday.info/home/"><img src="<?php echo get_template_directory_uri(); ?>/images/bodylogo.png" /></a>
			</div>
			<div class="menu-section">
				<div class="hero-row">
					<div class="hero-col">
						<div class="phn"><a href="tel:0863422935"><i class="fa-solid fa-phone-volume"></i>0863422935</a>
						</div>
						<div class="email"><a href="#"><i class="fa-regular fa-envelope" \=""></i>info@brp.ie</a></div>
					</div>
					<div class="hero-col">
						<div class="scl-icons">
							<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
							<a href="#"><i class="fa-brands fa-instagram"></i></a>
							<a href="#"><i class="fa-brands fa-tiktok"></i></a>
						</div>
					</div>
				</div>
				<div class="hdr-btton-sec">
					<div class="hdr-menu">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bodyrockperforma' ); ?></button>
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

					<div class="botn">
						<div class="br-buttons">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/body_user.png" /></a>
						</div>
						<div class="hdr-btn">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mdi_cart.png" /></a>
						</div>
					</div>
				</div>

			</div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
</div>