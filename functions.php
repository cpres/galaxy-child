<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parent_style = 'twentyseventeen-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'galaxy-style', get_stylesheet_uri());

}

wp_enqueue_script( 'onepagenav', get_stylesheet_directory_uri() . '/one-page-nav.js', ['jquery'], null, true );

wp_enqueue_script( 'fittext', get_stylesheet_directory_uri() . '/fit-text-jquery.js', ['jquery'], null, false )


?>