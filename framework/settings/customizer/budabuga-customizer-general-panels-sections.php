<?php
/**
 * Set of custom General sections & panels for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/*----------------------------------------------------------------------------
   Panels
----------------------------------------------------------------------------*/

$general_panels = array(
	'bdbg_general' =>
		array(
			'title'       => __( 'General', 'budabuga' ),
			'description' => __( 'Customize main site elements.', 'budabuga' ),
			'priority'   => 20,
		),
);

/*----------------------------------------------------------------------------
   Sections
----------------------------------------------------------------------------*/

$general_sections = array(
	'bdbg_general_typography' =>
		array(
			'title'       => __( 'Typography', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_h1_fontsize',
			'capability'  => 'edit_theme_options',
			'priority'   => 10,
		),
	'bdbg_general_colors' =>
		array(
			'title'       => __( 'Colors', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel'		  => 'bdbg_general',
			'priority'   => 20,
		),
);
