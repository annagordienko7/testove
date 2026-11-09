</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>


<footer class="site-footer">
    <div class="site-footer__container container">
        
        <!-- Колонка 1: Логотип + Соцмережі -->
        <div class="footer-col footer-col--brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-brand-link">
                <img width="156" height="32" class="site-header__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/logo.svg" alt="Logo">
            </a>
            <div class="footer-socials">
                <a href="https://t.me" target="_blank" rel="noopener noreferrer" aria-label="Telegram" class="footer-social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="footer-social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="footer-social-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
            </div>
        </div>

        <!-- Колонка 2: Пункти меню -->
        <div class="footer-col footer-col--menu">
            <span class="footer-col-title">Навігація</span>
            <ul class="footer-menu">
                <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#features' ) ); ?>">Переваги</a></li>
                <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#split' ) ); ?>">Кейси</a></li>
                <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">F.A.Q.</a></li>
                <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#contacts' ) ); ?>">Контакти</a></li>
            </ul>
        </div>

        <!-- Колонка 3: Телефон + Кнопка -->
        <div class="footer-col footer-col--cta">
            <span class="footer-col-title">Зв'язок</span>
            <a href="tel:+380441234567" class="footer-phone card_block__item_link">+38 (044) 123-45-67</a>
            <a href="#callback-form" class="footer-btn">Залишити заявку</a>
        </div>

    </div>
    
    <!-- Копірайт знизу -->
    <div class="site-footer__bottom container">
        <p>&copy; <?php echo date('Y'); ?> DCDK. Всі права захищені.</p>
    </div>
</footer>

<!-- Спливаючий банер (Pop-up) -->
<div id="js-popup-banner" class="popup-banner" aria-hidden="true">
    <!-- Темне тло, клік по якому закриває банер -->
    <div class="popup-banner__overlay"></div>
    
    <div class="popup-banner__content">
        <!-- Кнопка закриття (хрестик) -->
        <button type="button" id="js-popup-close" class="popup-banner__close" aria-label="Закрити банер">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://w3.org">
                <path d="M19 1L1 19M1 1L19 19" stroke="#F2DDC2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <!-- Контент банера -->
        <h3 class="popup-banner__title">Отримайте безкоштовну консультацію</h3>
        <p class="popup-banner__text">Залиште заявку прямо зараз та отримайте індивідуальний розбір вашого проекту від нашого провідного розробника.</p>
        
        <div class="popup-banner__actions">
            <a href="#callback-form" id="js-popup-btn" class="popup-banner__btn">Дізнатись більше</a>
        </div>
    </div>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>
