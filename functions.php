<?php

//Indicates the path of the theme folder
define( 'THEME_SLUG', 'sportunros' ); 

function theme_header() {
    get_template_part( THEME_SLUG . 'template-parts/header' );
}

function theme_footer() {
    get_template_part( THEME_SLUG . 'template-parts/footer' );
}

function get_image_url($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

function mytheme_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/node_modules/@popperjs/core/dist/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true );

    // Подключение пользовательских файлов
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/modules/scripts.js', array(), null, true );
}

function mytheme_enqueue_swiper() {
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'custom-swiper-init', get_template_directory_uri() . '/assets/js/modules/swiper.js', array('swiper-js'), null, true );
}

function custom_styles() {
    wp_enqueue_style( 'compiled_styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );
}


add_action( 'wp_header', 'theme_header' );
add_action( 'wp_footer', 'theme_footer' );
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles_and_scripts' );
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_swiper' );
add_action( 'wp_enqueue_scripts', 'custom_styles' );
