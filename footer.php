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
            <article class="part">
                © 2019, <a href="<?php echo esc_url( __( '#', 'lumex' ) ); ?>">Lumexlight</a>, all rights reserved.
            </article>
            <article class="part">
                <p class="centar flex">
                    <span class="part1"><a href='#'>Privacy Policy</a></span>
                    <span class="part1"><a href='#'>Terms and Conditions</a></span>
                    <span class="part1"><a href='#'>Cookie Policy</a></span></p>
            </article>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
