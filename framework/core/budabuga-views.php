<?php
/**
 * Custom frontend functions & definitions.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

if ( ! function_exists( 'budabuga_the_custom_logo' ) ) :
	/**
	 * Outputs site logo, if defined in customizer. If empty logo outputs site title.
	 *
	 * @since 1.00
	 */
	function budabuga_the_custom_logo() {
		if ( function_exists( 'get_custom_logo' ) ) :
			$output = get_custom_logo();
		endif;
		// Nothing in the output: Custom Logo is not supported, or there is no selected logo.
		// In both cases we display the site's name.
		if ( empty( $output ) ) :
			$output = '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
		endif;

		echo $output;
	}
endif;