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


            </div>
        </div>
    </div>
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