<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 16/06/21
 * Time: 14:19
 */
?>
 <div style="height:132px"></div> 
<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->




<div class="entry-content">
    <ul class="products">
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
              <button class="running__filters-toggle filter-toggle"><img src="img/settings-icon.svg">Filtros</button>
              <div class="running__filters">
                <div class="select">
                  <label class="select__label" id="1">Tallas disponibles</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">Categoria</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Todas</option>
                  </select>
                </div>
                <div class="select">
                  <label class="select__label" id="1">ordenar por</label>
                  <select class="select__control">
                    <option class="select__option" value="0">Recomendado</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>    
<!--  $args = array(
	'numberposts'	=> 20,
	'category'		=> 4
);
$my_posts = get_posts( $args );

if( ! empty( $my_posts ) ){
	$output = '<ul>';
	foreach ( $my_posts as $p ){
		$output .= '<li><a href="' . get_permalink( $p->ID ) . '">' 
		. $p->post_title . '</a></li>';
	}
	$output .= '<ul>';
} -->
 
        <div class="collection-card">
        <?php
        $cont=0;
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                 $product = wc_get_product( get_the_ID() );
               
                $cat_id=$product->get_category_ids()[0];
                $name = get_term_by( 'id', $cat_id, 'product_cat' )->name;
            
                $attribute_taxonomies = wc_get_attribute_taxonomies();
                $lista_talla=get_terms( wc_attribute_taxonomy_name(array_values($attribute_taxonomies)[0]->attribute_name));
                ?>
               <div class="sox-card">
                  <div class="sox-card__wrapper sox-card__wrapper--visble"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" style="height:100%;" src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>"></a>
                    <p class="sox-card__desc"><?php echo $product->get_name() ?></p>
                    <p class="sox-card__desc"><?php echo $name?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?></h5>
                  </div>
                  <div class="sox-card__wrapper sox-card__wrapper--hidden"><a class="sox-card__image-wrap" href="ficha-producto.html"><img class="sox-card__image" style="height:100%;" src="<?php echo get_field("imagen_hover") ?>"></a>
                    <p class="sox-card__desc"><?php echo $product->get_name()?></p>
                    <p class="sox-card__desc"><?php echo $name?></p>
                    <h5 class="sox-card__price"><?php echo $product->get_price() ?></h5>
                    <div class="sox-card__shop-tools">
                      <div class="sox-card__sizes">
                        
                        <?php foreach($lista_talla as $talla){ ?>
                        <div class="sox-card__size-item">
                          <input class="sox-card__size-radio" type="radio" id="sizeRadio-<?php echo $cont ?>" name="radioGroup0" checked="checked">
                          <label class="sox-card__size-label" for="sizeRadio-<?php echo $cont ?>"><span><?php echo $talla->name ?></span><span class="sox-card__size-info"><?php echo $talla->description ?></span></label>
                        </div>
                        <?php  
                        $cont++;
                        }
                        ?>
                        </div> 
                      </div>
                      <button class="sox-card__cart-btn" type="button">AÑADIR</button>
                    </div>
                  </div>
               
              
           

        <?php 
        
            endwhile;
        } else {
            echo __( 'No products found' );
            get_template_part( 'template-parts/content');
        }
        wp_reset_postdata();
        ?>
    </div>     
    </div>
    </ul>
    </div>   
</div>
<?php //the_content(); ?>




