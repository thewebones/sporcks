<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/8/2021
 * Time: 11:57 AM
 */
?>
<section class="proudly-addictive-section">
    <div class="grid">
        <div class="col-start-3 col-width-8 tablet-land-col-start-2 tablet-land-col-width-10"><img class="proudly-addictive-section__bg" src="<?php echo get_field("image")?>"></div>
        <div class="proudly-addictive-section__content col-start-3 col-width-8 mobile-land-col-start-2 mobile-land-col-width-10 mobile-col-start-1 mobile-col-width-12">
            <p class="proudly-addictive-section__text"><?php echo get_field("texto1")?></p>
            <div class="mb-5" style="width: 60%">
            <p class="proudly-addictive-section__text"><?php echo get_field("texto2")?></p>
            </div>
            <a class="proudly-addictive-section__text proudly-addictive-section__link" href="<?php echo get_field("boton")["link"]?>"><?php echo get_field("boton")["title"]?></a>
        </div>
    </div>
</section>








