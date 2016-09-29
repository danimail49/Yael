<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
	<header class="mdl-layout__header">
		<div class="mdl-layout__header-row">
			<!-- Title -->
			<span class="mdl-layout-title bdbg-logo bdbg-logo--main"><?php budabuga_the_custom_logo(); ?></span>
			<!-- Add spacer, to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
			<!-- Navigation. We hide it in small screens. -->
			<?php
			$args = array(
				'container'       => 'nav',
				'container_class' => 'bdbg-menu',
				'menu_class'      => 'mdl-layout--large-screen-only bdbg-menu__main',
				'menu_id'         => 'js-menu-main',
				'echo'            => true,
				'theme_location'  => 'primary',
			);
			wp_nav_menu( $args );
			?>


		</div>
	</header>
	<div class="mdl-layout__drawer">
		<span class="mdl-layout-title"><?php _e( 'Main Menu', 'budabuga' ); ?></span>
		<nav class="mdl-navigation">
			<a class="mdl-navigation__link" href="">Link</a>
			<a class="mdl-navigation__link" href="">Link</a>
			<a class="mdl-navigation__link" href="">Link</a>
			<a class="mdl-navigation__link" href="">Link</a>
		</nav>
	</div>
	<main class="mdl-layout__content">
		<div class="page-content"><!-- Your content goes here -->
			<h1>MENU TEST</h1>
		</div>
	</main>

