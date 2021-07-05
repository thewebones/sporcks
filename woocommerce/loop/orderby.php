
<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

?>

<div class="running__wrapper">
    <div class="grid">
          <div class="col-start-1 col-width-12">
                <h1 class="running__title">running</h1>
                <p class="running__desc"></p>
          </div>
    </div>
    <div class="prueba">
       
        </div>
    <div class="grid">
        <div class="col-start-1 col-width-12">
            <div class="running__filters-wrap">
              <button class="running__filters-close filter-toggle">X</button>
              <button class="running__filters-toggle filter-toggle"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/settings-icon.svg">Filtros</button>
              <form class="running__filters woocommerce-ordering" style="float:none !important" method="get">
              <?php dynamic_sidebar('tienda-filtros') ?>  
              </div>
            </form>
          </div>
</div>    

        