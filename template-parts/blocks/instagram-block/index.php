<section class="gallery-section">
      <div class="gallery-section__wrap animated-grid">
       <?php foreach (get_field("instagram") as $item) {?>
       <div>
        <a class="gallery-section__item" href="<?php echo $item["link_img_instagram"]?>">
        <img class="gallery-section__img" src="<?php echo $item["instagram_img"] ?>">
        <span class="gallery-section__mention"><?php echo $item["text_img_instagram"] ?></span>
      </a>
      </div>

      <?php } ?>
      </div> 
    </section>
    