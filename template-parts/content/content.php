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

$post_layout = 'grid-100'; // Values: grid-100, grid-50, 'list'.
$desktop_class = ( 'grid-50' === $post_layout ) ? '6' : '12';
$card_type = ( 'list' === $post_layout ) ? 'horizontal' : '';
$post_url = esc_url( get_permalink() );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "col s12 m12 l{$desktop_class}" ); ?>>
	<div class="card bdbg-post <?php echo $card_type; ?>">
		<a href="<?php echo $post_url; ?>" class="card-image bdbg-post__thumbnail waves-effect waves-block waves-light">
			<?php bdbg_post_thumbnail( 'bdbg-img bdbg-img--responsive' ); ?>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
				<div class="bdbg-post__featured" title="<?php _e( 'Featured Post', 'budabuga' ); ?>">
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
				<!-- /.bdbg-post__featured -->
			<?php endif; ?>
		</a>
		<!-- /.card-image bdbg-post__thumbnail -->
		<div class="card-content">
			<?php the_title( '<h2 class="card-title bdbg-post__title"><a href="' . $post_url . '">', '</a></h2>' ); ?>
			<?php the_excerpt(); ?>
			<div class="bdbg-post__readmore">
				<a href="<?php echo $post_url; ?>" class="btn"><?php _e( 'Read More', 'budabuga' ); ?></a>
			</div>
			<!-- /.readmore-action -->
		</div>
		<div class="card-action">
			<?php bdbg_post_meta(); ?>
		</div>
	</div>
	<!-- /.card bdbg-entry bdbg-entry--post -->
</article>
