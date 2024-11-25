<?php

function get_custom_thumbnail_url($post_id) {
    if (function_exists('get_field')) {
        $custom_thumbnail = get_field('custom_thumbnail', $post_id);
        if (!empty($custom_thumbnail)) {
            return is_array($custom_thumbnail) ? $custom_thumbnail['url'] : $custom_thumbnail;
        }
    }

    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id);
    }

    return '/path/to/placeholder-image.jpg'; // Заглушка
}