<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

</div>
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

