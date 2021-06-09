<?php 
$arrayColStart=[1,4,7,10];
$arraytablet=[1,7,1,7];
?>


<section class="services-section">
      <div class="grid">
      <?php  foreach (get_field("benefices") as $key=> $item) {?>
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