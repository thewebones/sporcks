<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/9/2021
 * Time: 10:12 AM
 */
?>
<section class="hero-content-section">
    <div class="grid">
        <div class="hero-content-section__wrap col-start-4 col-width-6 tablet-land-col-start-3 tablet-land-col-width-8 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
            <?php if(get_field("texto")){ ?>
            <h1 class="hero-content-section__title"><?php echo get_field("texto")?></h1>
            <?php }?>
            <?php if(get_field("texto2")){ ?>
            <h2 class="hero-content-section__subtitle"><?php echo get_field("texto2")?></h2>
            <?php }?>
            <?php if(get_field("texto3")){ ?>
            <p class="hero-content-section__description" style="margin-bottom: 75px; text-align: left"><?php echo get_field("texto3")?></p>
            <?php }?>

        </div>
    </div>
</section>
<section class="image-section"><img class="image-section__image" src="<?php echo get_field("image")?>"></section>
