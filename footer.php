<?php
/**
 * The template for displaying the footer
 */
?>

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nordiskaspel' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress....se. */
                printf( esc_html__( 'Proudly powered by %s', 'nordiskaspel' ), 'WordPress' );
                ?>
            </a>
            <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'nordiskaspel' ), 'nordiskaspel', '<a href="http://wpNordiskaspel.com/">Brainstorm Force</a>' );
                ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>