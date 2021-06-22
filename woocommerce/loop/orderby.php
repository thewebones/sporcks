
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
$argsTalla=array(
    'talla'=>'pa_talla'
    );
    
$tallas=get_terms($argsTalla);
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$argsCategoria = array(
    'taxonomy' => 'product_cat',
    'orderby' => 'name',
    'order'   => 'ASC'
  );
  
  $cats = get_categories($argsCategoria);
?>

<div class="running__wrapper">
    <div class="grid">
          <div class="col-start-1 col-width-12">
                <h1 class="running__title">running</h1>
                <p class="running__desc"></p>
          </div>
    </div>
    <div class="grid">
        <div class="col-start-1 col-width-12">
            <div class="running__filters-wrap">
              <button class="running__filters-close filter-toggle">X</button>
              <button class="running__filters-toggle filter-toggle"><img src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/settings-icon.svg">Filtros</button>
              <form class="running__filters woocommerce-ordering" style="float:none !important" method="get">
                <div class="select">
                  <label class="select__label" id="1">Tallas disponibles</label>
                  <select class="select__control" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/chevron-down-icon.png) no-repeat 95%;background-size: 3.5rem 3rem;">
                  <option class="select__option" value="0">Todas</option>      
                  <?php foreach($tallas as $index=>$talla) {?>
                            <option class="select__option" value="<?php echo $index+1 ?>"><?php echo $talla->name ?></option>
                            <?php } ?>
                        
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">Categoria</label>
                  <select class="select__control" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/chevron-down-icon.png) no-repeat 95%;background-size: 3.5rem 3rem;">
                  <option class="select__option" value="0">Todas</option>   
                  <?php foreach($cats as $index=>$cat) {?>
                      <option class="select__option" value="<?php echo $index+1 ?>"><?php echo $cat->name ?></option>
                      <?php } ?>
                      
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1"><?php esc_attr_e( 'Shop order', 'woocommerce' ); ?></label>
                  <select name="orderby" class="orderby select__control" style="width:fit-content;background: url(<?php echo get_site_url(); ?>/wp-content/themes/sporcks/img/chevron-down-icon.png) no-repeat 95%;background-size: 3.5rem 3rem;">
                    <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			            <option class="select__option" value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		            <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>    

        