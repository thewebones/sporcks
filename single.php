<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Empty_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

            if ( 'post' === get_post_type() )
			get_template_part( 'template-parts/post-template', get_post_type() );
            if ( 'atletas_post' === get_post_type() )
                get_template_part( 'template-parts/atletas-template', get_post_type() );
            if ( 'meta_post' === get_post_type() )
		        get_template_part( 'template-parts/meta-template', get_post_type() );
                



			// If comments are open or we have at least one comment, load up the comment template.


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
