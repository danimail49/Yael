<?php
/**
 * The template part for displaying search results.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

// Preventing direct script access.
if ( ! defined( 'ABSPATH' ) ) :
	die( 'No direct script access allowed' );
endif; ?>

<?php get_header(); ?>

<?php
$left_sidebar = ( is_active_sidebar( 'page_left' ) ) ? 4 : 0;
$right_sidebar = ( is_active_sidebar( 'page_right' ) ) ? 4 : 0;

$main_width = 12 - $left_sidebar - $right_sidebar;
?>

<div class="bdbg-search-results">

	<?php if ( 0 !== $left_sidebar ) : ?>
		<aside class="col l4 m12 s12">
			<?php dynamic_sidebar( 'page_left' ); ?>
		</aside>
		<!-- /.col l3 -->
	<?php endif; ?>

	<main class="col s12 m12 <?php echo "l{$main_width}" ?>" role="main">
		<?php if ( have_posts() ) : ?>

			<div class="row">

				<div class="col s12 bdbg-archive__title">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'budabuga' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
				</div>
				<!-- /.s12 -->

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content/content', get_post_format() ); ?>

				<?php endwhile;
				// End the loop. ?>

				<div class="col s12 center-align">
					<?php bdbg_pagination(); ?>
				</div>
				<!-- /.col s12 -->

			</div>
			<!-- /.row -->

		<?php else : ?>

			<div class="row">
				<?php
				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );
				?>
			</div>
			<!-- /.row -->

		<?php endif; ?>
	</main>
	<!-- /.col s12 m12 -->

	<?php if ( 0 !== $right_sidebar ) : ?>
		<aside class="col l4 m12 s12">
			<?php dynamic_sidebar( 'page_right' ); ?>
		</aside>
		<!-- /.col l3 -->
	<?php endif; ?>


</div>
<!-- /.bdbg-search-results -->


<?php get_footer();
