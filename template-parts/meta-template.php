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
  <div class="carousel-inner">
    <?php 
       $active="active";
       $count=0;
       if(get_field("galeria")){
       foreach (get_field("galeria") as $item) {?>  
        <div class="carousel-item <?php if($count == 0) {
        echo $active; 
        }?>">
            <img class="d-block w-100" src="<?php echo $item["imagen_galeria"] ?>" alt="slide" style="width: 100% !important">
        </div>
        <?php $count ++; ?>
    <?php }} ?>  
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