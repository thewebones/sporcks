<?php
/**
 * Created by PhpStorm.
 * User: kmilo
 * Date: 6/8/2021
 * Time: 11:57 AM
 */
?>

<div class="brand-features-section__row">
<?php if(get_field("select") == "izquierda") { ?>
<img class="brand-features-section__img" src="<?php echo get_field("image")?>">
          <div class="brand-features-section__content">
            <h2 class="brand-features-section__title"><?php echo get_field("titulo")?></h2>
            <p class="brand-features-section__text">&quot;<?php echo get_field("subtitulo")?>&quot;</p>
            <p class="brand-features-section__text">&quot;<?php echo get_field("parrafo")?>&quot;</p>
          </div>
<?php } else {?>      

  <div class="brand-features-section__content">
            <h2 class="brand-features-section__title"><?php echo get_field("titulo")?></h2>
            <p class="brand-features-section__text">&quot;<?php echo get_field("subtitulo")?>&quot;</p>
            <p class="brand-features-section__text">&quot;<?php echo get_field("parrafo")?>&quot;</p>
  </div>
  <img class="brand-features-section__img" src="<?php echo get_field("image")?>">
<?php } ?> 
</div>

