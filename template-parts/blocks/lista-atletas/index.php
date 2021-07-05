


<?php
$args = array(
    'post_type'=> 'atletas_post',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
?>
    <section class="athletes-section">
    
    <div class="athletes-section__grid">
    
<?php if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
        $the_query->the_post();?>
    <div class="athlete-card">
        <a class="athlete-card__img-wrap" href="<?php the_permalink(); ?> ">
            <?php $id_perfil=get_post_meta( get_the_ID(), 'perfil', true ); ?>
            <img class="athlete-card__img" src="<?php echo  wp_get_attachment_image_src($id_perfil,'full')[0] ; ?>">
            <?php $id_imagen_hover=get_post_meta( get_the_ID(), 'imagen_hover', true ); ?>
            <img class="athlete-card__img athlete-card__img--hidden" src="<?php echo   wp_get_attachment_image_src($id_imagen_hover,'full')[0] ; ?>">
        </a>
        <div class="athlete-card__content">
            <p class="athlete-card__name"><?php echo get_post_meta( get_the_ID(), 'nombre', true );?> </p>
            <p class="athlete-card__rank"><?php echo get_post_meta( get_the_ID(), 'deporte', true );?> </p>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
else:
endif;
?>
</div>
</section>