<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<?php //if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
<!--    <div class="woocommerce-account-fields">-->
<!--        --><?php //if ( ! $checkout->is_registration_required() ) : ?>
<!---->
<!--            <p class="form-row form-row-wide create-account">-->
<!--                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">-->
<!--                    <input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" --><?php //checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?><!-- type="checkbox" name="createaccount" value="1" /> <span>--><?php //esc_html_e( 'Create an account?', 'woocommerce' ); ?><!--</span>-->
<!--                </label>-->
<!--            </p>-->
<!---->
<!--        --><?php //endif; ?>
<!---->
<!--        --><?php //do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>
<!---->
<!--        --><?php //if ( $checkout->get_checkout_fields( 'account' ) ) : ?>
<!---->
<!--            <div class="create-account">-->
<!--                --><?php //foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
<!--                    --><?php //woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
<!--                --><?php //endforeach; ?>
<!--                <div class="clear"></div>-->
<!--            </div>-->
<!---->
<!--        --><?php //endif; ?>
<!---->
<!--        --><?php //do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
<!--    </div>-->
<?php //endif; ?>



<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php esc_html_e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<!-- <h3><?php esc_html_e( 'Billing details', 'woocommerce' ); ?></h3> -->
		<a class="forms-checkout-section__back-link" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>">Continue shopping</a>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce">
		<?php
		$fields = $checkout->get_checkout_fields( 'billing' );

        $fields['billing_email']['priority']=1;
        $fields['billing_country']['priority']=2;
        $fields['billing_first_name']['priority']=3;
		?>


    <div class="checkout-form__control">
		<h3 class="checkout-form__title">1. What's your e-mail?</h3>
            <?php
            $fields['billing_email']['class']=array('checkout-form__input');
			$fields['billing_email']['label']='Your name';
            woocommerce_form_field( 'billing_email', $fields['billing_email'], $checkout->get_value( 'billing_email' ) );
            ?>
			

		<p class="checkout-form__control-info">So we know where to send your order confirmation.</p>
		<div class="checkout-form__row">
			<input class="checkout-form__check" type="checkbox" hidden="" id="checkoutEmailCheckField">
			<label class="checkout-form__check-label" for="checkoutEmailCheckField">Join DB Black and get exclusive content made just for you. information here </span> <img class="checkout-email-form__info-icon" src="<?php echo get_field("ico_del_checkbox_del_email","option")?>" title="information here"><br>By joining you accept the terms and conditions <a class="checkout-form__link" href="<?php echo get_field("url__terms_and_conditions","option")?>"> terms and conditions</a></label>
	    </div>


	  	

       
<div class="forms-checkout-section__item">
            <div class="checkout-address-form checkout-form">
            	<h3 class="checkout-form__title">2. Where's the ordering going?</h3>
				<?php
				$fields['billing_country']['class']=array('checkout-form__input');
				$fields['billing_country']['label']='Shipping to';
				woocommerce_form_field( 'billing_country', $fields['billing_country'], $checkout->get_value( 'billing_country' ) );
				?>
	
			</div>
	

	<div class="checkout-form__row">
             <div class="checkout-form__cols checkout-form__cols--50-50">
                    <div class="checkout-form__control">
						<?php
							$fields['billing_first_name']['class']=array('checkout-form__input');
							$fields['billing_first_name']['label']='First name';
							$fields['billing_first_name']['placeholder']='First name';
							woocommerce_form_field( 'billing_first_name', $fields['billing_first_name'], $checkout->get_value( 'billing_first_name' ) );
							?>
                     </div>
                     <div class="checkout-form__control">
						<?php
							$fields['billing_last_name']['class']=array('checkout-form__input');
							$fields['billing_last_name']['label']='Last name';
							$fields['billing_last_name']['placeholder']='Last name';
							woocommerce_form_field( 'billing_last_name', $fields['billing_last_name'], $checkout->get_value( 'billing_last_name' ) );
							?>
                      </div>
             </div>



			 <div class="checkout-form__control">
					  <?php
							$fields['billing_address_1']['class']=array('checkout-form__input');
							$fields['billing_address_1']['label']='Street name and number';
							$fields['billing_address_1']['placeholder']='Street';
							woocommerce_form_field( 'billing_address_1', $fields['billing_address_1'], $checkout->get_value( 'billing_address_1' ) );
						?>
                      </div>
                 

					  <div class="checkout-form__cols checkout-form__cols--25-75">
                        <div class="checkout-form__control">
						<?php
							$fields['billing_postcode']['class']=array('checkout-form__input');
							$fields['billing_postcode']['label']='Post code / Zip';
							$fields['billing_postcode']['placeholder']='Post code / Zip';
							woocommerce_form_field( 'billing_postcode', $fields['billing_postcode'], $checkout->get_value( 'billing_postcode' ) );
						?>
                        </div>
                        <div class="checkout-form__control">
                        <?php
							$fields['billing_city']['class']=array('checkout-form__input');
							$fields['billing_city']['label']='City';
							$fields['billing_city']['placeholder']='City';
							woocommerce_form_field( 'billing_city', $fields['billing_city'], $checkout->get_value( 'billing_city' ) );
						?>
                        </div>
                      </div>


					  <div class="checkout-form__cols checkout-form__cols--25-75">
                        <div class="checkout-form__control">
                        <?php
							$fields['billing_state']['class']=array('checkout-form__input');
							$fields['billing_state']['label']='Phone number';
							$fields['billing_state']['placeholder']='Phone number';
							woocommerce_form_field( 'billing_state', $fields['billing_state'], $checkout->get_value( 'billing_state' ) );
						?>
                        </div>
                        <div class="checkout-form__control">
                        <?php
							$fields['billing_phone']['class']=array('checkout-form__input');
							$fields['billing_phone']['label']='Phone number';
							$fields['billing_phone']['placeholder']='Phone number';
							woocommerce_form_field( 'billing_phone', $fields['billing_phone'], $checkout->get_value( 'billing_phone' ) );
						?>



        </div>



	</div>
	<span class="checkout-form__control-info">So we know where to send your order confirmation.</span>
    <div class="checkout-form__row">
    <input class="checkout-form__check" type="checkbox" hidden="" id="checkoutAddressCheckField" checked="">
    <label class="checkout-form__check-label" for="checkoutAddressCheckField">Use shipping as billing address</label>
    </div>

</div>
</div>

	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>






