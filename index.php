<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @since 1.00
 *
 * @package Budabuga
 * @subpackage Yael
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		/*
		* Include the Post-Format-specific template for the content.
		* If you want to override this in a child theme, then include a file
		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
		*/
		get_template_part( 'template-parts/content', get_post_format() );

	endwhile;
	// End the loop. ?>

<?php else :
	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content', 'content-none' ); ?>

<?php endif; ?>

<h1>HEADING</h1>

<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, aspernatur omnis debitis harum blanditiis fuga adipisci, facilis odio provident nulla ullam. Debitis ratione necessitatibus ex at consequuntur ad nam assumenda maxime dolorum tempore totam iste doloremque praesentium fugiat, mollitia vel fuga eius minus molestias. Totam quisquam soluta, quibusdam eligendi animi reiciendis natus, praesentium laboriosam minus unde nihil distinctio hic a, facere ipsum? Consectetur mollitia repellendus voluptas facilis alias quibusdam. Excepturi qui iste neque accusantium, quo officiis? Harum esse quas ex aspernatur tempore dolorum in fuga eligendi nobis, quidem doloribus vero dolores voluptatibus nam molestias modi, eveniet corrupti doloremque dolore magnam ullam velit. Vitae consectetur natus tempora fugiat dolorem repellat voluptatem commodi, sit, beatae quos consequuntur consequatur. Commodi nihil illum fuga eaque optio voluptatem perspiciatis, corporis id explicabo deserunt, illo rerum cupiditate enim neque! Quia pariatur dignissimos ipsum animi illo totam consequuntur quis nobis, similique provident libero consectetur consequatur quidem quaerat recusandae sint velit voluptatem esse. Voluptatibus autem, vitae porro, voluptas vel nulla aliquam neque explicabo veritatis, nostrum tempora et inventore possimus eveniet, saepe animi. Vel aspernatur animi neque laudantium facilis assumenda eius quis necessitatibus saepe voluptatum harum, impedit obcaecati quaerat doloremque, repudiandae dolore minus quam provident voluptatem veniam. Provident fugiat ab ex similique, non vel velit consequatur voluptatum perferendis repellat aliquid officia cupiditate autem dolore, delectus facere doloremque, ipsam mollitia atque eos sunt, neque molestiae aliquam. Libero voluptas repudiandae autem eum neque, laborum ea doloribus optio modi iure dignissimos doloremque reiciendis iusto maxime dolorum! Vitae id sequi, mollitia nostrum esse maiores nam at, aut voluptatem culpa earum, velit in, officiis? Dolorum quibusdam cumque vel voluptates sint, amet aliquam veniam maiores sed totam, quisquam, atque voluptatem cum. Perferendis, vel assumenda incidunt nisi nobis error. Optio pariatur animi modi voluptate sequi debitis iste, esse odio blanditiis placeat recusandae dolorem eaque minus, aliquid iusto ut delectus atque! Quod corporis nulla rerum dolor eligendi ullam dolorem expedita aut cum veniam illum laborum dignissimos maiores porro, perferendis dolore dolores assumenda dicta, et eius ipsam doloremque accusamus. Molestias illum, praesentium officiis. Accusantium natus placeat non aliquam neque, ipsam optio aut mollitia hic, quasi fugiat facilis aperiam maiores temporibus necessitatibus? Officia facilis nobis voluptate voluptatibus voluptas soluta iure delectus ipsam at ad unde, nostrum minus temporibus accusantium ratione perferendis quisquam ullam nulla similique tempora quis harum eius dolorem accusamus. Nobis assumenda quisquam, repudiandae quasi sequi omnis eius totam, tempore voluptatibus voluptatum nemo neque deserunt sit molestiae amet!
</p>

<?php
get_footer();
