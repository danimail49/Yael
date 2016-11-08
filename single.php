<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif;
?>

<?php get_header(); ?>

<?php
$left_sidebar = ( is_active_sidebar( 'page_left' ) ) ? 4 : 0;
$right_sidebar = ( is_active_sidebar( 'page_right' ) ) ? 4 : 0;

$main_width = 12 - $left_sidebar - $right_sidebar; ?>

<div class="bdbg-single bdbg-single--post">

	<?php if ( 0 !== $left_sidebar ) : ?>
		<div class="col l4 m12 s12">
			<?php dynamic_sidebar( 'page_left' ); ?>
		</div>
		<!-- /.col l3 -->
	<?php endif; ?>

	<div class="col <?php echo "l{$main_width} m12 s12"; ?>">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile; ?>

	<?php endif; ?>

	</div>
	<!-- /.col -->

	<?php if ( 0 !== $right_sidebar ) : ?>
		<aside class="col l4 m12 s12">
			<?php dynamic_sidebar( 'page_right' ); ?>
		</aside>
		<!-- /.col l4 -->
	<?php endif; ?>

</div>
<!-- /.bdbg-single bdbg-single--post -->

<?php get_footer();
