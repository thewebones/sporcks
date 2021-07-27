<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
$args = array(
    ' delimiter ' => ' / '
);
woocommerce_breadcrumb( $args );

do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <?php
    /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action( 'woocommerce_before_single_product_summary' );
    ?>

    <div class="summary entry-summary col-start-9 col-width-4 tablet-col-start-8 tablet-col-width-5 mobile-land-col-start-1 mobile-land-col-width-12">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
        do_action( 'woocommerce_single_product_summary' );
        ?>
        <div class="product-info__collapse mt-5">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseFeatures" role="button" aria-expanded="false" aria-controls="collapseFeatures"><?php echo get_field("features_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseFeatures">
                <p><?php echo get_field("features_contenido"); ?></p>

            </div>
        </div>
        <div class="product-info__collapse">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseSizing" role="button" aria-expanded="false" aria-controls="collapseSizing"><?php echo get_field("sizing_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseSizing">
                <p><?php echo get_field("sizing_contenido"); ?></p>
            </div>
        </div>
        <div class="product-info__collapse">
            <button class="product-info__collapse-toggler" data-toggle="collapse" href="#collapseShipping" role="button" aria-expanded="false" aria-controls="collapseShipping"><?php echo get_field("shipping_titulo"); ?></button>
            <div class="collapse product-info__collapse-content" id="collapseShipping">
                <p><?php echo get_field("shipping_contenido"); ?></p>

            </div>
        </div>
    </div>
</div>
</div>
</div>


</div>

<!-- Caracteristicas -->
<div class="product-features-section">
    <div class="grid">
        <div class="col-start-4 col-width-6 tablet-land-col-start-3 tablet-land-col-width-8 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
            <h2 class="product-features-section__title">caracteristicas del calcetin</h2>
            <div class="product-feature-bar">
                <?php
                if(get_field("caracteristicas")){
                    foreach (get_field("caracteristicas") as $item) {?>
                        <div class="product-feature-bar__text-wrap">
                            <h3 class="product-feature-bar__text1 mt-5"><?php echo  $item["nombre_caracteristica"]; ?></h3>
                            <h4 class="product-feature-bar__text2 mt-5"><?php echo  $item["descripcion_caracteristica"]; ?></h4>
                        </div>

                        <div class="product-feature-bar__progress-wrap">
                            <span class="product-feature-bar__progress-line"></span>
                            <div class="product-feature-bar__progress-bar animated-width on-scroll" data-width="<?php echo $item["porciento"]; ?>%" style="width: 100%;"></div>
                        </div>

                    <?php }} ?>


            </div>
        </div>
    </div>
</div>
<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );


?>
<?php
$arrayColStart=[1,4,7,10];
$arraytablet=[1,7,1,7];
?>

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