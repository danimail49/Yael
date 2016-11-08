<?php
/**
 * The template part for displaying author archive.
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
$title = __( 'Posts by', 'budabuga' );
$author_name = get_the_author_meta( 'display_name' );
$author_bio = get_the_author_meta( 'description' );
$author_url = get_the_author_meta( 'url' );
$author_avatar_url = get_avatar_url( get_the_author_meta( 'ID' ), 64 );

$left_sidebar = ( is_active_sidebar( 'page_left' ) ) ? 4 : 0;
$right_sidebar = ( is_active_sidebar( 'page_right' ) ) ? 4 : 0;

$main_width = 12 - $left_sidebar - $right_sidebar;
?>

<div class="bdbg-archive bdbg-archive--author">

	<?php if ( 0 !== $left_sidebar ) : ?>
		<aside class="col l4 m12 s12">
			<?php dynamic_sidebar( 'page_left' ); ?>
		</aside>
		<!-- /.col l4 -->
	<?php endif; ?>

	<main class="col s12 m12 <?php echo "l{$main_width}" ?>" role="main">
		<?php if ( have_posts() ) : ?>

			<div class="row">

				<div class="col s12 bdbg-archive__title">
					<h1><?php echo "{$title} {$author_name}"; ?></h1>
				</div>
				<!-- /.s12 -->

				<?php if ( ! empty( get_the_author_meta( 'description' ) ) ) : ?>

					<div class="col s12 bdbg-author">
						<div class="card-panel grey lighten-5 z-depth-1">
							<div class="card-content row valign-wrapper">
								<div class="col l2 m3 s12">
									<img src="<?php echo $author_avatar_url; ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
					            </div>
								<div class="col l10 m9 s12">
									<span class="bdbg-author__bio black-text">
					                	<?php echo $author_bio; ?>
					              	</span>
									<br /><br />
					              	<span class="bdbg-author__url black-text">
										<a rel="nofollow" target="_blank" href="<?php echo $author_url; ?>"><?php echo $author_url; ?></a>
					              	</span>
					            </div>
							</div>
						</div>
					</div>
					<!-- /.col s12 bdbg-author -->
				<?php endif; ?>

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
		<!-- /.col l4 -->
	<?php endif; ?>

</div>
<!-- /.bdbg-index -->

<?php get_footer();
