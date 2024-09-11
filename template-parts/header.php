<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ОГФСО «Юность России» – это крупнейшее общественно-государственное физкультурно-спортивное объединение, которое занимается развитием физической культуры и спорта среди молодежи России. На нашем сайте вы найдете новости, информацию о соревнованиях, проектах и программах для юных спортсменов.">
        <meta name="keywords" content="юность России, детский спорт, спортивные соревнования, физкультура, молодежные программы, спортивные лагеря, спортивные секции, здоровый образ жизни, физическое развитие.">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon" />
        <title>Юность России</title>
        <?php wp_head(); ?>
    </head>
    <header class="site-header">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Логотип -->
        <div class="site-logo">
            <?php 
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Site Logo">';
            }
            ?>
        </div>

        <!-- Значки поиска, глаза и hamburger-menu -->
        <div class="header-icons d-flex align-items-center">
            <div class="search-icon">
                <?php 
                echo '<img src="' . get_template_directory_uri() . '/assets/images/search-dark.svg" alt="Search Icon">';
                ?>
            </div>

            <div class="eye-icon">
                <?php 
                echo '<img src="' . get_template_directory_uri() . '/assets/images/eye-dark.svg" alt="Eye Icon">';
                ?>
            </div>

            <button class="hamburger-menu-btn">
                <span class="navbar-toggler-icon">
                    <?php 
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/hamburger-menu.svg" alt="Menu Icon">';
                    ?>
                </span>
            </button>
        </div>
    </div>

    <nav class="mobile-menu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'menu-list',
            'container' => false
        ));
        ?>
    </nav>
    </header>
    <body>