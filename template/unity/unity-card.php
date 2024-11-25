<?php

/* Template Name: Unity Page Cards */

$unity_query = new WP_Query(array(
    'post_type' => 'page',
    'tax_query' => array(
        array(
            'taxonomy' => 'unity_section',
            'field'    => 'slug',
            'terms'    => 'unity',
        ),
    ),
    'orderby' => 'meta_value_num',
    'order'   => 'ASC',
));

if ($unity_query->have_posts()) : ?>
    <?php while ($unity_query->have_posts()) : $unity_query->the_post();

        // Логика работы с миниатюрой
        $background_image = get_custom_thumbnail_url(get_the_ID());
        
        // $custom_thumbnail = get_field('custom_thumbnail', get_the_ID()); // ACF-поле
        // if (!empty($custom_thumbnail)) {
        //     $background_image = is_array($custom_thumbnail) ? $custom_thumbnail['url'] : $custom_thumbnail;
        // } elseif (has_post_thumbnail()) {
        //     $background_image = get_the_post_thumbnail_url(get_the_ID());
        // } else {
        //     $background_image = '/path/to/placeholder-image.jpg'; // Заглушка
        // }
    ?>
        <a href="<?php echo esc_url(get_permalink()); ?>" class="hoverable-card hoverable-card--unity"
            style="background-image: url('<?php echo esc_url($background_image); ?>');">
            <div class="hoverable-card__title"><?php the_title(); ?></div>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>Нет связанных страниц.</p>
<?php endif; ?>
