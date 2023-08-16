<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package k-telecom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="mobile-menu">
		<?php wp_nav_menu([
			'menu'            => 'main_menu',
			'container'       => 'nav',
			'container_class' => '',
			'container_id'    => 'main-menu__container',
			'menu_id'         => 'main-menu__body',
			'echo'            => true,
		]); ?>
	</div>
	<header class="site-header">
		<div class="wrapper">
			<div class="site-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.svg" alt="логотип сайта">
			</div>
			<button type="button" id="burger-button">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>