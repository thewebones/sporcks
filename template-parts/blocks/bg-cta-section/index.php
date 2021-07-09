<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 7/06/21
 * Time: 23:58
 */
?>

<?php if(get_field("altura_completa") == 1 ) {?>
<section class="bg-cta-section bg-cta-section--full-height" >
    <?php } else {?>
    <section class="bg-cta-section bg-cta-section--full-height" style="height: 70vh" >
    <?php } ?>
      <div class="bg-cta-section__image" style="background-image:url(<?php echo get_field("image")["url"]?>)"></div>
      <div class="bg-cta-section__backdrop"></div>
      <h1 class="bg-cta-section__title"><?php echo get_field("title")?></h1>
      <a class="bg-cta-section__button button button--primary" href="<?php echo get_field("cta")["url"]?>"><?php echo get_field("cta")["title"]?></a>
      <h3 class="bg-cta-section__title"><?php echo get_field("parrafo")?></h3>
    </section>
