<section class="faq-section" id="faq">
    <div class="faq-section__container container">
        
        <!-- Заголовок секції -->
        <div class="faq-section__header">
            <h2>Часті запитання</h2>
        </div>

        <!-- Контейнер акордеону -->
        <div class="faq-accordion">
            
            <!-- Запитання 1 -->
            <details class="faq-item" open>
                <summary class="faq-item__trigger">
                    <span class="faq-item__question">Які терміни розробки індивідуального проекту?</span>
                    <span class="faq-item__icon"></span>
                </summary>
                <div class="faq-item__content">
                    <p class="faq-item__text">Терміни залежать від складності проекту, обсягу функціоналу та швидкості зворотного зв'язку. В середньому розробка корпоративного сайту або лендінгу з унікальним дизайном займає від 2 до 5 тижнів.</p>
                </div>
            </details>

            <!-- Запитання 2 -->
            <details class="faq-item">
                <summary class="faq-item__trigger">
                    <span class="faq-item__question">Чи входить технічна підтримка у вартість розробки?</span>
                    <span class="faq-item__icon"></span>
                </summary>
                <div class="faq-item__content">
                    <p class="faq-item__text">Так, ми надаємо 30 днів безкоштовної технічної підтримки після офіційного релізу проекту. У цей період ми стежимо за стабільністю роботи контейнерів у Docker та оперативно усуваємо будь-які можливі помилки.</p>
                </div>
            </details>

            <!-- Запитання 3 -->
            <details class="faq-item">
                <summary class="faq-item__trigger">
                    <span class="faq-item__question">Чи зможу я самостійно редагувати контент на сайті?</span>
                    <span class="faq-item__icon"></span>
                </summary>
                <div class="faq-item__content">
                    <p class="faq-item__text">Звичайно. Ми інтегруємо зручну систему керування контентом WordPress та налаштовуємо кастомні поля (наприклад, ACF). Ви зможете легко змінювати заголовки, тексти, зображення чи переваги без знання коду.</p>
                </div>
            </details>

            <!-- Запитання 4 -->
            <details class="faq-item">
                <summary class="faq-item__trigger">
                    <span class="faq-item__question">Як відбувається процес оплати?</span>
                    <span class="faq-item__icon"></span>
                </summary>
                <div class="faq-item__content">
                    <p class="faq-item__text">Зазвичай ми працюємо за поетапною системою оплати (наприклад, 50% передоплата перед початком проектування дизайну та 50% після фінального тестування перед передачею всіх допусків власнику).</p>
                </div>
            </details>

        </div>
    </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "<?php echo esc_url( home_url('/') ); ?>#organization",
      "name": "DCDK",
      "url": "<?php echo esc_url( home_url('/') ); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "ул. Крещатик, 1",
        "addressLocality": "Киев",
        "postalCode": "02000",
        "addressCountry": "UA"
      },
      "telephone": "+380441234567"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Які терміни розробки індивідуального проекту?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "В середньому розробка корпоративного сайту або лендінгу з унікальним дизайном займає від 2 до 5 тижнів."
          }
        },
        {
          "@type": "Question",
          "name": "Чи входить технічна підтримка у вартість розробки?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Так, ми надаємо 30 днів безкоштовної технічної підтримки після офіційного релізу проекту."
          }
        }
      ]
    }
  ]
}
</script>
