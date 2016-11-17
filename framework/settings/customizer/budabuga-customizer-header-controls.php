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

$header_controls = array(

/*----------------------------------------------------------------------------
   Header General Section
----------------------------------------------------------------------------*/
	'bdbg_header_general_showdrawer' =>
		array(
			'label'       => __( 'Show SideMenu on Desktop', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header_general',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_general_showshadow' =>
		array(
			'label'       => __( 'Show Header shadow', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header_general',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_general_fixed' =>
		array(
			'label'       => __( 'Fixed Header', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header_general',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_general_layout' =>
		array(
			'label'       => __( 'Choose header layout', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_header_general',
			'choices' => array(
				'left' 	=> 'Left',
				'right' => 'Right',
			),
		),
	'bdbg_header_general_height' =>
		array(
			'label'       => __( 'Header height (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_general',
			'input_attrs' => array(
				'min' => 32,
			),
		),
	'bdbg_header_general_background' =>
		array(
			'label'   => __( 'Header Background', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_general',
		),
	'bdbg_header_general_fontcolor' =>
		array(
			'label'   => __( 'Header Font Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_general',
		),
	'bdbg_header_general_hoverbackground' =>
		array(
			'label'   => __( 'Menu Hover Highlight', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_general',
		),
	'bdbg_header_general_hovercolor' =>
		array(
			'label'   => __( 'Menu Hover Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_general',
		),
		'bdbg_header_general_fontsize' =>
			array(
				'label'       => __( 'Header font size (px)', 'budabuga' ),
				'type'        => 'number',
				'section'     => 'bdbg_header_general',
				'input_attrs' => array(
					'min' => 1,
				),
			),
		'bdbg_header_general_weight' =>
			array(
				'label'       => __( 'Header font weight', 'budabuga' ),
				'type'        => 'select',
				'section'     => 'bdbg_header_general',
				// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
				'choices' => array(
					'lighter' => 'Lighter',
					'normal'  => 'Normal',
					'bold' 	  => 'Bold',
				),
			),
		'bdbg_header_general_letterspace' =>
			array(
				'label'       => __( 'Header text letterspace (px)', 'budabuga' ),
				'type'        => 'number',
				'section'     => 'bdbg_header_general',
				// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
				'input_attrs' => array(
					'min' => 0,
				),
			),

/*----------------------------------------------------------------------------
   Top Bar Section
----------------------------------------------------------------------------*/

		'bdbg_topbar_background' =>
			array(
				'label'   => __( 'Top Bar Background', 'budabuga' ),
				'type'    => 'alpha_color',
				'section' => 'bdbg_topbar',
			),
		'bdbg_topbar_fontcolor' =>
			array(
				'label'   => __( 'Top Bar Font Color', 'budabuga' ),
				'type'    => 'alpha_color',
				'section' => 'bdbg_topbar',
			),
		'bdbg_topbar_weight' =>
			array(
				'label'       => __( 'Top Bar Font weight', 'budabuga' ),
				'type'        => 'select',
				'section'     => 'bdbg_topbar',
				// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
				'choices' => array(
					'lighter' => 'Lighter',
					'normal'  => 'Normal',
					'bold' 	  => 'Bold',
				),
			),
		'bdbg_topbar_letterspace' =>
			array(
				'label'       => __( 'Top Bar text letterspace (px)', 'budabuga' ),
				'type'        => 'number',
				'section'     => 'bdbg_topbar',
				// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
				'input_attrs' => array(
					'min' => 0,
				),
			),
		'bdbg_topbar_linkcolor' =>
			array(
				'label'   => __( 'Top Bar Link Color', 'budabuga' ),
				'type'    => 'alpha_color',
				'section' => 'bdbg_topbar',
			),
		'bdbg_topbar_linkhovercolor' =>
			array(
				'label'   => __( 'Top Bar Link Hover Color', 'budabuga' ),
				'type'    => 'alpha_color',
				'section' => 'bdbg_topbar',
			),

/*----------------------------------------------------------------------------
   Logo Main Section
----------------------------------------------------------------------------*/
	'bdbg_header_logo_main_upload' =>
		array(
			'label'   => __( 'Logo Upload', 'budabuga' ),
			'type'    => 'cropped_image',
			'section' => 'bdbg_header_logo_main',
			'height'      => 128,
			'width'       => 256,
			'flex_height' => true,
			'flex_width' => true,
			// 'mime_type'     => array( 'image/jpeg','image/gif','image/png' ),
		),
	'bdbg_header_logo_main_height' =>
		array(
			'label'       => __( 'Header Logo height (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_main',
			'input_attrs' => array(
				'min' => 10,
			),
		),
	'bdbg_header_logo_main_fontcolor' =>
		array(
			'label'   => __( 'Header Title Font Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_logo_main',
		),
	'bdbg_header_logo_main_fontsize' =>
		array(
			'label'       => __( 'Header Title font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_main',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_header_logo_main_weight' =>
		array(
			'label'       => __( 'Header Title font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_header_logo_main',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_header_logo_main_letterspace' =>
		array(
			'label'       => __( 'Header Title letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_main',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),

/*----------------------------------------------------------------------------
   Logo Side Section
----------------------------------------------------------------------------*/
	'bdbg_header_logo_side_upload' =>
		array(
			'label'   => __( 'Logo Upload', 'budabuga' ),
			'type'    => 'cropped_image',
			'section' => 'bdbg_header_logo_side',
			'flex_width'  => true, // Allow custom aspect ratios and dimensions.
			'flex_height' => true,
		    'width'       => 256,
		    'height'      => 128,
		),
	'bdbg_header_logo_side_width' =>
		array(
			'label'       => __( 'Side Logo width (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_side',
			'input_attrs' => array(
				'min' => 10,
			),
		),
	'bdbg_header_logo_side_fontcolor' =>
		array(
			'label'   => __( 'Side Title Font Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_logo_side',
		),
	'bdbg_header_logo_side_fontsize' =>
		array(
			'label'       => __( 'Side Title font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_side',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_header_logo_side_weight' =>
		array(
			'label'       => __( 'Side Title font weight (px)', 'budabuga' ),
			'type'        => 'select',
			'section'     => 'bdbg_header_logo_side',
			// 'description' => __( 'Choose font weight. Can be bold, bolder, lighter or normal', 'budabuga' ),
			'choices' => array(
				'lighter' => 'Lighter',
				'normal'  => 'Normal',
				'bold' 	  => 'Bold',
			),
		),
	'bdbg_header_logo_side_letterspace' =>
		array(
			'label'       => __( 'Side Title letterspace (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_side',
			// 'description' => __( 'When "0" is assigned uses default theme letterspace.', 'budabuga' ),
			'input_attrs' => array(
				'min' => 0,
			),
		),
	'bdbg_header_logo_side_margin' =>
		array(
			'label'       => __( 'Side Logo margin from center (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_logo_side',
		),

/*----------------------------------------------------------------------------
   Header Search Section
----------------------------------------------------------------------------*/
	'bdbg_header_search_display' =>
		array(
			'label'       => __( 'Show Search in header', 'budabuga' ),
			'type'        => 'checkbox',
			'section'     => 'bdbg_header_search',
			'input_attrs' => array(
				'checked' => 'checked',
			),
		),
	'bdbg_header_search_fontsize' =>
		array(
			'label'       => __( 'Search font size (px)', 'budabuga' ),
			'type'        => 'number',
			'section'     => 'bdbg_header_search',
			'input_attrs' => array(
				'min' => 1,
			),
		),
	'bdbg_header_search_fontcolor' =>
		array(
			'label'   => __( 'Search Font Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_search',
		),
	'bdbg_header_search_background' =>
		array(
			'label'   => __( 'Search Background Color', 'budabuga' ),
			'type'    => 'alpha_color',
			'section' => 'bdbg_header_search',
		),
);
