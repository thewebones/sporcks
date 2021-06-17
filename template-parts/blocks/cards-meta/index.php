<?php $args = array(
    'post_type'=> 'meta_post',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
$contador=0;
?>

<div class="all-cards">

<?php if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
        $the_query->the_post();?>
        <div class="card"> 
            
        <?php $imagenId=get_post_meta(get_the_ID(),'imagen_simple',true);?>
        <div class="scene imageDiv" style="background-image:url(<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>)">
        <!-- <img class="imge" src="<?php echo wp_get_attachment_image_src($imagenId,'medium')[0];?>"/> -->
        <div class="cardPrueba" onMouseOver="mostrar(event)" onMouseOut="ocultar(event)"> 
            <div class="card__face card__face--back"><a class="linkHover" href="<?php the_permalink(); ?>">VIDEO</a></div>
            <div class="card__face card__face--front"></div>
            
        </div>
        
        </div>
        <h4  class="pMeta mt-5"><strong>La meta de</strong></h4>
        <h1 class="auxRotate"><strong><?php echo get_post_meta( get_the_ID(), 'nombre_atleta', true );?></strong></h1>
        <p class="mt-3"><strong>EPISODIO <?php echo $contador ?></strong></p>
        <p class="mt-3" style="font-size:13px"><strong><?php echo get_post_meta( get_the_ID(), 'frase_principal', true );?></strong></p>
        <button class="btn btn-mio my-5"><a class="linkHover" href="<?php the_permalink(); ?>"><strong>VIDEO COMPLETO</strong></a></button>
    </div>
    
<?php
    $contador++;
    endwhile;
    wp_reset_postdata();
else:
endif;
?>
 </div>
