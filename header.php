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
    <div class="cart">
      <div class="cart__backdrop"></div>
      <form class="cart__wrapper">
        <div class="cart__header">
          <div class="cart__row">
            <div class="cart__title-wrap">
              <div class="cart__title">
                  <img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/db-cart.svg" alt="">Cart Shopping cart (<?php echo WC()->cart->get_cart_contents_count() ?>)</div>
              <button class="cart__close cart-toggler" type="button">X</button>
            </div>
          </div>
          <div class="cart__row">
            <div class="cart__free-shipping">
              <p>You are €11 away from getting free shipping</p>
              <div class="cart__progress-bar">
                <div class="cart__progress animated-width" data-width="85%" style="width: 85%;"></div>
              </div>
            </div>
          </div>
          <div class="cart__row" style="display:none"></div>
        </div>
        <div class="cart__body">
          <div class="cart__row">
              <?php $cart=WC()->cart;
//

              foreach ($cart->get_cart() as $cart_item_key=>$cart_item){
                  $product = $cart_item['data'];

              ?>
            <div class="cart-item"><img class="cart-item__img" src="<?php echo wp_get_attachment_image_src($product->get_image_id(),'full')[0];?>">
              <div class="cart-item__content">
                  <div class="cart-item__name"><a style="color: black" href="<?php echo $product->get_permalink( $cart_item ); ?>"><?php echo $product->get_title( $cart_item ); ?></a></div>
                <div class="cart-item__combination">Talla <?php echo $product->get_attribute('talla'); ?></div>
                <div class="cart-item__amount inc-dec-handler">Quantity
                  <button class="cart-item__amount-btn dec-btn" type="button">-</button><span class="cart-item__amount-value inc-dec-value">1</span>
                  <input class="cart-item__amount-value inc-dec-control" type="number" hidden="" value="<?php echo $cart_item['quantity'] ?>" min="0">
                  <button class="cart-item__amount-btn inc-btn" type="button">+</button>
                </div>
                <div class="cart-item__footer">

                  <a href="<?php echo WC()->cart->get_remove_url( $cart_item_key );?>" class="cart-item__remove-btn" type="button">Remove</a>
                  <div class="cart-item__total"><?php echo WC()->cart->get_product_subtotal( $product, $cart_item['quantity'] );; ?> EUR</div>
                </div>
              </div>
            </div>
             <?php } ?>
          </div>
          <div class="cart__row"><a class="cart__promo-toggler" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Promo code</a>
            <div class="collapse" id="collapseExample">

              <input class="cart__promo-input" type="text">
              <button class="cart__promo-button">
                <svg class="sc-iELTvK dIuXzo" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="24" height="24" rx="12" fill="#0059AF"></rect>
                  <path d="M10 17L15 12L10 7" stroke="#F9F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="cart__row">
            <div class="cart__payment">
              <p>We accept:</p>
              <div class="cart__pay-methods"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/mc.png" alt="mc" title="mc"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/visa.png" alt="visa" title="visa"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/maestro.png" alt="maestro" title="maestro"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/paypal.png" alt="paypal" title="paypal"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/amex.png" alt="amex" title="amex"></div>
            </div>
          </div>
          <div class="cart__row">
            <div class="cart__free-return">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="12" fill="#D1D1D1"></rect>
                <path d="M6.54495 12.3617L10.9533 17.1217L18.0284 8.36169" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>Free returns, all duties paid, 2 years warranty on all socks.
            </div>
          </div>
        </div>
        <div class="cart__footer">
          <div class="cart__row">
            <div class="cart__totals-table">
              <div class="cart__totals-row"><span>Subtotal</span><span><?php echo WC()->cart->get_cart_subtotal() ?> EUR</span></div>
              <div class="cart__totals-row"><span>Shipping</span><span><?php echo WC()->cart->get_cart_shipping_total() ?></span>
              </div>
            </div>
          </div>
          <div class="cart__row">
            <div class="cart__totals-values"><span>Total</span><span><?php echo WC()->cart->get_cart_total() ?> EUR</span></div><a class="button button--outline" href="<?php echo wc_get_checkout_url()?>">Proceed to checkout</a>
            <button class="cart__back-btn cart-toggler" type="button">Continue shopping</button>
          </div>
        </div>
      </form>
    </div>
        <div class="navbar" id="navbar">
            <div class="navbar__backdrop"></div>
            <div class="navbar__wrap">
             <div class="banner" id="banner">
              <div class="banner__wrap">
                <div class="swiper-container banner__slider">
                  <div class="swiper-wrapper">
                    <?php if(get_field("repeater_textos_slider","option")){
                      foreach (get_field("repeater_textos_slider","option") as $item){ ?>
                        <div class="swiper-slide"><span><?php echo $item["texto_slider_promo"] ?></span></div>
                      <?php }} ?>
                   
                  </div>
                 <div class="swiper-button-prev banner__button-prev"><<</div>
                 <div class="swiper-button-next banner__button-next">>></div>
                </div>
             </div>
            </div>
            
                <div class="grid grid--fluid <?php if (!is_front_page()) echo "fondo_dinamico"?>">
                    <nav class="navbar__nav col-start-1 col-width-12 navbar__nav--animated">
                        <button class="navbar__toggle" id="navbarToggle"><span></span><span></span><span></span></button>
                        <a class="navbar__logo-wrap" href="<?php echo get_site_url(); ?>">
                        <img class="navbar__logo" src="<?php echo get_field("logo","option") ?>"></a>
                        <ul class="navbar__list">
                            <?php if(get_field("menu_principal_repeater_","option")){ 
                            foreach (get_field("menu_principal_repeater_","option") as $item){    
                            ?>
                            <li class="navbar__item"><a class="navbar__link" href="<?php echo $item["link_menu"]["url"] ?>"><?php echo $item["link_menu"]["title"] ?></a></li>
                           
                        <?php }} ?>
                            </ul>
                        <div class="navbar__tools">
                            <a class="navbar__tool-btn mobile-hidden" href="<?php echo get_field("boton_usuario_link","option")["url"]  ?>">
                            <img src="<?php echo get_field("boton_usuario_icono","option")?>">
                            </a>
                            <div class="dropdown lang-selector">
                                <button class="lang-selector__toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/ES-icon.svg"></button>
                                <div class="dropdown-menu lang-selector__menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item lang-selector__item" href="#">ES</a>
                                <a class="dropdown-item lang-selector__item" href="#">EN</a></div>
                            </div>
                            <button  class="navbar__tool-btn" id="cartToggler" type="button">
                            <img class="cart-toggler" src="<?php echo get_field("boton_menu_lateral_icono","option")?>"/></button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
	</header><!-- #masthead -->
