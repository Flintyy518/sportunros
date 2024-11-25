<?php

    /* Page */

    wp_security_check();
    
    load_template_parts([
        'parts/header',
        'home/slider',
        'home/news',
        'home/events',
        'parts/partners',
        'parts/footer'
    ]);
?>
