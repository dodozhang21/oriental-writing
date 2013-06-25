<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package orientalWriting
 * @since orientalWriting 1.0.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'oriental_credits' ); ?>
			<?php printf( __( 'Proudly powered by %1$s', 'orientalWriting' ), '<a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | ' ); ?>
			<?php printf( __( 'Theme %1$s by %2$s', 'orientalWriting' ), 'Oriental Writing', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
			<br />
			<?php printf( __( '%1$s', 'orientalWriting' ), '<a id="top" href="#top">Back to top</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
	<div class="footer-bottom"></div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>