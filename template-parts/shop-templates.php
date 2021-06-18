<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 16/06/21
 * Time: 14:19
 */
?>
 <div style="height:132px"></div> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




<div class="entry-content">
    <ul class="products">
    <div class="running__wrapper">
        <div class="grid">
          <div class="col-start-1 col-width-12">
            <h1 class="running__title">running</h1>
            <p class="running__desc"></p>
          </div>
        </div>
        <div class="grid">
          <div class="col-start-1 col-width-12">
            <div class="running__filters-wrap">
              <button class="running__filters-close filter-toggle">X</button>
              <button class="running__filters-toggle filter-toggle"><img src="img/settings-icon.svg">Filtros</button>
              <div class="running__filters">
                <div class="select">
                  <label class="select__label" id="1">Tallas disponibles</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">Categoria</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">ordenar por</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Recomendado</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="running__grid">

        <section class="sox-collection-section sox-collection-section--no-padding">
            <div class="grid mobile-port-hidden-not-now">
        <?php
        $arrayColStart=[1,4,7,10];
        $arrayTabletLandColStart=[1,7,1,7]; 
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                 $product = wc_get_product( get_the_ID() );
               
                $cat_id=$product->get_category_ids()[0];
                $name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
            
                $attribute_taxonomies = wc_get_attribute_taxonomies();
                $lista_talla=get_terms( wc_attribute_taxonomy_name(array_values($attribute_taxonomies)[0]->attribute_name));
               
             
               
                ?>

            <div class="col-start-1 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
               <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="<?php echo $product->get_image(); ?>"></a>
                    <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
                    <p class="sox-card__desc"><?php echo $name?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?></h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc"><?php echo $product->get_name()?></p>
                    <p class="sox-card__desc"><?php echo $name?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?></h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        
                        <?php foreach($lista_talla as $talla){ ?>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-K3YJYM" name="radioGroup0" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-K3YJYM"><span><?php echo $talla->name ?></span><span class="sox-card__size-info"><?php echo $talla->description ?></span></label>
                        </div>
                        <?php  
                        }
                        ?>
                        <!-- <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-_Q715S" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-1-_Q715S"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-IE_GWY" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-2-IE_GWY"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-YNA3G7" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-3-YNA3G7"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-WYH0ZP" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-4-WYH0ZP"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div> -->
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>     
           

        <?php 
              /*   $term_list = wp_get_post_terms(get_the_ID(),'product_cat',array('fields'=>'ids'));
                $cat_id = (int)$term_list[0];
                $term = get_term_by( 'id', $cat_id, 'product_cat' );

                echo $term->name; */

            endwhile;
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
        ?>
        </div>
    </section> 
    </div>
    </ul><!–/.products–>
    </div>   
</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->


<!--
<div class="col-start-1 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">    
<div class="col-start-4 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
<div class="col-start-7 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
<div class="col-start-10 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">

<div class="running__wrapper">
        <div class="grid">
          <div class="col-start-1 col-width-12">
            <h1 class="running__title">running</h1>
            <p class="running__desc"></p>
          </div>
        </div>
        <div class="grid">
          <div class="col-start-1 col-width-12">
            <div class="running__filters-wrap">
              <button class="running__filters-close filter-toggle">X</button>
              <button class="running__filters-toggle filter-toggle"><img src="img/settings-icon.svg">Filtros</button>
              <div class="running__filters">
                <div class="select">
                  <label class="select__label" id="1">Tallas disponibles</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">Categoria</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">ordenar por</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Recomendado</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="running__grid">
          <section class="sox-collection-section sox-collection-section--no-padding">
            <div class="grid mobile-port-hidden-not-now">
              <div class="col-start-1 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/pair-red-sox.jpg"></a>
                    <p class="sox-card__desc">go dad - calcetin running</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">go dad - calcetin running</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-K3YJYM" name="radioGroup0" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-K3YJYM"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-_Q715S" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-1-_Q715S"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-IE_GWY" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-2-IE_GWY"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-YNA3G7" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-3-YNA3G7"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-WYH0ZP" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-4-WYH0ZP"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-4 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-orange-sox.jpg"></a>
                    <p class="sox-card__desc">team ned - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team ned - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-K6BNA3" name="radioGroup1" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-K6BNA3"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-QRA6LZ" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-1-QRA6LZ"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-5NS335" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-2-5NS335"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-S160FI" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-3-S160FI"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-H36168" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-4-H36168"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-7 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-white-sox.jpg"></a>
                    <p class="sox-card__desc">team ita - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team ita - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-AYN4CD" name="radioGroup2" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-AYN4CD"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-FTMYLT" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-1-FTMYLT"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-ZSET4W" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-2-ZSET4W"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-4O2T_R" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-3-4O2T_R"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-_BWHVJ" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-4-_BWHVJ"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-10 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-blue-sox.jpg"></a>
                    <p class="sox-card__desc">team fra - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team fra - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-NA2FFA" name="radioGroup3" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-NA2FFA"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-2MW9JL" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-1-2MW9JL"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-POIQDW" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-2-POIQDW"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-8X4P99" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-3-8X4P99"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-QDEBJ_" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-4-QDEBJ_"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="sox-collection-section sox-collection-section--no-padding">
            <div class="grid mobile-port-hidden-not-now">
              <div class="col-start-1 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/pair-red-sox.jpg"></a>
                    <p class="sox-card__desc">go dad - calcetin running</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">go dad - calcetin running</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-AOS7TT" name="radioGroup0" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-AOS7TT"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-SW0SU7" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-1-SW0SU7"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-BL55OJ" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-2-BL55OJ"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-0H64CA" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-3-0H64CA"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-M7FDGX" name="radioGroup0">
                          <label class="sox-card__size-label" for="sizeRadio-4-M7FDGX"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-4 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-orange-sox.jpg"></a>
                    <p class="sox-card__desc">team ned - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team ned - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-RZ7OF3" name="radioGroup1" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-RZ7OF3"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-DNT7SQ" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-1-DNT7SQ"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-Y348ZH" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-2-Y348ZH"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-FJPGJ1" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-3-FJPGJ1"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-1EDX_F" name="radioGroup1">
                          <label class="sox-card__size-label" for="sizeRadio-4-1EDX_F"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-7 col-width-3 tablet-land-col-start-1 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-white-sox.jpg"></a>
                    <p class="sox-card__desc">team ita - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team ita - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-PQ3R8O" name="radioGroup2" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-PQ3R8O"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-8TBQ4D" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-1-8TBQ4D"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-5VM_KI" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-2-5VM_KI"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-B01S5N" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-3-B01S5N"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-Y2RPIW" name="radioGroup2">
                          <label class="sox-card__size-label" for="sizeRadio-4-Y2RPIW"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-10 col-width-3 tablet-land-col-start-7 tablet-land-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/single-blue-sox.jpg"></a>
                    <p class="sox-card__desc">team fra - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>
                    <p class="sox-card__desc">team fra - calcetin ciclismo</p>
                    <h5 class="sox-card__price">17.95€</h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-6DFT5_" name="radioGroup3" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-0-6DFT5_"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-7MJ6A7" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-1-7MJ6A7"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-UMIALN" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-2-UMIALN"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-QEZKUQ" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-3-QEZKUQ"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-2AB0G4" name="radioGroup3">
                          <label class="sox-card__size-label" for="sizeRadio-4-2AB0G4"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>
                        </div>
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div> -->