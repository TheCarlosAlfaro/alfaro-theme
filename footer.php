<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alfaro
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alfaro' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'alfaro' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'https://www.carlosalfaro.me/alfaro-theme/', 'alfaro' ) ); ?>"><?php printf( esc_html__( 'Alfaro Theme By: %s', 'alfaro' ), 'Carlos Alfaro' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
