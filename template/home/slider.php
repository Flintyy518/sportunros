<?php wp_security_check(); ?>

<div class="main-swiper container">
    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next swiper-slide-duplicate" 
                data-swiper-slide-index="2">
                <a href="#" target="_blank">
                    <div src="" alt="Баннер №1" class="slide-banner sld-bnr-ldr sld-bnr-1st"></div>
                    <div class="slide-tag">Федеральный проект</div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0">
                <a href="#" target="_blank">
                    <div src="" alt="Баннер №2" class="slide-banner sld-bnr-ldr sld-bnr-2nd"></div>
                    <div class="slide-tag">Федеральный проект</div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1">
                <a href="#" target="_blank">
                    <div src="" alt="Баннер №3" class="slide-banner sld-bnr-ldr sld-bnr-3rd" data-slide="3"></div>
                </a>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-progress">
            <div class="swiper-progress-loader"></div>
            <div class="swiper-progress__counter">
                <div class="swiper-progress__counter-current">1</div>
                <div class="swiper-progress__counter-sep">/</div>
                <div class="swiper-progress__counter-sum">3</div>
            </div>
        </div>
    </div>
</div>
