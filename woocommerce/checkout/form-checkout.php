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
$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
?>


<div style="height:200px"></div>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

<?php if ( $checkout->get_checkout_fields() ) : ?>
		
		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col-12 row" id="customer_details">
		<div class="checkout__wrapper">
        <div class="grid">
          <div class="col-start-1 col-width-7 mobile-land-col-start-1 mobile-land-col-width-12">
            <section class="forms-checkout-section">
				<a class="forms-checkout-section__back-link" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>"><?php echo get_field("titulo_para_ir_atras","option")?></a>
              <form class="forms-checkout-section__wrapper">
                <div class="forms-checkout-section__item">
                  <div class="checkout-email-form checkout-form">
                    <h3 class="checkout-form__title"><?php echo get_field("titulo_de_email","option")?></h3>
                    <div class="checkout-form__row">
                      <div class="checkout-form__control">
					  <label class="checkout-form__label" for="checkoutEmailField"><?php echo get_field("span_arriba_del_input","option")?></label>
					   <?php woocommerce_form_field('billing_email', array('placeholder' => 'your e-mail *', 'required' => true), $checkout->get_value('billing_email')); ?>
                        
                         <!--<input class="checkout-form__input" type="email" id="checkoutEmailField" email="" require="" placeholder="Your e-mail"> -->
						<span class="checkout-form__control-info"><?php echo get_field("span_abajo_del_input","option")?></span>
                      </div>
                    </div>
                    <div class="checkout-form__row">
                      <input class="checkout-form__check" type="checkbox" hidden="" id="checkoutEmailCheckField">
                      <label class="checkout-form__check-label" for="checkoutEmailCheckField"><?php echo get_field("texto_del_checkbox_del_email","option")?></span> <img class="checkout-email-form__info-icon" src="<?php echo get_field("ico_del_checkbox_del_email","option")?>" title="information here"><br><?php echo get_field("texto_de_term","option")?><a class="checkout-form__link" href="<?php echo get_field("url__terms_and_conditions","option")?>"> <?php echo get_field("text_de_enlace_de_term","option")?></a></label>
                    </div>
                  </div>
                </div>
                <div class="forms-checkout-section__item">
                  <div class="checkout-address-form checkout-form">
                    <h3 class="checkout-form__title"><?php echo get_field("titulo_del_inicio_del_form_shipping","option")?></h3>
                    <div class="checkout-form__row">
                      <div class="checkout-form__control">
                        <label class="checkout-form__label" for="checkoutEmailField"><?php echo get_field("span_arriba_del_form","option")?></label>
                        <?php woocommerce_form_field('shipping_country', array('placeholder' => 'Spain', 'required' => true), $checkout->get_value('shipping_country')); ?>
						<!-- <select class="checkout-form__input" id="countryField">
                          <option value="1">Spain</option>
                        </select> -->
                      </div>
                    </div>
                    <div class="checkout-form__row">
                      <div class="checkout-form__cols checkout-form__cols--50-50">
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="firstNameField"><?php echo get_field("titulo_del_nombre","option")?></label>
						  <?php woocommerce_form_field('shipping_first_name', array('placeholder' => 'First name', 'required' => true), $checkout->get_value('shipping_first_name')); ?>
                          <!-- <input class="checkout-form__input" type="text" id="firstNameField" require="" placeholder="First name"> -->
                        </div>
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="lastNameField"><?php echo get_field("titulo_del_apellido","option")?></label>
                          <?php woocommerce_form_field('shipping_last_name', array('placeholder' => 'Last name', 'required' => true), $checkout->get_value('shipping_last_name')); ?>
						  <!-- <input class="checkout-form__input" type="text" id="lastNameField" require="" placeholder="Last name"> -->
                        </div>
                      </div>
                    </div>
                    <div class="checkout-form__row">
                      <div class="checkout-form__control">
                        <label class="checkout-form__label" for="streetField"><?php echo get_field("titulo_de_direccion","option")?></label>
                        <?php woocommerce_form_field('shipping_address_1', array('placeholder' => 'Street', 'required' => true), $checkout->get_value('shipping_address_1')); ?>
						<!-- <input class="checkout-form__input" type="text" id="streetField" require="" placeholder="Street"> -->
                      </div>
                    </div>
                    <div class="checkout-form__row">
                      <div class="checkout-form__cols checkout-form__cols--25-75">
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="zipCodeField"><?php echo get_field("titulo_codigo_postal","option")?></label>
						  <?php woocommerce_form_field('shipping_postcode', array('placeholder' => 'Post code / Zip', 'required' => true), $checkout->get_value('shipping_postcode')); ?>
                          <!-- <input class="checkout-form__input" type="text" id="zipCodeField" require="" placeholder="Post code / Zip"> -->
                        </div>
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="cityField"><?php echo get_field("titulo_ciudad","option")?></label>
						  <?php woocommerce_form_field('shipping_city', array('placeholder' => 'City', 'required' => true), $checkout->get_value('shipping_city')); ?>
                          <!-- <input class="checkout-form__input" type="text" id="cityField" require="" placeholder="City / Town"> -->
                        </div>
                      </div>
                    </div>
                    <div class="checkout-form__row">
                      <div class="checkout-form__cols checkout-form__cols--25-75">
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="dialCodeField"><?php echo get_field("codigo_del_pais","option")?></label>
                          <select class="checkout-form__input" id="dialCodeField">
                            <option value="1">Spain +34</option>
                          </select>
                        </div>
                        <div class="checkout-form__control">
                          <label class="checkout-form__label" for="phoneField"><?php echo get_field("titulo_telefono","option")?></label>
                          <?php woocommerce_form_field('billing_phone', array('placeholder' => 'Phone number', 'required' => true), $checkout->get_value('billing_phone')); ?>
						  <!-- <input class="checkout-form__input" type="text" id="phoneField" placeholder="Phone number"> -->
                        </div>
                      </div><span class="checkout-form__control-info"><?php echo get_field("span_de_abajo_del_form","option")?></span>
                    </div>
                    <div class="checkout-form__row">
                      <input class="checkout-form__check" type="checkbox" hidden="" id="checkoutAddressCheckField" checked="">
                      <label class="checkout-form__check-label" for="checkoutAddressCheckField"><?php echo get_field("span_de_abajo_del_form","option")?></label>
                    </div>
                  </div>
                </div>
                <div class="forms-checkout-section__item">
                  <div class="checkout-delivery-form checkout-form">
                    <h3 class="checkout-form__title">3. How do you want it delivered?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis culpa cum eveniet iste labore nemo quisquam sequi? Ad alias delectus ea esse eveniet ipsa molestias quo reiciendis repellat tempora, unde.</p>
                    <div class="delivery-options">
                      <div class="delivery-options__header">
                        <h5 class="delivery-options__title">Delivery options</h5>
                      </div>
                      <div class="delivery-options__body">
                        <div class="delivery-options__item">
                          <input class="delivery-options__opt-check" type="radio" hidden="" id="deliveryOpt1" name="deliveryOptions" checked="">
                          <label class="delivery-options__item-content" for="deliveryOpt1">
                            <div class="delivery-options__delivery-info">
                              <p class="delivery-options__delivered-by">DHL Home Delivery</p>
                              <p class="delivery-options__delivery-desc">Delivered in 4-9 business days</p>
                            </div>
                            <div class="delivery-options__delivery-totals">
                              <div class="delivery-options__price delivery-options__price--deprecated">€ 7</div>
                              <div class="delivery-options__price">Free</div><img class="delivery-options__delivery-logo" src="img/dhl-logo.png">
                            </div>
                          </label>
                        </div>
                        <div class="delivery-options__item">
                          <input class="delivery-options__opt-check" type="radio" hidden="" id="deliveryOpt2" name="deliveryOptions">
                          <label class="delivery-options__item-content" for="deliveryOpt2">
                            <div class="delivery-options__delivery-info">
                              <p class="delivery-options__delivered-by">DHL Home Delivery</p>
                              <p class="delivery-options__delivery-desc">Delivered in 4-9 business days</p>
                            </div>
                            <div class="delivery-options__delivery-totals">
                              <div class="delivery-options__price delivery-options__price--deprecated">€ 7</div>
                              <div class="delivery-options__price">Free</div><img class="delivery-options__delivery-logo" src="img/dhl-logo.png">
                            </div>
                          </label>
                        </div>
                      </div>
                      <div class="delivery-options__footer"><span class="delivery-options__delivered-to">ingrid</span></div>
                    </div>
                  </div>
                </div>
                <div class="forms-checkout-section__item">
                  <div class="checkout-payment-form checkout-form">
                    <h3 class="checkout-form__title">4. How do you want to pay?</h3>
                    <p>Shipment options will show once  you fill out your shipping information.</p>
                  </div>
                </div>
              </form>
            </section>
          </div>
          <div class="col-start-8 col-width-5 mobile-land-col-start-1 mobile-land-col-width-12">
            <div class="cart cart--static">
              <div class="cart__backdrop"></div>
              <form class="cart__wrapper">
                <div class="cart__header">
                  <div class="cart__row">
                    <div class="cart__title-wrap">
                      <div class="cart__title"><img src="img/db-cart.svg">Cart Shopping cart (1)</div>
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
                    <div class="cart-item"><img class="cart-item__img" src="img/single-orange-sox.jpg">
                      <div class="cart-item__content">
                        <div class="cart-item__name">Orange sox</div>
                        <div class="cart-item__combination">Talla M</div>
                        <div class="cart-item__amount inc-dec-handler">Quantity
                          <button class="cart-item__amount-btn dec-btn" type="button">-</button><span class="cart-item__amount-value inc-dec-value">1</span>
                          <input class="cart-item__amount-value inc-dec-control" type="number" hidden="" value="1" min="0">
                          <button class="cart-item__amount-btn inc-btn" type="button">+</button>
                        </div>
                        <div class="cart-item__footer">
                          <button class="cart-item__remove-btn" type="button">Remove</button>
                          <div class="cart-item__total">139 EUR</div>
                        </div>
                      </div>
                    </div>
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
                      <div class="cart__pay-methods"><img src="img/mc.png" alt="mc" title="mc"><img src="img/visa.png" alt="visa" title="visa"><img src="img/maestro.png" alt="maestro" title="maestro"><img src="img/paypal.png" alt="paypal" title="paypal"><img src="img/amex.png" alt="amex" title="amex"></div>
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
                      <div class="cart__totals-row"><span>Subtotal</span><span>139 EUR</span></div>
                      <div class="cart__totals-row"><span>Shipping</span><span>FREE</span>
                      </div>
                    </div>
                  </div>
                  <div class="cart__row">
                    <div class="cart__totals-values"><span>Total</span><span>146 EUR</span></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
		
		<div class="col-6">
				
			</div>

			<div class="col-4">
				<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
		
				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>

			
		</div>

	

	<?php endif; ?>
	

	
	

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
