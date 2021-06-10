

<?php

$args = array(
    'post_type'=> 'atletas_post',
    'order'    => 'ASC'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        $id_perfil=get_post_meta( get_the_ID(), 'perfil', true );
        echo  '<h1>'.   wp_get_attachment_image_src($id_perfil)[0].'</h1>';
    endwhile;
    wp_reset_postdata();
else:
endif;

?>