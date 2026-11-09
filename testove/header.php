<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="canonical" href="<?php echo esc_url( home_url( $_SERVER['REQUEST_URI'] ) ); ?>">

	<!-- Open Graph для репостів у соцмережах та месенджерах -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="ТЕСТОВЕ | Розробка та дизайн сайтів">
	<meta property="og:description" content="Створюємо швидкі та безпечні сайти на базі сучасних технологій.">
	<meta property="og:url" content="<?php echo esc_url( home_url('/') ); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class('text-900 antialiased font-sans'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="flex flex-col min-h-screen">

		<?php do_action('tailpress_header'); ?>

		<header class="site-header">
			<div class="container site-header__container">
				
				<!-- ЛОГОТИП БРЕНДУ (ВЕКТОРНИЙ SVG "ТЕСТОВЕ") -->
				<div class="site-header__logo-wrapper">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-current="page">
						 <img width="156" height="32" class="site-header__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/logo.svg" alt="Logo">
					</a>
				</div>

				<!-- ГОЛОВНА НАВІГАЦІЯ (ДЕСТКОП) -->
				<div id="menu-wrapper_deck" class="hidden lg:flex items-center justify-center lg:grow">
					<nav class="w-full flex justify-center items-center">
						<ul class="site-header__nav">
                            <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#features' ) ); ?>">Переваги</a></li>
                            <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#split' ) ); ?>">Кейси</a></li>
                            <li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#callback-form' ) ); ?>">Залишити заявку</a></li>
							<li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">F.A.Q.</a></li>
							<li><a class="card_block__item_link" href="<?php echo esc_url( home_url( '/#contacts' ) ); ?>">Контакти</a></li>
						</ul>
					</nav>
				</div>

                <div>
                    <a href="tel:+380441234567" class="header-phone card_block__item_link">+38 (044) 123-45-67</a>
                </div>

				<!-- КНОПКА БУРГЕР-МЕНЮ (МОБІЛЬНА ВЕРСІЯ) -->
				<div id="primary-menu-toggle" class="lg:hidden hamburger">
					<a href="#" aria-label="Toggle navigation">
						<img width="30" height="30" src="<?php echo esc_url( get_template_directory_uri() ); ?>/resources/img/hamburger.svg" alt="Menu">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.417906 0.436126C0.685572 0.16831 1.04856 0.0178597 1.42704 0.0178597C1.80551 0.0178597 2.1685 0.16831 2.43616 0.436126L9.99108 7.99755L17.546 0.436126C17.6777 0.299683 17.8352 0.190851 18.0093 0.115981C18.1834 0.0411112 18.3707 0.00170225 18.5603 5.39386e-05C18.7498 -0.00159437 18.9377 0.0345506 19.1131 0.10638C19.2886 0.17821 19.4479 0.284286 19.5819 0.418419C19.716 0.552551 19.8219 0.712054 19.8937 0.88762C19.9655 1.06319 20.0016 1.2513 19.9999 1.44098C19.9983 1.63067 19.9589 1.81813 19.8841 1.99242C19.8093 2.16671 19.7006 2.32434 19.5642 2.45613L12.0093 10.0176L19.5642 17.579C19.8243 17.8484 19.9681 18.2093 19.9649 18.5838C19.9616 18.9584 19.8115 19.3167 19.5469 19.5816C19.2822 19.8464 18.9242 19.9967 18.55 19.9999C18.1757 20.0032 17.8152 19.8592 17.546 19.599L9.99108 12.0376L2.43616 19.599C2.16697 19.8592 1.80642 20.0032 1.43217 19.9999C1.05793 19.9967 0.699933 19.8464 0.435293 19.5816C0.170652 19.3167 0.0205402 18.9584 0.0172881 18.5838C0.0140361 18.2093 0.157905 17.8484 0.417906 17.579L7.97282 10.0176L0.417906 2.45613C0.150321 2.18823 0 1.82493 0 1.44613C0 1.06732 0.150321 0.704023 0.417906 0.436126Z" fill="#F2DDC2"></path>
						</svg>
					</a>
				</div>

				<!-- МОБІЛЬНЕ МЕНЮ -->
				<div id="menu-wrapper" class="hidden"> 
					<ul class="mobile-nav">
						<li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">Переваги</a></li>
						<li><a href="<?php echo esc_url( home_url( '/#split' ) ); ?>">Кейси</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#callback-form' ) ); ?>">Залишити заявку</a></li>
						<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>">F.A.Q.</a></li>
						<li><a href="<?php echo esc_url( home_url( '/#contacts' ) ); ?>">Контакти</a></li>
					</ul>
				</div>

			</div>
		</header>

		<div id="content" class="flex-grow site-content">
			<?php do_action('tailpress_content_start'); ?>

			<main>
