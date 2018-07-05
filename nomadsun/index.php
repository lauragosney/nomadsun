<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php query_posts('posts_per_page=1&orderby=ASC'); ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				get_template_part( 'template-parts/content-hero');

				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		<section class=" ph2 center measure f2 tc tenor intro pt5 pb5">
				<span class="intro-rule archivo"><?php bloginfo('name'); ?></span> <?php bloginfo('description'); ?>.
		</section>


		<section class="grid">

			<?php query_posts('posts_per_page=4&orderby=title'); ?>

			<?php


				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-small');

					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>


		</section>

		<section class="f4 pv6 measure-wide center text-block">
				<h3>Who am I?</h3>
				<p>Not so long ago I thought people who took pictures all the time were not living in the moment, that they were missing something.

				I've come to believe photos can hold a special kind of meaning, that they are more than the sum of their parts, that a good photo holds more than just pixels.

				I read somewhere the value of a photograph grows with it's age. Here's to investing in photographs so I'll be rich in memories later.</p>
		</section>

	</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
