<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/14/2021
 * Time: 10:44 AM
 */

?>

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
            <img class="d-block w-100" src="<?php echo get_post_meta(get_the_ID(),'imagen-'.$i,true) ?>" alt="slide" style="width: 100% !important; height:650px; background-size: cover ">
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

 


<!-- Icon modal -->
    <?php 
          $arrayColStart=[3,5,7,9];
          $arraytablet=[1,7,1,7];
          $countid=0;
    ?>


          <section class="services-section" style="padding: 3em;">
          <div class="grid">
                <?php  
                if (get_field("tarjeta", "option")){
                foreach (get_field("tarjeta", "option") as $key=> $item) {?>
                  <div class="col-start-<?php echo $arrayColStart[$key] ?> col-width-2 tablet-col-start-<?php echo $arraytablet[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
                    <div class="service-card" style="color:#000">
                    <img class="service-card__img" src=<?php echo $item["tarjeta_imagen"] ?>>
                      <h5 class="service-card__title mt-4" style="margin-bottom: .5em; font-size: 1.6em; font-weight: 600;text-transform: uppercase;"><?php echo $item["tarjeta_titulo"] ?></h5>
                      <p class="service-card__desc"><?php echo $item["tarjeta_subtitulo"] ?></p>
                      <p><?php echo $item["descripcion"] ?></p>

                      <!-- Button trigger modal -->
                      <button type="button" class="btn-icon" data-toggle="modal" data-target="#modal<?php echo $countid ?>" style="border: 1px solid #191919; display: inline; padding: .5em 1em; background: transparent; color:#000">
                      + INFO ‣
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="modal<?php echo $countid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                          <div class="modal-header" style="border-bottom:none !important">
                              
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:25px">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <img class="service-card__img" src=<?php echo $item["tarjeta_imagen"] ?>>
                              <h5 class="service-card__title text-center mb-3 mt-3" style="font-size: 1.6em; font-weight: 600;text-transform: uppercase;"><?php echo $item["tarjeta_titulo"] ?></h5>
                              <p class="text-center" style="font-size: 1.4em; font-weight: 400; line-height: 1.4em; text-align: center; padding-right:50px; padding-left:50px"><?php echo $item["tarjeta_descripcion"] ?></p>
                          </div>
                          </div>
                      </div>
                      </div>

                    </div>
                  </div>
                  <?php $countid++; ?>
                 <?php } }?>
                
                </div>
              </section>







<div id="metainvisible" class="vc_row wpb_row vc_row-fluid container vc_custom_1608687844730">
    <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element  col-xl-7 col-lg-10 centered mb-0">
                    <div class="wpb_wrapper">
                        <h2 class="lowercase-font" style="text-align: center;"><span style="color: #ffffff;">La meta de</span></h2>

                    </div>
                </div>
                <div class="wpb_text_column wpb_content_element  col-xl-7 col-lg-10 centered mb-0">
                    <div class="wpb_wrapper">
                        <h2 class="size-font" style="text-align: center;"><span style="color: #ffffff;">Gómez noya</span></h2>
                        <p>&nbsp;</p>
                        <p style="text-align: center;"><span style="color: #ffffff;">Cómo vive el confinamiento un profesional del Triatlon, qué pasa por su mente al saber que sus principales metas han sido canceladas. Para qué seguir entrenando. Nos adentramos en la realidad de Noya en el año más raro de su carrera.</span></p>

          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Iconos con modal -->
<?php 
$arrayColStart=[3,5,7,9];
$arraytablet=[1,7,1,7];
?>


<section class="services-section" style="padding: 3em;">
<div class="grid">
      <?php  
      if (get_field("tarjeta")){
      foreach (get_field("tarjeta", "option") as $key=> $item) {?>
        <div class="col-start-<?php echo $arrayColStart[$key] ?> col-width-2 tablet-col-start-<?php echo $arraytablet[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <div class="service-card" style="color:#000">
          <img class="service-card__img" src=<?php echo $item["tarjeta_imagen"] ?>>
            <h5 class="service-card__title mt-4" style="margin-bottom: .5em; font-family: UniSansRegular; font-size: 1.6em; font-weight: 600;text-transform: uppercase;"><?php echo $item["tarjeta_titulo"] ?></h5>
            <p class="service-card__desc"><?php echo $item["tarjeta_subtitulo"] ?></p>
            <p><?php echo $item["descripcion"] ?></p>

            <!-- Button trigger modal -->
            <button type="button" class="btn-icon" data-toggle="modal" data-target="#exampleModal" style="border: 1px solid #191919; display: inline; padding: .5em 1em; background: transparent; color:#000">
            + INFO ‣
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header" style="border-bottom:none !important">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:25px">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="service-card__img" src=<?php echo $item["tarjeta_imagen"] ?>>
                    <h5 class="service-card__title text-center mb-5" style="font-family: UniSansRegular; font-size: 1.6em; font-weight: 600;text-transform: uppercase;"><?php echo $item["tarjeta_titulo"] ?></h5>
                    <p class="text-center" style="font-family: UniSansRegular; font-size: 1.4em; font-weight: 400; line-height: 1.4em; text-align: center; padding-right:50px; padding-left:50px"><?php echo $item["tarjeta_descripcion"] ?></p>
                </div>
                </div>
            </div>
            </div>

          </div>
        </div>

<?php } }?>
       
      </div>
    </section>
