<?php
/**
 * Set of custom Header controls for Customizer.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

$footer_controls = array(

/*----------------------------------------------------------------------------
   Footer Top Section
----------------------------------------------------------------------------*/
	'bdbg_footer_top_columns' =>
		array(
			'label'       => __( 'Top Footer columns', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_top',
			'description' => __( 'From 1 to 4.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 1,
				'max' => 4,
			),
		),
	'bdbg_footer_top_background' =>
		array(
			'label'   => __( 'Top Footer background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_top',
		),
	'bdbg_footer_top_fontcolor' =>
		array(
			'label'   => __( 'Top Footer text color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_top',
		),
	'bdbg_footer_top_fontsize' =>
		array(
			'label'       => __( 'Top Footer font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_top',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_footer_top_weight' =>
		array(
			'label'       => __( 'Top Footer font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_footer_top',
			// 'description' => __( 'Choose font weight. Can be bold, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_footer_top_letterspace' =>
		array(
			'label'       => __( 'Top Footer text letterspace (px)', 'budabuga' ),
			'type'        => 'numeric_input',
			'section'     => 'bdbg_footer_top',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),

/*----------------------------------------------------------------------------
   Footer Middle Section
----------------------------------------------------------------------------*/

	'bdbg_footer_middle_columns' =>
		array(
			'label'       => __( 'Middle Footer columns', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_middle',
			'description' => __( 'From 1 to 4.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 1,
				'max' => 4,
			),
		),
	'bdbg_footer_middle_background' =>
		array(
			'label'   => __( 'Middle Footer background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_middle',
		),
	'bdbg_footer_middle_fontcolor' =>
		array(
			'label'   => __( 'Middle Footer text color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_middle',
		),
	'bdbg_footer_middle_fontsize' =>
		array(
			'label'       => __( 'Middle Footer font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_middle',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_footer_middle_weight' =>
		array(
			'label'       => __( 'Middle Footer font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_footer_middle',
			// 'description' => __( 'Choose font weight. Can be bold, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_footer_middle_letterspace' =>
		array(
			'label'       => __( 'Middle Footer text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_middle',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
/*----------------------------------------------------------------------------
   Footer Bottom Section
----------------------------------------------------------------------------*/

	'bdbg_footer_bottom_background' =>
		array(
			'label'   => __( 'Bottom Footer background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_bottom',
		),
	'bdbg_footer_bottom_fontcolor' =>
		array(
			'label'   => __( 'Bottom Footer text color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_footer_bottom',
		),
	'bdbg_footer_bottom_fontsize' =>
		array(
			'label'       => __( 'Bottom Footer font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_bottom',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_footer_bottom_weight' =>
		array(
			'label'       => __( 'Bottom Footer font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_footer_bottom',
			// 'description' => __( 'Choose font weight. Can be bold, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_footer_bottom_letterspace' =>
		array(
			'label'       => __( 'Bottom Footer text letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_footer_bottom',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
);
