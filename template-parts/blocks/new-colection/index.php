<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/18/2021
 * Time: 12:51 PM
 */
$arrayColStart=[1,4,7,10];
$arraytablet=[1,7,1,7];
?>
<section class="sox-collection-section">
    <h2 class="sox-collection-section__title sox-collection-section__title--bigger"><?php echo get_field("titulo")?></h2>
    <div class="sockscollections">
    <?php

    if (get_field("nuevos_productos")){
    foreach (get_field("nuevos_productos") as $key=>$item) {
       $product=wc_get_product(array_values($item)[0]);
       $id_product=(array_values($item)[0]);
        $cat_id=$product->get_category_ids()[0];
        $name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
        $tallas=null;
        if($product->is_type('variable'))
        $tallas=$product->get_available_variations();
        $idImagenCover=get_post_meta( $product->id, 'imagen_hover', true );
        $urlImagenHover=wp_get_attachment_image_src($idImagenCover,'full')[0];
        ?>
    <div class="sox-card">
    <div class="sox-card__wrapper sox-card__wrapper--visible"><a class="sox-card__image-wrap" href="<?php echo the_permalink(); ?>"><img class="sox-card__image" style="height:100%;" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
        <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
        <p class="sox-card__desc"><?php echo $name?></p>
        <h5 class="sox-card__price"><?php echo $product->get_price().''.get_woocommerce_currency_symbol() ?></h5>
    </div>
    
    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="<?php echo the_permalink(); ?>"><img class="sox-card__image" style="height:100%;" src="<?php echo $urlImagenHover ?>"></a>
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

    <?php } }?>
    </div>
</section>