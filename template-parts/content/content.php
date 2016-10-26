<?php
/**
 * The template part for displaying content.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

$post_layout = 'left'; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col s12 m12 l12' ); ?>>
	<div class="card bdbg-post ">
		<?php bdbg_post_header(); ?>

		<?php bdbg_post_excerpt(); ?>

		<?php bdbg_post_footer(); ?>
	</div>
	<!-- /.card bdbg-entry bdbg-entry--post -->
</article>
<!-- /.col s12 m12 l12 -->
