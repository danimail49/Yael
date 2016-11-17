<?php
/**
 * Add metaboxes for custom post formats.
 *
 * @package Budabuga
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

function bdbg_register_post_video_metabox() {

	$prefix = 'bdbg_';

	/**
	 * Adds post url metabox.
	 */
	$post_video_url = new_cmb2_box( array(
		'id'            => $prefix . 'video_url',
		'title'         => esc_html__( 'Video URL', 'budabuga' ),
		'object_types'  => array( 'post' ),
		'context'    	=> 'advanced',
		'priority'   	=> 'high',
		'classes_cb'    => 'bdbg-metabox',
	) );

	$post_video_url->add_field( array(
		'name' => esc_html__( 'Video URL', 'budabuga' ),
		'desc' => esc_html__( 'If you want to show video instead of post thumbnail, paste here video URL.', 'budabuga' ),
		'id'   => $prefix . 'video_url',
		'type' => 'text',
	) );

}
add_action( 'cmb2_admin_init', 'bdbg_register_post_video_metabox' );
