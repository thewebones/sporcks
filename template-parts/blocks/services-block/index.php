<!-- <?php 
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

<?php } ?> -->
<section class="services-section">
      <div class="grid">
        <div class="col-start-1 col-width-3 tablet-col-start-1 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <div class="service-card"><img class="service-card__img" src="img/service-img1.svg">
            <div class="service-card__delimiter"></div>
            <h5 class="service-card__title">free return</h5>
            <p class="service-card__desc">Todos los pedidos pueden devolverse durante 60 días.</p>
          </div>
        </div>
        <div class="col-start-4 col-width-3 tablet-col-start-7 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <div class="service-card"><img class="service-card__img" src="img/service-img2.svg">
            <div class="service-card__delimiter"></div>
            <h5 class="service-card__title">made in spain</h5>
            <p class="service-card__desc">Nuestro producto esta fabricado 100%  en España con las mejores calidades.</p>
          </div>
        </div>
        <div class="col-start-7 col-width-3 tablet-col-start-1 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <div class="service-card"><img class="service-card__img" src="img/service-img3.svg">
            <div class="service-card__delimiter"></div>
            <h5 class="service-card__title">divide tu pago</h5>
            <p class="service-card__desc">Los pagos a plazos te permiten repartir los costes a lo largo del tiempo para que puedas comprar todo lo que quieras sin que tu bolsillo</p>
          </div>
        </div>
        <div class="col-start-10 col-width-3 tablet-col-start-7 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <div class="service-card"><img class="service-card__img" src="img/service-img4.svg">
            <div class="service-card__delimiter"></div>
            <h5 class="service-card__title">garantia</h5>
            <p class="service-card__desc">En Sporcks queremos garantizar tu satisfacción. Por ello tenemos una solución para todos tus problemas a lo largo de la vida útil de nuestro producto.</p>
          </div> 
       
      </div>
    </section>