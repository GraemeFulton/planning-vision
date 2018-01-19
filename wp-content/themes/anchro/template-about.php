<?php

/*
 * Template Name: Page (About)
 * Description: Create the famous One Page site with multiple sections and jump-to-section navigation
 */

get_header();
the_post();?>

	<div id="page-<?php the_ID(); ?>" class="content-onepage">

		<?php the_content(); ?>

	</div><!-- onepage_end -->
<?php get_footer(); ?>
