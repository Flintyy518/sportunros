<?php

//Indicates the path of the theme folder
define( 'THEME_SLUG', 'sportunros' ); 

function theme_header() {
    get_template_part( THEME_SLUG . 'template-parts/header' );
}

function theme_footer() {
    get_template_part( THEME_SLUG . 'template-parts/footer' );
}

function mytheme_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/node_modules/@popperjs/core/dist/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true );
}

function custom_styles() {
    wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
}

add_action( 'wp_header', 'theme_header' );
add_action( 'wp_footer', 'theme_footer' );
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles_and_scripts' );
add_action( 'wp_enqueue_scripts', 'custom_styles' );
