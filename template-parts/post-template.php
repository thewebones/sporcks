<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 10/06/21
 * Time: 13:36
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				empty_theme_posted_on();
				empty_theme_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header>

    
    <article>
      <div class="grid">
        <div class="col-start-2 col-width-10 tablet-col-start-1 tablet-col-width-12">
            <section class="image-section" style="margin-top:100px; object-position: center !important;">
          <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'image-section' ) );
		  } ?>
          </section>
        </div>
		</div>
        <div class="col-width-12 tablet-land-col-start-3 tablet-land-col-width-8 tablet-col-start-2 tablet-col-width-10 mobile-col-start-1 mobile-col-width-12">
          <div class="blog-post-content">
          <b class="blog-post-content__title"><?php the_title(); ?></b>
            <p class="blog-post-content__text text-center"><?php the_content(); ?></p>
          </div>
        </div>
    </article>

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
        </div>
    </section>