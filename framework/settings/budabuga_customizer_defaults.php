<?php
/**
 * Customizer bdbg_get_theme_mode replasment for intheme use.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

function bdbg_get_theme_mod( $setting ) {
	global $defaults;

	return $defaults[ $setting ];
}
