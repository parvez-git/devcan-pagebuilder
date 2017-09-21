<?php
/**
 * Template Name: Page Builder
 *
 * @package Devcan_Pagebuilder
 */

get_header(); ?>

	<div id="pagebuilder" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
