<section class="callback-section" id="callback-form">
    <div class="callback-section__container container">
        
        <div class="callback-section__header">
            <h2>Залишити заявку</h2>
            <p>Заповніть форму, і наш менеджер зв'яжеться з вами найближчим часом.</p>
        </div>

        <form class="custom-form" id="js-callback-form" novalidate>
            <!-- Рядок 1: ПІБ та Телефон -->
            <div class="form-row">
                <div class="form-group">
                    <label for="form-name">ПІБ *</label>
                    <input type="text" id="form-name" name="username" placeholder="Іванов Іван Іванович" required>
                    <span class="error-message">Будь ласка, вкажіть ваше ім'я</span>
                </div>
                
                <div class="form-group">
                    <label for="form-phone">Номер телефону *</label>
                    <input type="tel" id="form-phone" name="phone" placeholder="+38 (000) 000-00-00" required>
                    <span class="error-message">Введіть коректний номер телефону</span>
                </div>
            </div>

            <!-- Рядок 2: Випадаюче меню та Вік -->
            <div class="form-row">
                <div class="form-group">
                    <label for="form-service">Оберіть послугу *</label>
                    <select id="form-service" name="service" required>
                        <option value="" disabled selected>Оберіть варіант...</option>
                        <option value="development">Розробка сайту</option>
                        <option value="design">UI/UX Дизайн</option>
                        <option value="seo">SEO Оптимізація</option>
                        <option value="support">Технічна підтримка</option>
                    </select>
                    <span class="error-message">Будь ласка, оберіть послугу зі списку</span>
                </div>
                
                <div class="form-group">
                    <label for="form-age">Вік</label>
                    <input type="number" id="form-age" name="age" min="1" max="120" placeholder="25">
                    <span class="error-message">Введіть коректний вік (1-120)</span>
                </div>
            </div>

            <!-- Рядок 3: Текстове поле -->
            <div class="form-group">
                <label for="form-message">Ваше повідомлення</label>
                <textarea id="form-message" name="message" rows="5" placeholder="Опишіть деталі вашого проекту..."></textarea>
            </div>

            <!-- Рядок 4: Чекбокс згоди (в один рядок) -->
            <div class="form-group form-group--checkbox">
                <label class="checkbox-label">
                    <input type="checkbox" id="form-agree" name="agree" required>
                    <span class="checkbox-text">Я згоден на обробку моїх персональних даних відповідно до політики конфіденційності *</span>
                </label>
                <span class="error-message">Необхідно надати згоду для відправки</span>
            </div>

            <!-- Кнопка відправки -->
            <div class="form-actions">
                <button type="submit" class="form-submit-btn">Відправити форму</button>
            </div>

            <!-- Повідомлення про успіх -->
            <div class="form-success-alert" id="js-form-success">
                <h3>Дякуємо! Заявка успішно надіслана.</h3>
            </div>
        </form>

    </div>
</section>
