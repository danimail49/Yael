<?php
/**
 * The template part for displaying no-content page.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>



<article class="bdbg-nocontent s12 col">


	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<h1 class="page-title"><?php _e( 'Looks like you\'ve just started ;)', 'budabuga' ) ?></h1>
		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="card-content row valign-wrapper">
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'budabuga' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			</div>
		</div>

	<?php elseif ( is_search() ) : ?>

		<h1 class="page-title"><?php printf( __( 'Nothing found for for:<br /> %s', 'budabuga' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="card-content row valign-wrapper">
				<div class="col l12 m12 s12">
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'budabuga' ); ?></p>
					<p>
						<?php _e( 'Type Anything & Press "Enter"', 'budabuga' ); ?>
					</p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

	<?php else : ?>

		<h1 class="page-title"><?php _e( '404 is here!', 'budabuga' ) ?></h1>

		<div class="card-panel grey lighten-5 z-depth-1">
			<div class="card-content row valign-wrapper">
				<div class="col l12 m12 s12">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'budabuga' ); ?></p>
					<p>
						<?php _e( 'Type Anything & Press "Enter"', 'budabuga' ); ?>
					</p>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>

	<?php endif; ?>

</article>
<!-- /.col s12 m12 l12 bdbg-404 -->
