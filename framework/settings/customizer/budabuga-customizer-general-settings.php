<?php
/**
 * Set of custom Header settings for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

$general_settings = array(

/*----------------------------------------------------------------------------
   Typography
----------------------------------------------------------------------------*/

	'bdbg_general_typography_h1_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 1,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h1_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 1,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h1_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 1,
				'transport'    => 'postMessage',
			),
);
