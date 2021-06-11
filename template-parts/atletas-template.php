<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 10/06/21
 * Time: 13:37
 */
$id_perfil=get_post_meta( get_the_ID(), 'perfil', true );
echo  '<h1>'.   wp_get_attachment_image_src($id_perfil)[0].'</h1>';
?>

<div class="breadcrumb-simple"><a class="breadcrumb-simple__item" href="<?php get_field ("back")["link"] ?>"><?php get_field ("back")["title"] ?> </a>
</div>
<section class="image-section image-section--bigger">
   <?php $id_portada=get_post_meta( get_the_ID(), 'portada', true );?>
    <img class="image-section__image" src=" <?php echo wp_get_attachment_image_src($id_portada,'full')[0] ; ?> ">
</section>
<div class="athlete-details-section">
    <div class="grid">
        <div class="col-start-3 col-width-8 tablet-land-col-start-2 tablet-land-col-width-10 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
            <div class="athlete-details-section__header">
                <div class="athlete-details-section__empty"></div>
                <?php $id_perfil=get_post_meta( get_the_ID(), 'perfil', true );?>
                <div class="athlete-details-section__avatar-wrap"><img class="athlete-details-section__avatar" src=" <?php echo wp_get_attachment_image_src($id_perfil,'full')[0]; ?> "></div>
                <div class="athlete-details-section__details">
                    <div class="athlete-details-section__name-rank-container">
                        <h4 class="athlete-details-section__name"> <?php echo get_post_meta( get_the_ID(), 'nombre', true );?> </h4>
                        <h4 class="athlete-details-section__rank"> <?php echo get_post_meta( get_the_ID(), 'deporte', true );?> </h4> </h4>
                    </div>
                    <div class="athlete-details-section__age-country-container">
                        <div class="athlete-details-section__age-container">
                            <h4 class="athlete-details-section__age"><?php echo get_post_meta( get_the_ID(), 'edad', true );?> </h4></h4>
                            <p><?php echo get_post_meta( get_the_ID(), 'edad_titulo', true );?></p>
                        </div>
                        <?php $id_país=get_post_meta( get_the_ID(), 'país', true );?>
                        <img class="athlete-details-section__country-flag" src=" <?php echo wp_get_attachment_image_src($id_país,'full')[0] ; ?> ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="athlete-details-section__body">
        <div class="grid">
            <div class="col-start-3 col-width-8 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
                <h2 class="athlete-details-section__heading"> <?php echo get_post_meta( get_the_ID(), 'titulo_biografia', true );?> </h2>
                <p class="athlete-details-section__biography"> <?php echo get_post_meta( get_the_ID(), 'biografia', true );?> </p>
                <h2 class="athlete-details-section__heading"><?php echo get_post_meta( get_the_ID(), 'titulo_highlights', true );?> </h2>
                <div class="athlete-details-section__highlights">
                    <?php echo get_post_meta( get_the_ID(), 'career_highlights', true );?> </h2>
                </div>
<!--                <h2 class="athlete-details-section__heading">laura's socks</h2>-->
<!--            </div>-->
<!--        </div><br>-->
<!--        <div class="grid">-->
<!--            <div class="col-start-1 col-width-3 tablet-col-start-1 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">-->
<!--                <div class="sox-card">-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/kick-ass-blue-sox.png"></a>-->
<!--                        <p class="sox-card__desc">kick ass blue - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                    </div>-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>-->
<!--                        <p class="sox-card__desc">kick ass blue - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                        <div class="sox-card__shop-tools">-->
<!--                            <div class="sox-card__sizes">-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-ABTJJE" name="radioGroup0" checked="checked">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-0-ABTJJE"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-EP987P" name="radioGroup0">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-1-EP987P"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-LJ7HNQ" name="radioGroup0">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-2-LJ7HNQ"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-6GR5J_" name="radioGroup0">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-3-6GR5J_"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-3W0PW1" name="radioGroup0">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-4-3W0PW1"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <button class="sox-card__cart-btn" type="button">AÑADIR</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-start-4 col-width-3 tablet-col-start-7 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">-->
<!--                <div class="sox-card">-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/kick-ass-pink-sox.png"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                    </div>-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                        <div class="sox-card__shop-tools">-->
<!--                            <div class="sox-card__sizes">-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-RP1IYB" name="radioGroup1" checked="checked">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-0-RP1IYB"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-WJ78_7" name="radioGroup1">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-1-WJ78_7"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-DMA9LA" name="radioGroup1">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-2-DMA9LA"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-17D66E" name="radioGroup1">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-3-17D66E"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-BIGSWP" name="radioGroup1">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-4-BIGSWP"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <button class="sox-card__cart-btn" type="button">AÑADIR</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-start-7 col-width-3 tablet-col-start-1 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">-->
<!--                <div class="sox-card">-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/kick-ass-pink-sox.png"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                    </div>-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                        <div class="sox-card__shop-tools">-->
<!--                            <div class="sox-card__sizes">-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-8OPSHJ" name="radioGroup2" checked="checked">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-0-8OPSHJ"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-QKVOWB" name="radioGroup2">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-1-QKVOWB"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-NLVMJN" name="radioGroup2">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-2-NLVMJN"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-ODU5TW" name="radioGroup2">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-3-ODU5TW"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-GKPNLT" name="radioGroup2">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-4-GKPNLT"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <button class="sox-card__cart-btn" type="button">AÑADIR</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-start-10 col-width-3 tablet-col-start-7 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">-->
<!--                <div class="sox-card">-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/kick-ass-pink-sox.png"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                    </div>-->
<!--                    <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" src="img/MG_6526.jpg"></a>-->
<!--                        <p class="sox-card__desc">kick ass pink - calcetin,triatlon laura philipp</p>-->
<!--                        <h5 class="sox-card__price">17.95€</h5>-->
<!--                        <div class="sox-card__shop-tools">-->
<!--                            <div class="sox-card__sizes">-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-0-PA820H" name="radioGroup3" checked="checked">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-0-PA820H"><span>xs</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-1-3HKD41" name="radioGroup3">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-1-3HKD41"><span>s</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-2-3P2JJZ" name="radioGroup3">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-2-3P2JJZ"><span>m</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-3-OZOROO" name="radioGroup3">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-3-OZOROO"><span>l</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                                <div class="sox-card__size-item">-->
<!--                                    <input class="sox-card__size-radio" type="radio" id="sizeRadio-4-TWLH8J" name="radioGroup3">-->
<!--                                    <label class="sox-card__size-label" for="sizeRadio-4-TWLH8J"><span>xl</span><span class="sox-card__size-info">(35-37)</span></label>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <button class="sox-card__cart-btn" type="button">AÑADIR</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
                <?php the_content(); ?>
                <?php
                $arrayColStart=[1,4,7,10];
                $arraytablet=[1,7,1,7];
                ?>


                <section class="services-section">
                    <div class="grid">
                        <?php  foreach (get_field("benefices",'option') as $key=> $item) {?>
                            <div class="col-start-<?php echo $arrayColStart[$key] ?> col-width-3 tablet-col-start-<?php echo $arraytablet[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                                <div class="service-card"><img class="service-card__img" src=<?php echo $item["icon_benefices"] ?>>
                                    <div class="service-card__delimiter"></div>
                                    <h5 class="service-card__title"><?php echo $item["title_benefices"] ?></h5>
                                    <p class="service-card__desc"><?php echo $item["description_benefices"] ?></p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </section>
