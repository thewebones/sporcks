<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

    <div class="col-12 row" id="customer_details">
		<div class="checkout__wrapper">
        <div class="grid">
          <div class="col-start-1 col-width-7 mobile-land-col-start-1 mobile-land-col-width-12">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

      <div class="col-1">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>
    </div>
    </div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<!-- <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?> -->

	<div id="order_review" class="woocommerce-checkout-review-order col-start-8 col-width-5 mobile-land-col-start-1 mobile-land-col-width-12">
        <div class="cart cart--static">
            <div class="cart__backdrop"></div>
            <form class="cart__wrapper">
                <div class="cart__header">
                    <div class="cart__row">
                        <div class="cart__title-wrap">
                            <div class="cart__title">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/db-cart.svg" alt="">Cart Shopping cart (<?php echo WC()->cart->get_cart_contents_count() ?>)</div>
                        </div>
                    </div>
                    <div class="cart__row">
                        <div class="cart__free-shipping">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="24" height="24" rx="12" fill="#ffd204"></rect>
                                <path d="M6.54495 12.3617L10.9533 17.1217L18.0284 8.36169" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>Congrats! You'll get free shipping.
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
                            <div class="cart-item" style ="border-bottom: none"><img class="cart-item__img" src="<?php echo wp_get_attachment_image_src($product->get_image_id(),'full')[0];?>">
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
<!--                <div class="cart__footer">-->
<!--                    <div class="cart__row">-->
<!--                        <div class="cart__totals-table">-->
<!--                            <div class="cart__totals-row"><span>Subtotal</span><span>--><?php //echo WC()->cart->get_cart_subtotal() ?><!-- EUR</span></div>-->
<!--                            <div class="cart__totals-row"><span>Shipping</span><span>--><?php //echo WC()->cart->get_cart_shipping_total() ?><!--</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="cart__row">-->
<!--                        <div class="cart__totals-values"><span>Total</span><span>--><?php //wc_cart_totals_order_total_html(); ?><!--</span></div>-->
<!---->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
            </form>
        </div>
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<!-- <?php do_action( 'woocommerce_checkout_after_order_review' ); ?> -->

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
