document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper', {
        loop: true,  // Включает циклическую прокрутку слайдов
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,  // Делает точки пагинации кликабельными
        },
        autoplay: {
            delay: 5000,  // Автоматическое переключение слайда каждые 5 секунд
        },
    });
});