

document.addEventListener('DOMContentLoaded', function () { 
  const menuToggle = document.getElementById('primary-menu-toggle'); 
  const mobileMenu = document.getElementById('menu-wrapper'); 
  let isMenuOpen = false; 

  // Функція для закриття меню (винесена окремо, щоб не дублювати код)
  function closeMenu() {
    isMenuOpen = false;
    document.body.style.overflow = 'auto'; 
    mobileMenu.classList.add('hidden'); 
    menuToggle.classList.remove('act');
  }

  menuToggle.addEventListener('click', function (e) { 
    e.preventDefault(); 
    isMenuOpen = !isMenuOpen; 
    if (isMenuOpen) { 
      document.body.style.overflow = 'hidden'; 
      mobileMenu.classList.remove('hidden'); 
      this.classList.add('act'); 
    } else { 
      closeMenu(); // Викликаємо функцію закриття
    } 
  }); 

  // ЗНАХОДИМО ПОСИЛАННЯ ТА ЗАКРИВАЄМО МЕНЮ ПРИ КЛІКУ
  const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav a');
  mobileLinks.forEach(link => {
    link.addEventListener('click', function () {
      closeMenu(); // Закриваємо меню, коли користувач переходить до блоку
    });
  });

  const buttonMenu = document.querySelector('.button_menu'); 
  const glossaryWidgetWrapper = document.querySelector('.glossary-widget-wrapper'); 
  if (buttonMenu && glossaryWidgetWrapper) { 
    buttonMenu.addEventListener('click', function (e) { 
      e.preventDefault(); 
      if (glossaryWidgetWrapper.classList.contains('act')) { 
        glossaryWidgetWrapper.classList.remove('act'); 
      } else { 
        glossaryWidgetWrapper.classList.add('act'); 
      } 
    }); 
  } 
});

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('js-callback-form');
    const phoneInput = document.getElementById('form-phone');

    if (!form || !phoneInput) return;

    // === 1. МАСКА ДЛЯ ПОЛЯ ТЕЛЕФОНУ ===
    phoneInput.addEventListener('input', (e) => {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
        
        // Починаємо автоматично додавати код України, якщо користувач вводить цифри
        if (!x[1] && e.target.value.length > 0) {
            e.target.value = '+38 ';
            return;
        }

        // Форматуємо рядок на льоту: +38 (XXX) XXX-XX-XX
        e.target.value = !x[2] ? '+38 (' + x[1] : '+38 (' + x[2] + (x[3] ? ') ' + x[3] : '') + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
    });

    phoneInput.addEventListener('keydown', (e) => {
        // Забороняємо стирати статичний префікс "+38 (" через Backspace
        if (e.key === 'Backspace' && phoneInput.value.length <= 5) {
            e.preventDefault();
        }
    });

    // === 2. ВАЛІДАЦІЯ ТА ВІДПРАВКА ФОРМИ ===
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let isValid = true;

        // Очищаємо попередні помилки
        form.querySelectorAll('.form-group').forEach(group => group.classList.remove('has-error'));

        // Валідація ПІБ
        const nameInput = document.getElementById('form-name');
        if (!nameInput.value.trim()) {
            nameInput.closest('.form-group').classList.add('has-error');
            isValid = false;
        }

        // Валідація телефону (перевірка на повну довжину маски: 19 символів)
        if (phoneInput.value.length < 19) {
            phoneInput.closest('.form-group').classList.add('has-error');
            isValid = false;
        }

        // Валідація випадаючого списку послуг
        const serviceSelect = document.getElementById('form-service');
        if (!serviceSelect.value) {
            serviceSelect.closest('.form-group').classList.add('has-error');
            isValid = false;
        }

        // Валідація віку (необов'язкове, але якщо вказано — має бути валідним)
        const ageInput = document.getElementById('form-age');
        if (ageInput.value && (parseInt(ageInput.value) < 1 || parseInt(ageInput.value) > 120)) {
            ageInput.closest('.form-group').classList.add('has-error');
            isValid = false;
        }

        // Валідація чекбоксу згоди
        const agreeCheckbox = document.getElementById('form-agree');
        if (!agreeCheckbox.checked) {
            agreeCheckbox.closest('.form-group').classList.add('has-error');
            isValid = false;
        }

        // Якщо все валідно — ініціюємо успішну подію
        if (isValid) {
            form.classList.add('is-success');

            // Створення та запуск події "successfulSending"
            const successEvent = new CustomEvent('successfulSending', {
                detail: {
                    name: nameInput.value.trim(),
                    phone: phoneInput.value,
                    service: serviceSelect.value,
                    age: ageInput.value || 'не вказано',
                    message: document.getElementById('form-message').value
                },
                bubbles: true
            });
            
            form.dispatchEvent(successEvent);
            console.log('Подія successfulSending згенерована!', successEvent.detail);

            // Тут ви можете додати стандартне відправлення через fetch (AJAX) до WordPress admin-ajax.php, якщо потрібно.
            form.reset();
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('js-popup-banner');
    const closeBtn = document.getElementById('js-popup-close');
    const overlay = banner ? banner.querySelector('.popup-banner__overlay') : null;
    const actionBtn = document.getElementById('js-popup-btn');

    if (!banner || !closeBtn || !overlay) return;

    // Якщо банер вже показувався у цій сесії — нічого не робимо
    if (sessionStorage.getItem('popupShown')) return;

    let isTriggered = false;
    let timerId = null;

    // Відкриття банера
    const showBanner = () => {
        if (isTriggered) return;
        isTriggered = true;

        // Вимикаємо обидва слухачі, бо банер вже викликано
        clearTimeout(timerId);
        window.removeEventListener('scroll', handleScroll);

        // Активуємо вікно
        banner.classList.add('is-active');
        banner.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden'; // Забороняємо скрол сайту під банером

        // Запам'ятовуємо, що банер відкривався
        sessionStorage.setItem('popupShown', 'true');
    };

    // Закриття банера
    const closeBanner = () => {
        banner.classList.remove('is-active');
        banner.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = ''; // Повертаємо скрол сайту
    };

    // Обробник скролу (1500px)
    function handleScroll() {
        if (window.scrollY >= 1500) {
            showBanner();
        }
    }

    // Тригер 1: Через 15 секунд
    timerId = setTimeout(showBanner, 15000);

    // Тригер 2: Через прокрутку 1500 пікселів
    window.addEventListener('scroll', handleScroll);

    // Закриття: клік по хрестику, клік повз банер (на overlay) або клік по кнопці
    closeBtn.addEventListener('click', closeBanner);
    overlay.addEventListener('click', closeBanner);
    if (actionBtn) {
        actionBtn.addEventListener('click', closeBanner);
    }
});
