<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foro'); ?></a>

		<?php $header_settings = get_option('my_theme_header_settings'); ?>

		<header id="masthead" class="site-header">

			<div class="hero-top">
				<div class="container">
					<div class="hero-row">
						<div class="hero-col">
							<div class="txt">
								<p><?php echo esc_html($header_settings['title_text']); ?></p>
							</div>
							<div class="email"><a href="mailto:<?php echo esc_html($header_settings['email_texts']); ?>"><i class="fa-regular fa-envelope"
										\></i><?php echo esc_html($header_settings['email_texts']); ?></a></div>
						</div>
						<div class="hero-col">
							<!-- <div class="phn"><a href="tel:<?php //echo esc_html($header_settings['phone_numbers']); ?>"><i
										class="fa-solid fa-phone-volume"></i><?php //echo esc_html($header_settings['phone_numbers']); ?></a>
							</div> -->
							<div class="linkdin">
								<p>Follow on:<a href="<?php echo esc_url($url); ?>" target="_blank"><i
											class="fa-brands fa-linkedin <?php echo esc_attr($icon_class); ?>"></i></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">

				<div class="site-branding">
					<div class="hdr-logo">
						<a href="<?php echo get_site_url(); ?>"><img
								src="<?php echo esc_url($header_settings['header_logo']); ?>" alt="Header Logo"></a>
					</div>
					<div class="hdr-menu">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu"
								aria-expanded="false"><?php esc_html_e('Primary Menu', 'foro'); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="icon_btn_sect">
						<?php if (!empty($header_settings['repeater_items']) && is_array($header_settings['repeater_items'])): ?>
							<?php foreach ($header_settings['repeater_items'] as $item): ?>
								<?php if (!empty($item['button_link']) && !empty($item['button_text'])): ?>
									<div class="creemy-btn">
										<a data-toggle="modal" data-target="#exampleModal"
											href="<?php echo esc_url($item['button_link']); ?>"><?php echo esc_html($item['button_text']); ?></a>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>


					</div>



		</header><!-- #masthead -->