<?php
/**
 * The template for displaying page.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="bdbg-comments card">
	<div class="card-content">

		<?php if ( have_comments() ) : ?>
			<!-- <h3 class="bdbg-comments__title"> -->
				<?php // comments_number(); ?>
			<!-- </h3> -->

			<ul class="bdbg-comments__list collection">
				<?php wp_list_comments( 'type=comment&callback=bdbg_list_comments' ); ?>
			</ul>
			<!-- /.bdbg-comments__list collection -->

			<div class="paginate-com">
				<?php  bdbg_comments_pagination();?>
			</div>

		<?php endif; // Check for have_comments(). ?>

		<?php bdbg_comment_form(); ?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'budabuga' ); ?></p>
		<?php endif; ?>

	</div>
	<!-- /.card-content -->
</div><!-- .comments-area -->
