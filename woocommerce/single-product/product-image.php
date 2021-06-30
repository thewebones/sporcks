<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>

<div class="grid product-details-section__content">
    <div class="col-start-1 col-width-8 tablet-col-start-1 tablet-col-width-7 mobile-land-col-start-1 mobile-land-col-width-12">
        <div class="product-slider">
            <div class="product-slider__wrap">
                <div class="swiper-container product-slider__gallery-thumbs swiper-container-initialized swiper-container-vertical swiper-container-thumbs">
                    <div class="swiper-wrapper" id="swiper-wrapper-c77c04f6d21f7f5a" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s; margin-bottom: 150px">
                        <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="<?php 0 ?>/<?php $total ?>" style="height: 104px; margin-bottom: 10px;">
                            <img class="product-slider__img mt-3" src="<?php echo wp_get_attachment_image_src($post_thumbnail_id,'full')[0];?>">
                        </div>
                        <?php
                        $count = 0;
                        $total=count($product->get_gallery_image_ids(), COUNT_RECURSIVE);

                        if($product->get_gallery_image_ids()){
                            foreach ($product->get_gallery_image_ids() as $item) {?>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="<?php $count ?>/<?php $total ?>" style="height: 104px; margin-bottom: 10px;">
                                    <img class="product-slider__img mt-3" src="<?php echo wp_get_attachment_image_src($item,'full')[0];?>">
                                </div>

                                <?php $count ++; } } ?>

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
            </span>
                </div>
                <!-- Imagen de la Galeria -->
                <div class="swiper-container product-slider__container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" id="swiper-wrapper-eebe994fee266b3b" aria-live="polite" style="transform: translate3d(-1575px, 0px, 0px); transition: all 0ms ease 0s;">
                    <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 525px;">
                        <span style="display: inline-block; position: relative; overflow: hidden;">
                            <img class="product-slider__img" src="<?php echo wp_get_attachment_image_src($post_thumbnail_id,'full')[0];?>" style="display: block;">
                            <img role="presentation" alt="" src="<?php echo wp_get_attachment_image_src($post_thumbnail_id,'full')[0];?>" class="zoomImg" style="position: absolute; top: -432px; left: -926.714px; opacity: 0; width: 1500px; height: 1500px; border: none; max-width: none; max-height: none;">
                            </span>
                                </div>
                        <?php
                        $count = 1;
                        $total=count($product->get_gallery_image_ids(), COUNT_RECURSIVE);

                        if($product->get_gallery_image_ids()){
                            foreach ($product->get_gallery_image_ids() as $item) {?>
                                <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 525px;">
                        <span style="display: inline-block; position: relative; overflow: hidden;">
                            <img class="product-slider__img" src="<?php echo wp_get_attachment_image_src($item,'full')[0];?>" style="display: block;">
                            <img role="presentation" alt="" src="<?php echo wp_get_attachment_image_src($item,'full')[0];?>" class="zoomImg" style="position: absolute; top: -432px; left: -926.714px; opacity: 0; width: 1500px; height: 1500px; border: none; max-width: none; max-height: none;">
                            </span>
                                </div>

                                <?php $count ++; } } ?>

                    </div>
                    <div class="swiper-button-prev product-slider__button-prev product-slider__default-btn" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                    <div class="swiper-button-next product-slider__button-next product-slider__default-btn" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                    <div class="swiper-button-prev product-slider__pagination-btn product-slider__button-prev" style="display:none;" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                    <div class="swiper-button-prev product-slider__pagination-btn product-slider__button-next" style="display:none;" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="product-slider__pagination-wrap">
                    <div class="swiper-button-prev product-slider__pagination-btn product-slider__button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                    <div class="swiper-pagination product-slider__pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                    <div class="swiper-button-next product-slider__pagination-btn product-slider__button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-eebe994fee266b3b" aria-disabled="false"></div>
                </div>
            </div>
        </div>
    </div>


<!--<div class="--><?php //echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?><!--" data-columns="--><?php //echo esc_attr( $columns ); ?><!--" style="opacity: 0; transition: opacity .25s ease-in-out;">-->
<!---->
<!--    <figure class="woocommerce-product-gallery__wrapper">-->
<!--		--><?php
//		if ( $post_thumbnail_id ) {
//			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
//		} else {
//			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
//			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
//			$html .= '</div>';
//		}
//
//		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
//
//		do_action( 'woocommerce_product_thumbnails' );
//		?>
<!--	</figure>-->
<!--</div>-->
