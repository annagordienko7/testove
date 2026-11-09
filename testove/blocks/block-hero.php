<section class="hero-block">
    <!-- Фоновий слайдер (анімується через CSS) -->
    <div class="hero-slider">
        <div class="hero-slider__slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/slide.jfif');"></div>
        <div class="hero-slider__slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/slide1.jfif');"></div>
        <div class="hero-slider__slide" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/slide.jpg');"></div>
    </div>

    <!-- Статичний контент поверх слайдеру -->
    <div class="hero-block__container container">
        <div class="hero-block__content">
            <h1 class="hero-block__title">Ваш головний заголовок сайту</h1>
            <p class="hero-block__subtitle">Переконливий підзаголовок</p>
            <a href="#callback-form" class="hero-block__btn">Залишити заявку</a>
        </div>
    </div>
</section>
