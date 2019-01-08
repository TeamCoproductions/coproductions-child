<?php
function my_theme_enqueue_styles() {

	remove_filter( 'the_content', 'wpautop' );// added by BW - remove <P> auto add
	remove_filter( 'the_excerpt', 'wpautop' );

    $parent_style = 'twentyseventeen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );




}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_filter( 'wpcf7_form_elements', 'do_shortcode' );//added BW 1-2-19, allow other shortcodes inside of contact form 7


?>





