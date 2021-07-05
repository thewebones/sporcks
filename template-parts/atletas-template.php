<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 10/06/21
 * Time: 13:37
 */

?>
<div style="height:103px;"></div>
<div class="breadcrumb-simple">
    <a class="breadcrumb-simple__item" href="<?php echo get_field("back_atletas", "option")["url"]; ?>">
        <?php echo get_field("back_atletas","option")["title"]; ?> </a>
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
                <h2 class="athlete-details-section__heading"><?php echo get_post_meta( get_the_ID(), 'atleta_socks', true );?> </h2>


            </div>
        </div>
    </div>
</div>
<style>
    @media(min-width: 1200px) {
     .collection-card{
     max-width: 1438px !important;
     margin-left: auto !important;
     margin-right: auto !important;
     }
}
</style>
<div class="collection-card" style="margin-bottom: 65px">
    <?php
    $cont=1;
    $producto_cont=get_post_meta( get_the_ID(), "producto_altetas", true );

    for( $i = 0; $i < $producto_cont; $i++ ) {
        $item = get_post_meta( get_the_ID(), 'producto_altetas_' . $i . '_producto', true );

            $start="col-start-".$cont;
            $product=wc_get_product($item);
            if($product !=null){
                $id_product=$item;
                $cat_id=$product->get_category_ids()[0];
                $name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
                ?>
                <div class="sox-card">
                    <div class="sox-card__wrapper sox-card__wrapper--visble">
                        <a class="sox-card__image-wrap" href="ficha-producto.html">
                            <img class="sox-card__image" src=" <?php echo $product->get_image() ?></a>
                            <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
                            <p class="sox-card__desc"><?php echo $name ?></p>
                            <h5 class="sox-card__price"><?php echo $product->get_price() ?>$</h5>
                    </div>
                    <div class="sox-card__wrapper sox-card__wrapper--hidden">
                        <?php $id_imagen_hover=get_post_meta( $id_product, 'imagen_hover', true );?>
                        <a class="sox-card__image-wrap" href="ficha-producto.html">
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
    <?php } $cont+=3; } ?>
</div>



<?php the_content(); ?>
<?php
$arrayColStart=[1,4,7,10];
$arraytablet=[1,7,1,7];
?>


<section class="services-section">
    <div class="grid">
        <?php if(get_field("benefices",'option')) { foreach (get_field("benefices",'option') as $key=> $item) {?>
            <div class="col-start-<?php echo $arrayColStart[$key] ?> col-width-3 tablet-col-start-<?php echo $arraytablet[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                <div class="service-card"><img class="service-card__img" src=<?php echo $item["icon_benefices"] ?>>
                    <div class="service-card__delimiter"></div>
                    <h5 class="service-card__title"><?php echo $item["title_benefices"] ?></h5>
                    <p class="service-card__desc"><?php echo $item["description_benefices"] ?></p>
                </div>
            </div>

        <?php }} ?>

    </div>
</section>