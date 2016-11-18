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

$footer_settings = array(

/*----------------------------------------------------------------------------
   Footer Top Section
----------------------------------------------------------------------------*/

	'bdbg_footer_top_columns' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 1,
				'transport'    => 'postMessage',
			),
	'bdbg_footer_top_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(61, 61, 61, 0.8)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_footer_top_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_footer_top_fontsize' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 15,
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_footer_top_weight' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'normal',
			'transport'    => 'postMessage',
		),
	'bdbg_footer_top_letterspace' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'absint',
			'validate_callback'	=> 'validate_numeric_input',
		),

	/*----------------------------------------------------------------------------
	   Footer Middle Section
	----------------------------------------------------------------------------*/

		'bdbg_footer_middle_columns' =>
				array(
					'type'         => 'theme_mod',
					'default'      => 3,
					'transport'    => 'postMessage',
				),
		'bdbg_footer_middle_background' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'rgba(61, 61, 61, 0.9)',
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_middle_fontcolor' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'rgba(255, 255, 255, 1)',
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_middle_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 15,
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_middle_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
		'bdbg_footer_middle_letterspace' =>
			array(
				'type'              => 'theme_mod',
				'default'           => 0,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
			),

/*----------------------------------------------------------------------------
   Footer Bottom Section
----------------------------------------------------------------------------*/

		'bdbg_footer_bottom_background' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'rgba(61, 61, 61, 1)',
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_bottom_fontcolor' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'rgba(255, 255, 255, 1)',
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_bottom_fontsize' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 15,
				'transport'    => 'postMessage',
				'show_opacity' => 'true',
			),
		'bdbg_footer_bottom_weight' =>
			array(
				'type'         => 'theme_mod',
				'default'      => 'normal',
				'transport'    => 'postMessage',
			),
		'bdbg_footer_bottom_letterspace' =>
			array(
				'type'              => 'theme_mod',
				'default'           => 0,
				'transport'         => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field',
			),
);
