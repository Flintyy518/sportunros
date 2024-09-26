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
        <meta name="description" content="ОГФСО «Юность России» – это крупнейшее общественно-государственное физкультурно-спортивное объединение, которое занимается развитием физической культуры и спорта среди молодежи России. На нашем сайте вы найдете новости, информацию о соревнованиях, проектах и программах для юных молоко спортсменов.">
        <meta name="keywords" content="юность России, детский спорт, спортивные соревнования, физкультура, молодежные программы, спортивные лагеря, спортивные секции, здоровый образ жизни, физическое развитие.">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/swiper/swiper-bundle.min.css">
        <title>Вёрстка</title>
        <?php wp_head(); ?>
    </head>
    <header class="header">
    <!-- Topline section -->
    <div class="header__topline">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center header__topline-left"> <!-- Добавил gap -->
                    <div class="menu-item menu-item--date d-flex align-items-center">
                        <img src="<?php echo get_image_url('calendar-light.svg'); ?>" alt="Календарь" class="menu-item__icon">
                        <div class="menu-item__text">17 сен 2024 г</div>
                    </div>
                    <div class="menu-item menu-item--search d-flex align-items-center">
                        <img src="<?php echo get_image_url('search-light.svg'); ?>" alt="Поиск" class="menu-item__icon">
                        <div class="menu-item__text">Поиск по сайту</div>
                        <!-- <input type="text" class="menu-item__search-input form-control" placeholder="Введите ваш запрос">
                        <img src="<?php echo get_image_url('close-light.svg'); ?>" alt="Закрыть поиск" class="menu-item__icon menu-item__search-close"> -->
                    </div>
                    <div class="menu-item menu-item--blind bvi-open d-flex align-items-center">
                        <img src="<?php echo get_image_url('eye-light.svg'); ?>" alt="Версия для слабовидящих" class="menu-item__icon">
                        <div class="menu-item__text">Версия для слабовидящих</div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3 header__topline-right">
                    <img src="<?php echo get_image_url('education-ministry-logo.svg'); ?>" alt="Министерство просвещения" class="header__topline-logo">
                    <a href="https://edu.gov.ru/" class="header__topline-text" target="_blank">Министерство просвещения Российской Федерации</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="header__nav">
        <div class="container-fluid">
            <div class="header__nav-inner-wrapper d-flex justify-content-between align-items-center">
                <a href="/" class="header__nav-logo">
                    <img src="<?php echo get_image_url('logo.png'); ?>" alt="Логотип" class="logo">
                </a>
                <div class="header__nav-right-mobile d-flex align-items-center gap-2">
                    <div class="header__nav-right-mobile-eye bvi-open">
                        <img src="<?php echo get_image_url('eye-dark.svg'); ?>" alt="Версия для слабовидящих">
                    </div>
                    <div class="header__nav-right-mobile-search">
                        <img src="<?php echo get_image_url('search-dark.svg'); ?>" alt="Поиск">
                    </div>
                    <div class="header__nav-burger">
                        <div class="header__nav-burger-line"></div>
                        <div class="header__nav-burger-line"></div>
                        <div class="header__nav-burger-line"></div>
                    </div>
                </div>
                <div class="header__nav-menu d-none d-md-flex">
                    <div class="menu-item menu-item--has-dropdown">
                        <a href="/unity" class="menu-item__text menu-item__text--dark">Об объединении</a>
                        <!-- <div class="menu-item__dropdown">
                            <a href="/unity/history" class="menu-item__dropdown-item">История</a>
                            <a href="/unity/structure" class="menu-item__dropdown-item">Руководство</a>
                        </div> -->
                    </div>
                    <div class="menu-item">
                        <a href="/news" class="menu-item__text menu-item__text--dark">Отделения</a>
                    </div>
                    <div class="menu-item">
                        <a href="/news" class="menu-item__text menu-item__text--dark">Новости</a>
                    </div>
                    <div class="menu-item">
                        <a href="/events" class="menu-item__text menu-item__text--dark">Мероприятия</a>
                    </div>
                    <div class="menu-item">
                        <a href="/contacts" class="menu-item__text menu-item__text--dark">Клубы</a>
                    </div>
                    <div class="menu-item">
                        <a href="/contacts" class="menu-item__text menu-item__text--dark">Контакты</a>
                    </div>
                </div>
                <div class="header__nav-btn ui-btn">Вступить в члены</div>
            </div>
        </div>
    </nav>
    </header>
    <body>