<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sporcks' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sporcks' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'sporcks' ), 'sporcks', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/popper.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/jquery.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/swiper-bundle.min.js"></script>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/assets/js/main.js"></script></div>

<?php wp_footer(); ?>

</body>
</html>
