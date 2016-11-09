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

	'bdbg_general_typography_main_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 15,
				'transport'    => 'postMessage',
			),

	/* H1-H6
	-------------------------------------*/

	'bdbg_general_typography_h1_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 40,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h1_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h1_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h2_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 34,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h2_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h2_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h3_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 28,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h3_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h3_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h4_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 24,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h4_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h4_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h5_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 20,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h5_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h5_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h6_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 18,
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h6_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
	'bdbg_general_typography_h6_letterspace' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 0,
				'transport'    => 'postMessage',
			),

	/*----------------------------------------------------------------------------
	   Colors
	----------------------------------------------------------------------------*/

	'bdbg_general_colors_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(241, 241, 241, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_general_colors_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(33, 33, 33, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_general_colors_linkcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(158, 158, 158, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_general_colors_linkhovercolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 64, 129, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_general_colors_activeelem_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1)',
			'transport'    => 'refresh',
			'show_opacity' => 'true',
		),
	'bdbg_general_colors_activeelem_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 64, 129, 1)',
			'transport'    => 'refresh',
			'show_opacity' => 'true',
		),
);
