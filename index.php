<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

    get_template_part( 'template-parts/header' );
?>

        <div class="container">
            <?php get_template_part('/template-parts/slider'); ?>
        </div>

<?php get_template_part( 'template-parts/footer' ); ?>