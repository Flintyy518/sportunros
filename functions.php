<?php

require_once get_template_directory() . '/assets/php/nav-menu-fun.php';
require_once get_template_directory() . '/assets/php/page-unity-fun.php';

//Indicates the path of the theme folder
define( 'THEME_SLUG', 'sportunros' ); 

function wp_security_check() {
    if (!defined('ABSPATH')) {
        exit;
    }
}

function theme_header() {
    get_template_part( THEME_SLUG . 'parts/header' );
}

function theme_footer() {
    get_template_part( THEME_SLUG . 'parts/footer' );
}

function load_template_parts($templates) {
    foreach ($templates as $template) {
        $template_path = get_template_directory() . '/' . '/template/' . $template . '.php';

        if (file_exists($template_path)) {
            require_once $template_path;
        } 
    }
}

function card_unity() {
    while (have_posts()) {
        the_post();
        ?>
        <main class="unity-page container">
            <div class="unity-page__inner-wrapper transparent-page-wrapper">
                <?= breadcrumbs(); ?> 
                <div class="page-title"> 
                    <?php the_title(); ?> 
                </div>
                <div class="unity-page__cards grid-cards-template"> 
                    <?php load_template_parts( [ 'unity/unity-card' ] ); ?> 
                </div>
            </div>
            <?=  breadcrumbs(); ?>
        </main>
        <?php
    }
}

function card_unity_single() {
    while (have_posts()) {
        the_post();

        ?>
        <div class="unity-page container">
            <div class="unity-page__inner-wrapper transparent-page-wrapper">
                <div class="page-title"> 
                    <?php the_title(); ?> 
                </div>
            </div>
        </div>
        <?php
    }
}

function breadcrumbs() {
    ?> <?php load_template_parts( [ 'unity/breadcrumbs' ] ); ?> <?php
}

function partners() {
    ?> <?php load_template_parts( [ 'unity/partners' ] ); ?> <?php
}

function get_image_url($filename, $section = '', $device = '') { 
    // Добавляем секцию, если она указана
    $section_path = $section ? '/' . $section : '';
    
    // Добавляем тип устройства, если он указан
    $device_path = $device ? '/' . $device : '';

    // Генерируем полный путь к изображению
    return get_template_directory_uri() . '/assets/images' . $section_path . $device_path . '/' . $filename;
}

function add_module_attribute( $tag, $handle, $src ) {
    // Добавляем атрибут type="module" для определённых скриптов
    if ( 'scripts-js' === $handle || 'custom-swiper-init' === $handle ) {
        $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    }
    return $tag;
}

function sportunros_features () {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
}

function register_unity_taxonomy() {
    register_taxonomy(
        'unity_section', // Название таксономии
        'page',          // Привязываем её к типу записей "Страницы"
        array(
            'label'             => 'Разделы объединения',
            'hierarchical'      => true, // Включаем иерархию для таксономии
            'show_ui'           => true, // Отображение в админке
            'show_in_menu'      => true, // Показываем в меню админки
            'show_in_nav_menus' => true, // Разрешаем использовать в навигационных меню
            'show_admin_column' => true, // Показываем в колонках в админке
            'rewrite'           => array('slug' => 'unity-section'),
        )
    );
}

function create_post_meta() {
    register_post_meta(
        'page',
        'display_order', // Имя метаполя
        array(
            'show_in_rest' => true,
            'single' => true, // Ожидается одно значение
            'type' => 'number', // Тип данных - число
        )
    );
}
add_action( 'init', 'create_post_meta' );

function mytheme_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/node_modules/@popperjs/core/dist/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true );
}

function mytheme_enqueue_swiper() {
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css' );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'custom-swiper-init', get_template_directory_uri() . '/assets/js/modules/swiper.js', array('swiper-js'), null, true );
}

function custom_styles() {
    wp_enqueue_style('compiled_styles', get_template_directory_uri() . '/assets/css/styles.css', array(), filemtime(get_template_directory() . '/assets/css/styles.css'), 'all');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'), 'all');
}


add_action('init', 'register_unity_taxonomy');
add_action( 'init', 'sportunros_features' );
add_action( 'wp_header', 'theme_header' );
add_action( 'wp_footer', 'theme_footer' );
add_filter( 'script_loader_tag', 'add_module_attribute', 10, 3 );
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles_and_scripts' );
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_swiper' );
add_action( 'wp_enqueue_scripts', 'custom_styles' );


// Filters
add_filter('acf/settings/show_updates', '__return_false');
remove_filter('the_content', 'prepend_post_thumbnail');

// Shortcode
add_shortcode( 'BRD', 'breadcrumbs' );
add_shortcode( 'CRD_UNT', 'card_unity' );
add_shortcode( 'CRD_UNT_SNGL', 'card_unity_single' );
add_shortcode( 'PRTNS', 'partners' );

// Other
add_theme_support('post-thumbnails', array('page'));
