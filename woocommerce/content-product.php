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

/* $talla=$_POST['talla'];
$productId=$_POST['productId'];
var_dump($talla);
var_dump($productId); */

$argsCategoria = array(
    'taxonomy' => 'product_cat',
    'orderby' => 'name',
    'order'   => 'ASC'
  );
  
  $cats = get_categories($argsCategoria);
  
 
defined( 'ABSPATH' ) || exit;

global $product;
$tallas=$product->get_available_variations();
$cat_id=$product->get_category_ids()[0];
$name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$idImagenCover=get_post_meta( $product->id, 'imagen_hover', true );
$urlImagenHover=wp_get_attachment_image_src($idImagenCover,'full')[0];

  var_dump($product->get_available_variations()[0]['variation_id']);  
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
        <div action="" class="sox-card__shop-tools" method="POST">
            <div class="sox-card__sizes">
                <?php foreach($tallas as $index=>$talla){ ?>
                   
                    <div class="sox-card__size-item" >
                        <input class="sox-card__size-radio" type="radio" name="talla" value="<?php echo $talla['attributes']['attribute_pa_talla'] ?>" id="sizeRadio-<?php echo $product->id . $talla['attributes']['attribute_pa_talla']  ?>"  >
                        <label class="sox-card__size-label" for="sizeRadio-<?php echo $product->id . $talla['attributes']['attribute_pa_talla']  ?>"><span><?php echo $talla['attributes']['attribute_pa_talla'] ?></span><span class="sox-card__size-info"><?php echo $talla->description ?></span></label>
                    </div>
                <?php  
                }?>
            </div> 
            <!-- <input name="productId" type="hidden" value="<?php echo $product->id ?>"/> -->
            <button class="sox-card__cart-btn" onClick="sendTalla(event)" type="submit">AÑADIR</button>
      
      </div>
      <button class="f" ><a href="http://localhost/sporck/shop//?add-to-cart=203&attribute_pa_talla=qq">AÑADIR</a></button>
               
    </div>
    
</div>
