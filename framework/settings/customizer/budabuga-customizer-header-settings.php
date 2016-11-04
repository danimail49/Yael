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

$header_settings = array(

/*----------------------------------------------------------------------------
   Header General Section
----------------------------------------------------------------------------*/
	'bdbg_header_general_showdrawer' =>
			array(
				'type'         => 'theme_mod',
				'default'      => true,
				'transport'    => 'refresh',
			),
	'bdbg_header_general_showshadow' =>
		array(
			'type'         => 'theme_mod',
			'default'      => true,
			'transport'    => 'refresh',
		),
	'bdbg_header_general_fixed' =>
		array(
			'type'         => 'theme_mod',
			'default'      => true,
			'transport'    => 'postMessage',
		),
	'bdbg_header_general_layout' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'left',
			'transport'    => 'refresh',
		),
	'bdbg_header_general_height' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 64,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_general_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgb(255, 64, 129)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_general_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_general_hoverbackground' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(0, 0, 0, 0.1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_general_hovercolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_general_weight' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'normal',
			'transport'    => 'postMessage',
		),
	'bdbg_header_general_fontsize' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 15,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_general_letterspace' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),

/*----------------------------------------------------------------------------
   Logo Main Section
----------------------------------------------------------------------------*/
	'bdbg_header_logo_main_upload' =>
		array(
			'type'      		=> 'theme_mod',
			'transport' 		=> 'refresh',
			'sanitize_callback' => 'absint',
		),
	'bdbg_header_logo_main_height' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 64,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_main_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1)',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_logo_main_weight' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'normal',
			'transport'    => 'postMessage',
		),
	'bdbg_header_logo_main_fontsize' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 30,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_main_letterspace' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),

/*----------------------------------------------------------------------------
   Logo Side Section
----------------------------------------------------------------------------*/
	'bdbg_header_logo_side_upload' =>
		array(
			'type'      		=> 'theme_mod',
			'transport' 		=> 'refresh',
			'sanitize_callback' => 'absint',
		),
	'bdbg_header_logo_side_width' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 128,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_side_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(0, 0, 0, 0.87);',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_logo_side_weight' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'normal',
			'transport'    => 'postMessage',
		),
	'bdbg_header_logo_side_fontsize' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 30,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_side_letterspace' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_logo_side_margin' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 0,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),

/*----------------------------------------------------------------------------
   Header Search Section
----------------------------------------------------------------------------*/

	'bdbg_header_search_display' =>
		array(
			'type'         => 'theme_mod',
			'default'      => true,
			'transport'    => 'refresh',
		),
	'bdbg_header_search_fontsize' =>
		array(
			'type'              => 'theme_mod',
			'default'           => 35,
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_text_field',
		),
	'bdbg_header_search_fontcolor' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 255, 255, 1);',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
	'bdbg_header_search_background' =>
		array(
			'type'         => 'theme_mod',
			'default'      => 'rgba(255, 64, 129, 0.6);',
			'transport'    => 'postMessage',
			'show_opacity' => 'true',
		),
);
