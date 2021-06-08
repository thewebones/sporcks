<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Empty_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php empty_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();


		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
