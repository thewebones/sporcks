<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/14/2021
 * Time: 10:44 AM
 */
?>
<div style="background: black">

<div class="metainvisible text-center" style=" padding:170px 0px 100px 0px; background: black; color: white; width: 100%;">
    <h2 style="font-size: 28px; font-weight:800; text-transform: lowercase;"><?php echo get_post_meta( get_the_ID(), 'meta_de', true );?><h2>
    <h1 class="hero-content-section__title mb-5" style="color: white; text-transform: uppercase; margin-top: inherit; font-size: 40px"><?php echo get_post_meta( get_the_ID(), 'nombre_atleta', true );?></h1>
    <div class="parrafometa text-center" style="width:25% ; margin-left: auto; margin-right: auto;">
        <p class="text-center" style="font-family: GTAmericaExpandedRegula;line-height: 15px; font-size: 15px;"> <?php echo get_post_meta( get_the_ID(), 'frase_principal', true );?> </p>
    </div>
</div>
<div style="background: white;height: 1px;width: 92%;margin: auto;" >

 </div>
</div>
<div class="reflexionmeta" style=" background: black; color: white; margin-bottom: 100px">
    <section class="contentmeta main row  align-items-center" style="width:50% ; margin-left: auto; margin-right:auto;">
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-2 order-md-1 text-center">
        <h2 style="font-size: 22px; font-weight:900; width: 90%; text-align:left; margin-bottom: 50px; text-transform: uppercase; "><?php echo get_post_meta( get_the_ID(), 'reflexion', true );?></h2>
        <p style="font-family: GTAmericaExpandedRegular; width: 90%; font-size: 16px; text-align: left; line-height: 15px;"><?php echo get_post_meta( get_the_ID(), 'texto_reflexion', true );?></p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-2 text-center">
         <?php $id_imagen_simple=get_post_meta( get_the_ID(), 'imagen_simple', true );?>
         <img class="img-fluid" style="width: 366px; aspect-ratio: auto 366 / 513; margin-top:70px; margin-bottom:80px;" src="<?php echo wp_get_attachment_image_src($id_imagen_simple,'full')[0] ; ?> ">
     </div>
    </section>
</div>
</div>

<!-- slider -->
<div id="carouselControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner <?php echo  get_post_meta( get_the_ID(), "galeria", true );?>">

    <?php
       $active="active";
       $count=0;


           $galeria_cont=get_post_meta( get_the_ID(), "galeria", true );
           for( $i = 0; $i < $galeria_cont; $i++ ) {
               $item = get_post_meta( get_the_ID(), 'galeria_' . $i . '_imagen_galeria', true );
               update_post_meta(get_the_ID(),'imagen-'.$i,wp_get_attachment_image_src($item,'full')[0]);

           ?>
        <div class="carousel-item <?php if($count == 0) {
        echo $active;
        }?>">
            <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide" style="width: 100% !important; height: auto;">
        </div>
        <?php $count ++; ?>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>
  @media only screen and (max-width: 600px)  {
    #carouselControls  img {
        height: 350px !important;
        object-fit: cover !important;
    }
}
</style>

<?php
$arrayColStart=[1,4,7,10];
$arraytablet=[1,7,1,7];
?>
<style>
    @media (min-width: 1200px) {
        .services-section.container,.related.container {
            max-width: 1340px !important;
        }
    }
</style>
<section class="services-section container">
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
    </div>
</section>
 


<!--<!-- Icon modal -->-->
<!--    --><?php //
//          $arrayColStart=[3,5,7,9];
//          $arraytablet=[1,7,1,7];
//          $countid=0;
//    ?>
<!---->
<!---->
<!--          <section class="services-section" style="padding: 30px !important; background: #fff">-->
<!--          <div class="grid">-->
<!--                --><?php //
//                if (get_field("tarjeta", "option")){
//                foreach (get_field("tarjeta", "option") as $key=> $item) {?>
<!--                  <div class="col-start---><?php //echo $arrayColStart[$key] ?><!-- col-width-2 tablet-col-start---><?php //echo $arraytablet[$key] ?><!-- tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">-->
<!--                    <div class="service-card" style="color:#000">-->
<!--                    <img class="service-card__img" src=--><?php //echo $item["tarjeta_imagen"] ?><!-->-->
<!--                      <p class="service-card__title mt-4 text-center" style="margin-bottom: .5em; font-size: 16px; font-weight: 600;text-transform: uppercase; font-family: UniSansRegular !important; text-align: center">--><?php //echo $item["tarjeta_titulo"] ?><!--</p>-->
<!--                      <p class="service-card__desc">--><?php //echo $item["tarjeta_subtitulo"] ?><!--</p>-->
<!--                      <p>--><?php //echo $item["descripcion"] ?><!--</p>-->
<!---->
<!--                      <!-- Button trigger modal -->-->
<!--                      <button type="button" class="btn-icon" data-toggle="modal" data-target="#modal--><?php //echo $countid ?><!--" style="border: 1px solid #191919; display: inline; padding: 3px 10px; background: transparent; color:#000; font-size: 13px">-->
<!--                      + INFO ???-->
<!--                      </button>-->
<!---->
<!--                      <!-- Modal -->-->
<!--                      <div class="modal fade" id="modal--><?php //echo $countid ?><!--" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--                      <div class="modal-dialog" role="document">-->
<!--                          <div class="modal-content">-->
<!--                          <div class="modal-header" style="border-bottom:none !important">-->
<!--                              -->
<!--                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:25px">-->
<!--                              <span aria-hidden="true">&times;</span>-->
<!--                              </button>-->
<!--                          </div>-->
<!--                          <div class="modal-body">-->
<!--                              <img class="service-card__img" src=--><?php //echo $item["tarjeta_imagen"] ?><!-->-->
<!--                              <p class="service-card__title text-center mb-3 mt-3" style="font-size: 16px; font-weight: 600;text-transform: uppercase;">--><?php //echo $item["tarjeta_titulo"] ?><!--</p>-->
<!--                              <p class="text-center" style="font-size: 14px; font-weight: 400; line-height: 1.4em; text-align: center; padding-right:50px; padding-left:50px">--><?php //echo $item["tarjeta_descripcion"] ?><!--</p>-->
<!--                          </div>-->
<!--                          </div>-->
<!--                      </div>-->
<!--                      </div>-->
<!---->
<!--                    </div>-->
<!--                  </div>-->
<!--                  --><?php //$countid++; ?>
<!--                 --><?php //} }?>
<!--                -->
<!--                </div>-->
<!--              </section>-->


