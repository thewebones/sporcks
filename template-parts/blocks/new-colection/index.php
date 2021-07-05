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
    <div class="grid mobile-port-hidden-not-now">
    <?php

    if (get_field("nuevos_productos")){
    foreach (get_field("nuevos_productos") as $key=>$item) {
       $product=wc_get_product(array_values($item)[0]);
       $id_product=(array_values($item)[0]);
        $cat_id=$product->get_category_ids()[0];
        $name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
        ?>

        <div class="col-start-<?php echo $arrayColStart[$key] ?> col-width-3 tablet-col-start-<?php echo $arraytablet[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
        <div class="sox-card">
                <div class="sox-card__wrapper sox-card__wrapper--visble">
                    <a class="sox-card__image-wrap" href="<?php echo $product->get_permalink() ?>">
                    <img class="sox-card__image" src=" <?php echo $product->get_image() ?></a>
                    <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
                    <p class="sox-card__desc"><?php echo $name ?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?>$</h5>
                </div>
                <div class="sox-card__wrapper sox-card__wrapper--hidden">
                    <?php $id_imagen_hover=get_post_meta( $id_product, 'imagen_hover', true );?>
                    <a class="sox-card__image-wrap" href="<?php echo $product->get_permalink() ?>">
                        <img class="sox-card__image" src="<?php echo wp_get_attachment_image_src($id_imagen_hover,'full')[0] ; ?>"></a>
                    <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
                    <p class="sox-card__desc"><?php echo $name ?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?>$</h5>
                    <div class="sox-card__shop-tools">
                          <div class="sox-card__sizes">
                              <?php $attribute_taxonomies = wc_get_attribute_taxonomies();
                              $lista_talla=get_terms( wc_attribute_taxonomy_name(array_values($attribute_taxonomies)[0]->attribute_name));
                              foreach ($lista_talla as $l){ ?>
                            <div class="sox-card__size-item">
                                <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-TT7_Y2" name="radioGroup0" checked="checked">
                                <label class="sox-card__size-label" for="sizeRadio-0-TT7_Y2"><span><?php echo($l->name);?></span>
                                    <span class="sox-card__size-info"><?php echo($l->description);?></span></label>

                           </div>
                              <?php } ?>
                        </div>

                        <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } }?>
    </div>
</section>