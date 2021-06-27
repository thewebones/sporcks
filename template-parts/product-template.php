<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 18/06/21
 * Time: 12:25
 */
$product = wc_get_product( get_the_ID() );
?>

<!-- breadcrumb -->
<ul class="breadcrumb mt-5" >
      <li class="breadcrumb__item"><?php echo woocommerce_breadcrumb(); ?></li>
</ul>

<!-- /breadcrumb -->


<!-- Galery -->
<div class="grid product-details-section__content">
      <div class="col-start-1 col-width-8 tablet-col-start-1 tablet-col-width-7 mobile-land-col-start-1 mobile-land-col-width-12">
        <div class="product-slider">
          <div class="product-slider__wrap">
            <div class="swiper-container product-slider__gallery-thumbs swiper-container-initialized swiper-container-vertical swiper-container-thumbs">
              <div class="swiper-wrapper" id="swiper-wrapper-c77c04f6d21f7f5a" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s; margin-bottom: 150px">
              
            <?php
            $count = 1;
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

     <!-- Producto -->
      <div class="col-start-9 col-width-4 tablet-col-start-8 tablet-col-width-5 mobile-land-col-start-1 mobile-land-col-width-12">
        <div class="product-info">
          <h1 class="product-info__name"><?php echo $product->get_name(); ?></h1>
          <h2 class="product-info__type"></h2>
          <h2 class="product-info__price"><?php echo $product->get_price(); ?></h2>
          <form class="product-info__form">
            <div class="product-info__sizes">
              <h3 class="product-info__size-heading">Talla</h3>
              <div class="product-info__sizes-wrap">
                
                <?php $attribute_taxonomies = wc_get_attribute_taxonomies();
                $lista_talla=get_terms( wc_attribute_taxonomy_name(array_values($attribute_taxonomies)[0]->attribute_name));
                foreach ($lista_talla as $l){ ?>
                    <div class="size-check">
                        <input class="size-check__control" type="radio" name="sizeGroup1" id="radio-size-<?php echo ($l->name);?>" checked="">
                        <label class="size-check__label" for="radio-size-<?php echo ($l->name);?>"><?php echo ($l->name); ?></label>
                        <span class="size-check__info"><?php echo ($l->description); ?></span>                 
                    </div>
                <?php } ?>
              </div>
            </div>
            <div class="product-info__quantity">
              <h3 class="product-info__quantity-heading">Quantity</h3>
              <!-- <input class="product-info__quantity-input" type="number" value="1" min="1"> -->
            </div>
            <?php
                            echo apply_filters(
                                'woocommerce_loop_add_to_cart_link',
                                sprintf(
                                    '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button product-info__button button button--outline %s product_type_%s">%s</a>',
                                    esc_url( $product->add_to_cart_url() ),
                                    esc_attr( $product->get_id() ),
                                    esc_attr( $product->get_sku() ),
                                
                                    $product->is_purchasable() ? 'add_to_cart_button' : '',
                                    esc_attr( $product->product_type ),
                                    esc_html( $product->add_to_cart_text() )
                                ),
                                $product
                            );

                      
                            ?>
            <!-- <button class="product-info__button button button--outline">add to cart</button> -->
          </form>
          <div class="product-info__content">

            <p class="product-info__content-paragraph"><?php echo $product->get_short_description(); ?></p>
          
          </div><br>

          <!-- Tabs -->
          <div class="product-info__collapse">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseFeatures" role="button" aria-expanded="false" aria-controls="collapseFeatures"><?php echo get_field("features_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseFeatures">
              <p><?php echo get_field("features_contenido"); ?></p>
              
            </div>
          </div>
          <div class="product-info__collapse">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseSizing" role="button" aria-expanded="false" aria-controls="collapseSizing"><?php echo get_field("sizing_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseSizing">
              <p><?php echo get_field("sizing_contenido"); ?></p>
            </div>
          </div>
          <div class="product-info__collapse">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseShipping" role="button" aria-expanded="false" aria-controls="collapseShipping"><?php echo get_field("shipping_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseShipping">
              <p><?php echo get_field("shipping_contenido"); ?></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Caracteristicas -->
    <div class="product-features-section">
      <div class="grid">
        <div class="col-start-4 col-width-6 tablet-land-col-start-3 tablet-land-col-width-8 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
          <h2 class="product-features-section__title">caracteristicas del calcetin</h2>
          <div class="product-feature-bar">
          <?php 
            if(get_field("caracteristicas")){
            foreach (get_field("caracteristicas") as $item) {?>
           <div class="product-feature-bar__text-wrap">
                    <h3 class="product-feature-bar__text1 mt-5"><?php echo  $item["nombre_caracteristica"]; ?></h3>
                    <h4 class="product-feature-bar__text2 mt-5"><?php echo  $item["descripcion_caracteristica"]; ?></h4>
           </div>

           <div class="product-feature-bar__progress-wrap">
                <span class="product-feature-bar__progress-line"></span>
                <div class="product-feature-bar__progress-bar animated-width on-scroll" data-width="<?php echo $item["porciento"]; ?>%" style="width: 100%;"></div>
           </div>

          <?php }} ?>
                

          </div>
        </div>
      </div>
    </div>