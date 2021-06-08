<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sporcks' ); ?></a>

	<header id="masthead" class="site-header">

        <div class="navbar" id="navbar">
            <div class="navbar__backdrop"></div>
            <div class="navbar__wrap">
                <div class="banner" id="banner">
                    <div class="banner__wrap">
                        <div class="swiper-container banner__slider swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" id="swiper-wrapper-27ab769ed9e107a8e" aria-live="off" style="transition: all 0ms ease 0s; transform: translate3d(-930px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="1 / 4" style="width: 450px; margin-right: 15px;"><span>Envio gratis +35usd / devoluciones gratuitas / 24 horas</span></div>
                                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="2 / 4" style="width: 450px; margin-right: 15px;"><span>Envio gratis +35usd / devoluciones gratuitas / 24 horas</span></div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="3 / 4" style="width: 450px; margin-right: 15px;"><span>Envio gratis +35usd / devoluciones gratuitas / 24 horas</span></div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="4 / 4" style="width: 450px; margin-right: 15px;"><span>Envio gratis +35usd / devoluciones gratuitas / 24 horas</span></div></div>
                            <div class="swiper-button-prev banner__button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-27ab769ed9e107a8e">&lt;&lt;</div>
                            <div class="swiper-button-next banner__button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-27ab769ed9e107a8e">&gt;&gt;</div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
                <div class="grid grid--fluid">
                    <nav class="navbar__nav col-start-1 col-width-12 navbar__nav--animated">
                        <button class="navbar__toggle" id="navbarToggle"><span></span><span></span><span></span></button><a class="navbar__logo-wrap" href="<?php echo get_site_url(); ?>"><img class="navbar__logo" src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/app-logo.svg"></a>
                        <ul class="navbar__list">
                            <li class="navbar__item"><a class="navbar__link" href="running.html">shop</a></li>
                            <li class="navbar__item"><a class="navbar__link" href="marca.html">marca</a></li>
                            <li class="navbar__item"><a class="navbar__link" href="atletas.html">atletas</a></li>
                            <li class="navbar__item"><a class="navbar__link" href="blog.html">blog</a></li>
                            <li class="navbar__item"><a class="navbar__link" href="#">la meta</a></li>
                            <li class="navbar__item navbar__register-wrap mobile-visible"><a class="navbar__link navbar__register-button mobile-visible" href=""><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/icono-mi-cuenta.svg">acceder / registrarse</a></li>
                        </ul>
                        <div class="navbar__tools"><a class="navbar__tool-btn mobile-hidden" href="welcome.html"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/icono-mi-cuenta.svg"></a>
                            <div class="dropdown lang-selector">
                                <button class="lang-selector__toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/ES-icon.svg"></button>
                                <div class="dropdown-menu lang-selector__menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item lang-selector__item" href="#">ES</a><a class="dropdown-item lang-selector__item" href="#">EN</a></div>
                            </div>
                            <button class="navbar__tool-btn" id="cartToggler" type="button"><img class="cart-toggler" src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/icono-bolsa-vacia.svg"></button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->
