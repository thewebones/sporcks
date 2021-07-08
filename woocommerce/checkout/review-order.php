<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- <table class="shop_table woocommerce-checkout-review-order-table">
	<thead>
		<tr>
			<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-total"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		do_action( 'woocommerce_review_order_before_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
				<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
					<td class="product-name">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?>
						<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times;&nbsp;%s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</td>
					<td class="product-total">
						<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</td>
				</tr>
				<?php
			}
		}

		do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
	</tbody>
	<tfoot>

		<tr class="cart-subtotal">
			<th><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			<td><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
					<tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<tr class="order-total">
			<th><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
			<td><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>

		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

	</tfoot>
</table> -->


<!-- Ok Cart -->

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
        <div class="cart__footer">
          <div class="cart__row">
            <div class="cart__totals-table">
              <div class="cart__totals-row"><span>Subtotal</span><span><?php echo WC()->cart->get_cart_subtotal() ?> EUR</span></div>
              <div class="cart__totals-row"><span>Shipping</span><span><?php echo WC()->cart->get_cart_shipping_total() ?></span>
              </div>
            </div>
          </div>
          <div class="cart__row">
            <div class="cart__totals-values"><span>Total</span><span><?php echo WC()->cart->get_cart_total() ?> EUR</span></div>
            
          </div>
        </div>
