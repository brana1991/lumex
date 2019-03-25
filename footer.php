<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lumex
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container">
                <?php
                if ( is_active_sidebar( 'footer' ) ) : ?>

                    <section class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'lumex' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'footer' ) ) {
                            ?>
                            <div class="widget-column footer-widget-1">
                                <?php dynamic_sidebar( 'footer' ); ?>
                            </div>
                            <?php
                        }
                        ?>
                    </section><!-- .widget-area -->

                <?php endif; ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lumex' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'lumex' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'lumex' ), 'lumex', '<a href="http://underscores.me/">lumex</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
