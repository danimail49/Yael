<?php
/**
 * Class for creating dynamic sedebars.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/**
 * Class Bdbg_Dynamic_Sidebar
 *
 * Responsible for creating WordPress Widget Areas.
 *
 * @since 1.00
 */
class Bdbg_Dynamic_Sidebar {

	public $widgets;
	public $args;

	function __construct( $widgets, $args ) {
		$this->widgets = $widgets;
		$this->args = $args;

		add_action( 'widgets_init', array( $this, 'create_widgets') );
	}

	public function create_widgets() {
		foreach ( $this->widgets as $id => $params ) :
			$params['id'] = $id;

			foreach ($this->args as $argkey => $argval ) :
				$params[$argkey] = ( $params[$argkey] ) ? ( $params[$argkey] ) : $argval;
			endforeach;

			register_sidebar( $params );
		endforeach;
	}

	public static function init( $widgets, $args ) {
		return new static( $widgets, $args );
	}

}
