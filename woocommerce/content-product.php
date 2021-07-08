<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
 */
?>
<?php

$argsCategoria = array(
    'taxonomy' => 'product_cat',
    'orderby' => 'name',
    'order'   => 'ASC'
);

$cats = get_categories($argsCategoria);


defined( 'ABSPATH' ) || exit;

global $product;

$cat_id=$product->get_category_ids()[0];
$name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
$idImagenCover=get_post_meta( $product->id, 'imagen_hover', true );
$urlImagenHover=wp_get_attachment_image_src($idImagenCover,'full')[0];


$tallas=null;
if($product->is_type('variable'))
    $tallas=$product->get_available_variations();

?>

<div class="sox-card">
    <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="<?php the_permalink(); ?>"><img class="sox-card__image" style="height:100%;" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
        <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
        <p class="sox-card__desc"><?php echo $name?></p>
        <h5 class="sox-card__price"><?php echo $product->get_price().''.get_woocommerce_currency_symbol() ?></h5>
    </div>

    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="<?php the_permalink(); ?>"><img class="sox-card__image" style="height:100%;" src="<?php echo $urlImagenHover ?>"></a>
        <p class="sox-card__desc"><?php echo $product->get_name()?></p>
        <p class="sox-card__desc"><?php echo $name?></p>
        <h5 class="sox-card__price"><?php echo $product->get_price().''.get_woocommerce_currency_symbol() ?></h5>
        <div class="sox-card__shop-tools">
            <?php if($tallas){?>
                <div class="sox-card__sizes mb-2">
                    <?php foreach($tallas as $index=>$talla){ ?>
                        <div class="sox-card__size-item form_radio" onClick="product_variable(event)">
                            <input class="sox-card__size-radio" name="talla" type="radio" value="<?php echo $talla['attributes']['attribute_pa_talla'] ?>" id="sizeRadio-<?php echo $product->id . $talla['attributes']['attribute_pa_talla']  ?>"  >
                            <label class="sox-card__size-label" for="sizeRadio-<?php echo $product->id . $talla['attributes']['attribute_pa_talla']  ?>"><span><?php echo $talla['attributes']['attribute_pa_talla'] ?></span><span class="sox-card__size-info"><?php echo $talla->description ?></span></label>
                            <input type="hidden" value=<?php echo $talla['variation_id'] ?>></input>
                        </div>
                    <?php  }?>
                </div>
                <input type="hidden" value="?add-to-cart=<?php echo $product->id ?>"/>
                <button class="btn-variable" disabled>
                    <a rel="nofollow" data-quantity="1">AÑADIR</a>

                </button>
            <?php  }
            else{
                ?>
                <button class="sox-card__cart-btn">
                    <a  rel="nofollow" href="?add-to-cart=<?php echo $product->id ?>" data-quantity="1">AÑADIR</a>
                </button>
            <?php } ?>
        </div>
    </div>
</div>
