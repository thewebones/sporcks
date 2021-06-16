<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 16/06/21
 * Time: 14:19
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




<div class="entry-content">
    <ul class="products">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();

                 $id_portada=get_post_meta( get_the_ID(), '_thumbnail_id', true );?>


                <img class="image-section__image" src=" <?php echo wp_get_attachment_image_src($id_portada,'full')[0] ; ?> ">

        <?php
                $term_list = wp_get_post_terms(get_the_ID(),'product_cat',array('fields'=>'ids'));
                $cat_id = (int)$term_list[0];
                $term = get_term_by( 'id', $cat_id, 'product_cat' );

                echo $term->name;

            endwhile;
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
        ?>
    </ul><!–/.products–>
</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->