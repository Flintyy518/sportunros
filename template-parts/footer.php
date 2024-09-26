<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<hr class="footer__hr">
<footer class="footer footer__container">
    <div class="footer__grid">
        <div class="footer__logo">
            <?php 
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/footer.png" alt="Site Logo">';
                }
            ?>
        </div>
        <div class="footer__about">
            <h5>Об объединении</h5>
            <ul class="list-unstyled footer__menu-item">
                <li><a href="/unity/structure">Руководство</a></li>
                <li><a href="/unity/units">Региональные отделения</a></li>
                <li><a href="/unity/history">История</a></li>
                <li><a href="/unity/statute">Устав объединения</a></li>
                <li><a href="/unity/activity">Деятельность</a></li>
                <li><a href="/unity/partners">Партнеры</a></li>
                <li><a href="/unity/archive">Архив журнала</a></li>
            </ul>
        </div>
        <div class="footer__contacts">
            <h5 class="mb-0">Контакты</h5>
            <ul class="list-unstyled footer__menu-item">
                <li><a href="#">117292, г. Москва, ул. Кедрова, д. 8, к. 2</a></li>
                <li><a href="mailto:rss_2004@mail.ru">Почта: rss_2004@mail.ru</a></li>
            </ul>
        </div>
        <div class="footer__other">
            <h5>Прочее</h5>
            <ul class="list-unstyled footer__menu-item">
                <li><a href="/agreement">Пользовательское соглашение</a></li>
                <li><a href="#">Подать обращение</a></li>
            </ul>
        </div>
        <div class="footer__socials">
            <h5 class="socials__title">Следите за нами</h5>
            <div class="socials__icon mb-4">
                <?php 
                $vk_icon = get_template_directory_uri() . '/assets/images/vkcom.svg'; // Путь к файлу иконки
                echo '<a href="https://vk.com/sportunros_ru" target="_blank"><img src="'. $vk_icon .'" alt="VK icon " " class="vk-icon " ></a>';
                ?>
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

</body>
</html>