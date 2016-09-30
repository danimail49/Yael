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
 */
class Bdbg_Theme_Customizer {

	public $sections;
	public $settings;
	public $controls;

	/**
	 * Bdbg_Theme_Customizer constructor.
	 *
	 * @param $sections array Sections parameters.
	 * @param $settings array Settings parameters.
	 * @param $controls array Controls parameters.
	 *
	 * @since 1.00
	 */
	public function __construct( $sections, $settings, $controls ) {
		$this->sections = $sections;
		$this->settings = $settings;
		$this->controls = $controls;

		add_action( 'customize_register', array( $this, 'create_sections' ), 970 );
		add_action( 'customize_register', array( $this, 'create_settings' ), 970 );
		add_action( 'customize_register', array( $this, 'create_controls' ), 970 );
	}

	public function create_sections( $wp_customize ) {
		foreach ( $this->sections as $sec_id => $sec_params ) :
			$wp_customize->add_section( $sec_id, $sec_params );
		endforeach;
	}

	public function create_settings( $wp_customize ) {
		foreach ( $this->settings as $set_id => $set_params ) :
			$wp_customize->add_setting( $set_id, $set_params );
		endforeach;
	}

	public function create_controls( $wp_customize ) {
		foreach ( $this->controls as $ctrl_id => $ctrl_params ) :
			if ( $ctrl_params['type'] === 'color' ) :
				unset( $ctrl_params['type'] );
				$wp_customize->add_control( new WP_Customize_Color_Control ( $wp_customize, $ctrl_id, $ctrl_params ) );
			elseif( $ctrl_params['type'] === 'alpha_color' ) :
				$wp_customize->add_control(	new Customize_Alpha_Color_Control( $wp_customize, $ctrl_id, $ctrl_params) );
			else :
				$wp_customize->add_control( $ctrl_id, $ctrl_params );
			endif;
		endforeach;
	}

	public static function init( $sections, $settings, $controls ) {
		return new static( $sections, $settings, $controls );
	}

}
