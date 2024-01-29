<?php

function theme_setup(){

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'header_menu' => esc_html('primary'),
            'footer_menu' => esc_html('footer'),
        )
        );



};


add_action('after_setup_theme', 'theme_setup');



function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), time() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );