<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

    get_template_part( 'template-parts/header' );
?>

        <div class="container">
            <h1>Добро пожаловать на мой сайт.</h1>
            <p>Это основное содержимое.</p>
        </div>

<?php get_template_part( 'template-parts/footer' ); ?>