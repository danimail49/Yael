<?php
/**
 * Set of custom Header sections & panels for Customizer.
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

$footer_panels = array(
	'bdbg_footer' =>
		array(
			'title'       => __( 'Footer', 'budabuga' ),
			'description' => __( 'Customize footer areas here.', 'budabuga' ),
			'priority'   => 120,
		),
);

/*----------------------------------------------------------------------------
   Sections
----------------------------------------------------------------------------*/

$footer_sections = array(
	'bdbg_footer_top' =>
		array(
			'title'       => __( 'Top Footer', 'budabuga' ),
			// 'description' => __( 'General section description', 'budabuga' ),
			'panel' => 'bdbg_footer',
			'capability'  => 'edit_theme_options',
			'priority'   => 10,
		),
	'bdbg_footer_middle' =>
		array(
			'title'       => __( 'Middle Footer', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel'		  => 'bdbg_footer',
			'priority'   => 20,
		),
	'bdbg_footer_bottom' =>
		array(
			'title'       => __( 'Bottom Footer', 'budabuga' ),
			// 'description' => __( 'Logo section description', 'budabuga' ),
			'panel' => 'bdbg_footer',
			'capability'  => 'edit_theme_options',
			'priority'   => 30,
		),
);
