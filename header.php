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
	<script src="<?php echo THEMEDIR_URI; ?>js/preloader.js"></script>
  	<link href="<?php echo THEMEDIR_URI; ?>css/preloader.css" rel="stylesheet" />
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
$header_direction = bdbg_header_layout();
$header_fixed_class = ( bdbg_get_theme_mod( 'bdbg_header_general_fixed' ) ) ? 'navbar-fixed' : '';
?>

<header role="banner" class="bdbg-header <?php echo $header_fixed_class; ?>">
	<ul id="bdbg-menu-side"
		class="bdbg-menu bdbg-menu--side <?php echo esc_html( $header_direction['from'] ); ?>
		side-nav">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
			class="bdbg-logo bdbg-logo--side"><?php bdbg_logo( 'bdbg_header_logo_side' ); ?></a>

		<?php bdbg_menus( 'side', $header_direction ); ?>
	</ul>
	<nav class="bdbg-nav" role="navigation">
		<div class="nav-wrapper container">
			<?php
			if ( bdbg_get_theme_mod( 'bdbg_header_search_display' ) ) :
				echo '<ul class="' . esc_html( $header_direction['to'] ) . '"><li><a href="#" class="bdbg-iconbutton bdbg-js-search"><i class="fa fa-search" aria-hidden="true"></i></a></li></ul>';
			endif;
			?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				class="brand-logo bdbg-logo bdbg-logo--main <?php echo esc_html( $header_direction['from'] ); ?>"><?php bdbg_logo( 'bdbg_header_logo_main' ); ?></a>
			<a href="#" data-activates="bdbg-menu-side"
				class="button-collapse <?php echo esc_html( $header_direction['from'] ); ?>" data-menuside="<?php echo esc_html( $header_direction['from'] ); ?>"><i class="fa fa-bars" aria-hidden="true"></i></a>

			<?php bdbg_menus( 'main', $header_direction ); ?>
		</div>
		<!-- /.nav-wrapper container -->
	</nav>
	<!-- /.bdbg-nav -->
</header>
<main class="container bdbg-content" role="main">
