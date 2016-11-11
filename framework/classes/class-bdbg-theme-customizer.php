<?php
/**
 * Class for creating customizer controls.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Class Bdbg_Theme_Customizer
 *
 * Responsible for creating & managing customizer controls, settings & sections.
 *
 * @since 1.00
 */
class Bdbg_Theme_Customizer {

	/**
	 * Array of customizer panels.
	 *
	 * @var array
	 */
	public $panels;
	/**
	 * Array of customizer sections.
	 *
	 * @var array
	 */
	public $sections;
	/**
	 * Array of customizer settings.
	 *
	 * @var array
	 */
	public $settings;
	/**
	 * Array of customizer controls.
	 *
	 * @var array
	 */
	public $controls;

	/**
	 * Parse variables from static().
	 * Hooks methods to customizer.
	 *
	 * @param array $sections Customizer sections.
	 * @param array $settings Customizer settings.
	 * @param array $controls Customizer controls.
	 *
	 * @since 1.00
	 */
	public function __construct( $panels, $sections, $settings, $controls ) {
		$this->panels 	= $panels;
		$this->sections = $sections;
		$this->settings = $settings;
		$this->controls = $controls;

		add_action( 'customize_register', array( $this, 'create_panels' ) );
		add_action( 'customize_register', array( $this, 'create_sections' ) );
		add_action( 'customize_register', array( $this, 'create_settings' ) );
		add_action( 'customize_register', array( $this, 'create_controls' ) );
	}

	/**
	 * Creates custom sections.
	 *
	 * @since 1.00
	 *
	 * @param object $wp_customize Customizr manager object.
	 */
	public function create_panels( $wp_customize ) {
		foreach ( $this->panels as $panel_id => $panel_params ) :
			$wp_customize->add_panel( $panel_id, $panel_params );
		endforeach;
	}

	/**
	 * Creates custom sections.
	 *
	 * @since 1.00
	 *
	 * @param object $wp_customize Customizr manager object.
	 */
	public function create_sections( $wp_customize ) {
		foreach ( $this->sections as $sec_id => $sec_params ) :
			$wp_customize->add_section( $sec_id, $sec_params );
		endforeach;
	}

	/**
	 * Creates custom settings.
	 *
	 * @since 1.00
	 *
	 * @param object $wp_customize Customizr manager object.
	 */
	public function create_settings( $wp_customize ) {
		foreach ( $this->settings as $set_id => $set_params ) :
			$wp_customize->add_setting( $set_id, $set_params );
		endforeach;
	}

	/**
	 * Creates custom controls.
	 * New control types init goes in this function.
	 *
	 * @since 1.00
	 *
	 * @param object $wp_customize Customizr manager object.
	 */
	public function create_controls( $wp_customize ) {
		foreach ( $this->controls as $ctrl_id => $ctrl_params ) :
			if ( 'color' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'alpha_color' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new Bdbg_Alpha_Color_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'media_control' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'std_image' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'cropped_image' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'header_image' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new WP_Customize_Header_Image_Control( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif ( 'numeric_input' === $ctrl_params['type'] ) :
				$wp_customize->add_control( new Bdbg_Int_Customizer_control( $wp_customize, $ctrl_id, $ctrl_params ) );
			else :
				$wp_customize->add_control( $ctrl_id, $ctrl_params );
			endif;
		endforeach;
	}

	/**
	 * Creates new instance of Bdbg_Theme_Customizer.
	 *
	 * @param array $panels Customizer panels.
	 * @param array $sections Customizer sections.
	 * @param array $settings Customizer settings.
	 * @param array $controls Customizer controls.
	 *
	 * @return object New instance of Bdbg_Theme_Customizer.
	 */
	public static function init( $panels, $sections, $settings, $controls ) {
		return new static( $panels, $sections, $settings, $controls );
	}

}
