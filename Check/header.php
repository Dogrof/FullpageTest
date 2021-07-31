<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div class="preloader-container wow fadeInDown">
		<div class="inner-container">
			<h2 class="preloader-text" data-text="AUREC CAPITAL">AUREC CAPITAL</h2>
			<div class="preloader-percent"><span class="percent-counter"></span>%</div>
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/yellow_circle.svg" alt="" data-wow-delay="1s" class="circle yellow wow fadeIn">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/red_circle.svg" alt="" data-wow-delay="1.3s" class="circle red wow fadeIn">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/darkBlue_circle.svg" alt="" data-wow-delay="1.6s" class="circle darkBlue wow fadeIn">
		</div>
	</div>	
	<div class="fader"></div>
	<div class="menu-container active">
    	<div class="inner-container">
			<div class="menu-header">
				<div class="menu-logo">
					<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?= get_bloginfo('template_url') ?>/assets/images/logo_black.svg" alt="" class="logo-dark">
					</a>
				</div>
				<div class="right-menu-part">
						<a href="<?php echo home_url('#contact_us'); ?>" class="contacts">Contact Us</a>
						<img src="<?= get_bloginfo('template_url') ?>/assets/images/cross.svg" alt="" class="cross">
				</div>
			</div>
			<div class="left-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'left-menu',
							'menu_id'        => 'left-menu',
						)
					);
				?>
			</div>
			<div class="bottom-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'lower-menu',
							'menu_id'        => 'lower-menu',
						)
					);
				?>
			</div>
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/yellow_circle.svg" alt="" data-wow-delay="1s" class="circle yellow wow fadeIn">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/red_circle.svg" alt="" data-wow-delay="1s" class="circle red wow fadeIn">
    	</div>
    </div>
<header>
	<div class="inner-container common-flex">
		<a href="<?php echo home_url(); ?>" class="logo">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/logo.svg" alt="" class="logo-white">
		</a>
		<div class="scroll-nav">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/circle.png" alt="" class="circle darkBlue">
		</div>
		<div class="menu">
			<img src="<?= get_bloginfo('template_url') ?>/assets/images/menu.png" alt="" class="menu-btn">
		</div>
	</div>
	
</header>

