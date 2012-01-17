<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Yasuni
 * @since Yasuni 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'yasuni_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'yasuni' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'yasuni' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'yasuni' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>