
<section class="blog-gallery-section">
    <div class="blog-gallery-section__grid">
    <?php
$args = array(
    'post_type'=> 'post',
    'order'    => 'ASC'
);
$the_query = new WP_Query( $args );
if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        ?>
	      <a class="blog-gallery-section__item" href="<?php the_permalink(); ?>">
	      <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'blog-gallery-section__img' ) );
		  } ?>
          <div class="blog-gallery-section__caption"><?php the_title(); ?></div>
	      </a>

          <?php
    endwhile;
    wp_reset_postdata();
else:
endif;
?> 
		 
    </div>
</section>
