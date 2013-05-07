<?php
/**
 * orientalWriting functions and definitions
 *
 * @package orientalWriting
 * @since orientalWriting 1.0.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since orientalWriting 1.0.0
 */
if ( ! isset( $content_width ) )
	$content_width = 597; /* pixels */

if ( ! function_exists( 'orientalWriting_setup' ) ):
function orientalWriting_setup() {
	/**
	 * Remove oriental post thumbnail filter
	 */
	//remove_filter( 'post_thumbnail_html', 'oriental_post_image_html' );

	/**
	 * Remove oriental infinite scroll credit
	 */
	remove_filter( 'infinite_scroll_credit', 'oriental_footer_credits' );

}
endif;
add_action( 'after_setup_theme', 'orientalWriting_setup', 11);


/* Filter to add author credit to Infinite Scroll footer */
function orientalWriting_footer_credits( $credit ) {
	$credit = sprintf( __( '%3$s | Theme: %1$s by %2$s.', 'orientalWriting' ), 'Oriental Writing', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>', '<a href="http://wordpress.org/" title="' . esc_attr( __( 'A Semantic Personal Publishing Platform', 'orientalWriting' ) ) . '" rel="generator">Proudly powered by WordPress</a>' );
	return $credit;
}
add_filter( 'infinite_scroll_credit', 'orientalWriting_footer_credits' );


/**
 * Enqueue scripts and styles
 */
function orientalWriting_scripts() {
	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=Molle:400italic|Satisfy|Source Sans Pro' );

}
add_action( 'wp_enqueue_scripts', 'orientalWriting_scripts' );


?>
