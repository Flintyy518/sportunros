document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 555000, // Не забыть поменять время на 5000
            disableOnInteraction: false,  // Прогресс не останавливается при взаимодействии
        },
        speed: 1000,  // Скорость перехода
        on: {
            init: function() {
                // Устанавливаем общую сумму слайдов
                document.querySelector('.swiper-progress__counter-sum').textContent = this.slides.length;
            },
            slideChange: function() {
                // Обновляем текущий номер слайда
                document.querySelector('.swiper-progress__counter-current').textContent = this.realIndex + 1;
            },
            autoplayTimeLeft(s, time, progress) {
                // Анимация прогресс-бара
                const loader = document.querySelector('.swiper-progress-loader');
                loader.style.width = `${( 1 - progress) * 100}%`;  // Обновляем ширину в зависимости от времени
            },
        }
    });
});
