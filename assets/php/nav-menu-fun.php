<?php 

// Добавляем кастомные классы к элементам <li>
function add_menu_item_classes($classes, $item, $args, $depth) {
    if ($args->theme_location == 'headerMenuLocation') {
        $classes[] = 'menu-item'; // Базовый класс для <li>

        // Класс для выпадающего подменю
        if (in_array('menu-item-has-children', $item->classes)) {
            $classes[] = 'menu-item--has-dropdown';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_item_classes', 10, 4);

// Добавляем кастомные атрибуты к <a> ссылкам в меню
function add_menu_link_classes($atts, $item, $args, $depth) {
    if ($args->theme_location == 'headerMenuLocation') {
        $atts['class'] = 'menu-item__text menu-item__text--dark'; // Классы для всех <a> ссылок

        // Если элемент имеет подменю, добавляем специфический класс
        if (in_array('menu-item-has-children', $item->classes)) {
            $atts['class'] .= ' menu-item__dropdown-toggle';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_classes', 10, 4);

// Добавляем классы для подменю
function add_submenu_classes($classes, $args, $depth) {
    if ($args->theme_location == 'headerMenuLocation') {
        $classes[] = 'menu-item__dropdown';
    }
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'add_submenu_classes', 10, 3);

?>

