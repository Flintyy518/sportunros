
<!DOCTYPE html>
<?php wp_security_check(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ОГФСО «Юность России» – это крупнейшее общественно-государственное физкультурно-спортивное объединение, которое занимается развитием физической культуры и спорта среди молодежи России. На нашем сайте вы найдете новости, информацию о соревнованиях, проектах и программах для юных молоко спортсменов.">
        <meta name="keywords" content="юность России, детский спорт, спортивные соревнования, физкультура, молодежные программы, спортивные лагеря, спортивные секции, здоровый образ жизни, физическое развитие.">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="icon" href="<?php echo get_image_url('FV.ico', 'general'); ?>" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/swiper/swiper-bundle.min.css">
        <title>Вёрстка</title>
        <?php wp_head(); ?>
    </head>
    <header class="header">
        <div class="header__topline">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center header__topline-left">
                        <div class="menu-item menu-item--date d-flex align-items-center">
                            <img src="<?php echo get_image_url('CLL.svg', 'header', 'desk'); ?>" alt="Календарь" class="menu-item__icon">
                            <div class="menu-item__text"> <?php echo date_i18n('j F Y', strtotime(get_the_date(switch_to_locale('ru_RU')))); ?> </div>
                        </div>
                        <div class="menu-item menu-item--search d-flex align-items-center">
                            <img src="<?php echo get_image_url('SRL.svg', 'header', 'desk'); ?>" alt="Поиск" class="menu-item__icon">
                            <div class="menu-item__text">Поиск по сайту</div>
                            <!-- <input type="text" class="menu-item__search-input form-control" placeholder="Введите ваш запрос">
                            <img src="<?php echo get_image_url('close-light.svg', 'header', 'desk'); ?>" alt="Закрыть поиск" class="menu-item__icon menu-item__search-close"> -->
                        </div>
                        <div class="menu-item menu-item--blind bvi-open d-flex align-items-center">
                            <img src="<?php echo get_image_url('EL.svg', 'header', 'desk'); ?>" alt="Версия для слабовидящих" class="menu-item__icon">
                            <div class="menu-item__text">Версия для слабовидящих</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 header__topline-right">
                        <img src="<?php echo get_image_url('EDMLG.svg', 'header', 'desk'); ?>" alt="Министерство просвещения" class="header__topline-logo">
                        <a href="https://edu.gov.ru/" class="header__topline-text" target="_blank">Министерство просвещения Российской Федерации</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header__nav">
            <div class="container-fluid">
                <div class="header__nav-inner-wrapper d-flex justify-content-between align-items-center">
                    <a href="/" class="header__nav-logo">
                        <img src="<?php echo get_image_url('LG.png', 'general'); ?>" alt="Логотип" class="logo">
                    </a>
                    <div class="header__nav-right-mobile d-flex align-items-center gap-2">
                        <div class="header__nav-right-mobile-eye bvi-open">
                            <img src="<?php echo get_image_url('ED.svg', 'header', 'mob&tab'); ?>" alt="Версия для слабовидящих">
                        </div>
                        <div class="header__nav-right-mobile-search">
                            <img src="<?php echo get_image_url('SRD.svg', 'header', 'mob&tab'); ?>" alt="Поиск">
                        </div>
                        <div class="header__nav-burger">
                            <div class="header__nav-burger-line"></div>
                            <div class="header__nav-burger-line"></div>
                            <div class="header__nav-burger-line"></div>
                        </div>
                    </div>
                    <div class="header__nav-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenuLocation',
                                'container'      => false, // убираем обертку <div>
                                'menu_class'     => 'main-menu', // основной класс для <ul>
                                'fallback_cb'    => false // убираем стандартное меню, если меню не задано
                            ));
                        ?>
                        <div class="header__nav-btn ui-btn" id="joinUsBtn">Вступить в члены</div>
                        <?php load_template_parts( [ 'home/join-us-form' ] ); ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <body>
        <main>

        