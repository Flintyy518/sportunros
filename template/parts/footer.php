<?php wp_security_check(); ?>

    <hr class="hr-line">
    <footer class="footer footer__container">

        <div class="footer__grid">
            <div class="footer__logo">
                <img src="<?php echo get_image_url('LG.png', 'general'); ?>" alt="Логотип">
            </div>

            <div class="footer__about">
            <h5>Об объединении</h5>
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'footerMenuLocation',
                        'container'      => false, // убираем обертку <div>
                        'menu_class'     => 'main-menu', // основной класс для <ul>
                        'fallback_cb'    => false // убираем стандартное меню, если меню не задано
                    ));
                ?>
            </div>

            <div class="footer__contacts">
                <h5 class="mb-0">Контакты</h5>
                <ul class="list-unstyled footer__menu-item">
                    <li><a href="#">117292, Москва, Кедрова 8/2</a></li>
                    <li><a href="mailto:rss_2004@mail.ru">rss_2004@mail.ru</a></li>
                </ul>
            </div>

            <div class="footer__other">
                <h5>Прочее</h5>
                <ul class="list-unstyled footer__menu-item">
                    <li><a href="#">Пользовательское соглашение</a></li>
                    <li><a href="#">Подать обращение</a></li>
                </ul>
            </div>

            <div class="footer__socials">
                <h5 class="socials__title">Следите за нами</h5>
                <div class="socials__icon mb-4">
                    <a href="https://vk.com/sportunros_ru" target="_blank">
                        <img class="footer__socials-item" src="<?php echo get_image_url('VK.svg', 'socials'); ?>" alt="ВК иконка">
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <div class="">
                <p class="mb-0">Copyright © 2022 ОГФСО "Юность России".</p>
            </div>
            <button id="scrollTopBtn" class="scroll-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 19V5M5 12l7-7 7 7"/>
                </svg>
            </button>
        </div>

    </footer>
    
    <?php wp_footer(); ?>
    
        </main> 
        <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js"></script>
        
<!--         <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script> -->
<!--         <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js"></script> -->
    </body> 
</html>