<section class="blog-gallery-section">
    <div class="blog-gallery-section__grid">
	      <a class="blog-gallery-section__item" href="<?php the_permalink(); ?>">
	      <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'blog-gallery-section__img' ) );
		  } ?>
          <div class="blog-gallery-section__caption"><?php the_title(); ?></div>
	      </a>

		  <a class="blog-gallery-section__item" href="<?php the_permalink(); ?>">
	      <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'blog-gallery-section__img' ) );
		  } ?>
          <div class="blog-gallery-section__caption"><?php the_title(); ?></div>
	      </a>

		  <a class="blog-gallery-section__item" href="<?php the_permalink(); ?>">
	      <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'blog-gallery-section__img' ) );
		  } ?>
          <div class="blog-gallery-section__caption"><?php the_title(); ?></div>
	      </a>

		  <a class="blog-gallery-section__item" href="<?php the_permalink(); ?>">
	      <?php if( has_post_thumbnail() ) {
			  the_post_thumbnail( 'post-thumbnails', array('class' => 'blog-gallery-section__img' ) );
		  } ?>
          <div class="blog-gallery-section__caption"><?php the_title(); ?></div>
	      </a>
    </div>
</section>