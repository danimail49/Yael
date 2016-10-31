<?php
/**
 * The template for displaying page.
 *
 * @package Budabuga
 * @subpackage Yael
 * @since 1.00
 */

get_header(); ?>

<?php
$left_sidebar = ( is_active_sidebar( 'page_left' ) ) ? 3 : 0;
$right_sidebar = ( is_active_sidebar( 'page_right' ) ) ? 3 : 0;

$main_width = 12 - $left_sidebar - $right_sidebar;
?>

<div class="bdbg-page">

	<?php if ( 0 !== $left_sidebar ) : ?>
		<div class="col l3">
			<div class="card">
				<div class="card-content bdbg-page--item">
					<?php dynamic_sidebar( 'page_left' ); ?>
				</div>
				<!-- /.card-content -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col l3 -->
	<?php endif; ?>

	<main class="bdbg-content col <?php echo "l{$main_width}"; ?>" role="main">
		<section class="bdbg-page card">
			<div class="card-content bdbg-page--item">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					// get_template_part( 'template-parts/content/content', 'page' );
					the_title();
					the_content();
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) {
					// 	comments_template();
					// }

					// End of the loop.
				endwhile;
				?>
			</div>
			<!-- /.card-content -->
		</section>
		<!-- /.bdbg-post-archive -->
	</main>
	<!-- /.container bdbg-content -->

	<?php if ( 0 !== $right_sidebar ) : ?>
		<div class="col l3">
			<div class="card">
				<div class="card-content bdbg-page--item">
					<?php dynamic_sidebar( 'page_right' ); ?>
				</div>
				<!-- /.card-content -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col l3 -->
	<?php endif; ?>
	
</div>
<!-- /.bdbg-page -->

<?php get_footer();
