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

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

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

<?php
// $header_drawer_class = ( ! get_theme_mod( 'bdbg_header_showdrawer' ) ) ? 'mdl-layout--no-desktop-drawer-button' : '';
// $container_classes = ( ! get_theme_mod( 'bdbg_header_fixed' ) ) ? 'has-scrolling-header' : '';
// $header_classes = ( ! get_theme_mod( 'bdbg_header_fixed' ) ) ? 'mdl-layout__header--scroll' : '';
// $header_show_search = ( get_theme_mod( 'bdbg_header_showsearch' ) ) ? true : false;
$header_direction = bdbg_header_layout();

?>

<header role="banner" class="bdbg-header navbar-fixed">
	<nav class="bdbg-nav" role="navigation">
		<div class="nav-wrapper container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				class="brand-logo bdbg-logo <?php echo esc_html( $header_direction['from'] ); ?>"><?php bdbg_logo( 'bdbg_logo_header' ); ?></a>
			<a href="#" data-activates="mobile-demo"
				class="button-collapse <?php echo esc_html( $header_direction['from'] ); ?>"><i class="fa fa-bars" aria-hidden="true"></i></a>

			<?php bdbg_menus( 'main', esc_html( $header_direction['to'] ) ); ?>

			<!-- <ul class="bdbg-nav bdbg-nav--side side-nav right" role="navigation" id="mobile-demo">
				<li class="menu-item"><a href="#">Link Item</a></li>
				<li class="menu-item"><a href="#">Link Item</a></li>
				<li class="menu-item">
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">First</div>
							<div class="collapsible-body">
								<ul>
									<li><a href="#">Menu-Item</a></li>
									<li class="active"><a href="#">Menu-Item</a></li>
									<li><a href="#">Menu-Item</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li class="menu-item"><a href="#">Link Item</a></li>
			</ul> -->

			<?php bdbg_menus( 'side', esc_html( $header_direction['to'] ) ); ?>


		</div>
		<!-- /.nav-wrapper container -->
	</nav>
	<!-- /.bdbg-nav -->
</header>
