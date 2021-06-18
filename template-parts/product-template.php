<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 18/06/21
 * Time: 12:25
 */
$product = wc_get_product( get_the_ID() );
?>
<h1>gdsjkfhsdfyhsjdgsdg</h1>

<h1>gdsjkfhsdfyhsjdgsdg</h1>
<h1>gdsjkfhsdfyhsjdgsdg</h1>
<h1>gdsjkfhsdfyhsjdgsdg</h1>
<h1><?php echo get_the_ID() ?></h1>
<h1><?php echo $product->get_price() ?></h1>

<?php
//// Get Product ID
//
//echo $product->get_id();
//
//// Get Product General Info
//
//echo $product->get_type();
//echo $product->get_name();
//echo $product->get_slug();
//echo $product->get_date_created();
//echo $product->get_date_modified();
//echo $product->get_status();
//echo $product->get_featured();
//echo $product->get_catalog_visibility();
//echo $product->get_description();
//echo $product->get_short_description();
//echo $product->get_sku();
//echo $product->get_menu_order();
//echo $product->get_virtual();
//get_permalink( echo $product->get_id() );
//
//// Get Product Prices
//
//echo $product->get_price();
//echo $product->get_regular_price();
//echo $product->get_sale_price();
//echo $product->get_date_on_sale_from();
//echo $product->get_date_on_sale_to();
//echo $product->get_total_sales();
//
//// Get Product Tax, Shipping & Stock
//
//echo $product->get_tax_status();
//echo $product->get_tax_class();
//echo $product->get_manage_stock();
//echo $product->get_stock_quantity();
//echo $product->get_stock_status();
//echo $product->get_backorders();
//echo $product->get_sold_individually();
//echo $product->get_purchase_note();
//echo $product->get_shipping_class_id();
//
//// Get Product Dimensions
//
//echo $product->get_weight();
//echo $product->get_length();
//echo $product->get_width();
//echo $product->get_height();
//echo $product->get_dimensions();
//
//// Get Linked Products
//
//echo $product->get_upsell_ids();
//echo $product->get_cross_sell_ids();
//echo $product->get_parent_id();
//
//// Get Product Variations and Attributes
//
//echo $product->get_children(); // get variations
//echo json_encode($product->get_attributes(""));
//echo $product->get_default_attributes();
echo $product->get_attribute( 'talla' ); //get specific attribute value
//
//// Get Product Taxonomies
//
echo $product->get_categories();
//echo $product->get_category_ids();
//echo $product->get_tag_ids();
//
//// Get Product Downloads
//
//echo $product->get_downloads();
//echo $product->get_download_expiry();
//echo $product->get_downloadable();
//echo $product->get_download_limit();
//
//// Get Product Images
//
//echo $product->get_image_id();
echo $product->get_image();
//echo $product->get_gallery_image_ids();
//
//// Get Product Reviews
//
//echo $product->get_reviews_allowed();
//echo $product->get_rating_counts();
//echo $product->get_average_rating();
//echo $product->get_review_count();
//?>