<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty_Theme
 */

?>

	<footer class="footer">
      	<div class="grid">
		<?php if(get_field('repeater_menus_footer','option')) {?>
      
	  	<?php 
        $arrayColWidth=[3,2,2];
        $arrayColStart=[2,5,7];
        $arrayTableColStart=[1,7,1];
        $arrayTableLandColStart=[1,4];

        foreach(get_field('repeater_menus_footer','option') as $key=>$menus) {?>

		  <div class="col-start-<?php echo $arrayColStart[$key] ?> 
          
          col-width-<?php echo $arrayColWidth[$key] ?> 
          <?php if($arrayTableLandColStart[$key]){?>
          tablet-land-col-width-3
          tablet-land-col-start-<?php } echo $arrayTableLandColStart[$key] ?> 
          tablet-col-start-<?php echo $arrayTableColStart[$key] ?> tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
          <dl class="footer__list">
            <dd>
				      <h4 class="footer__title"><?php echo $menus['titulo_menu_'] ?></h4>
            </dd>
			<?php if($menus["repeater_items_menu_"]) {?>
				<?php foreach ($menus["repeater_items_menu_"] as $itemsMenu) {?>
				<?php if($itemsMenu["link_texto_item_menu"]) {?>
					<dd class="footer__list-item"><a href="<?php echo $itemsMenu["link_texto_item_menu"]["url"] ?>"><?php echo $itemsMenu['texto_informacion_item_menu'] ?></a></a></dd>
				<?php } else{?>
					<dd class="footer__list-item"><span><?php echo $itemsMenu['texto_informacion_item_menu'] ?></span></dd>
			<?php } ?>
			<?php } ?>
			<?php } ?>	

		  </dl>
        </div>
		
		<?php } ?>
		<?php } ?>
        <div class="footer__newsletter-column col-start-9 col-width-3 tablet-land-col-start-9 tablet-land-col-width-4 tablet-col-start-7 tablet-col-width-6 mobile-mini-col-start-1 mobile-mini-col-width-12">
        
        <h4 class="footer__title"><?php echo get_field("title_socials","option") ?>  </h4>
          <div class="footer__socials">
                <ul class="socials">

                <?php
                if(get_field("title_socials","option")){
                  foreach(get_field('repeater_menu_socials','option') as $itemS ) {?> 
                  <li><a class="socials__item" href="<?php echo $itemS["url_social"]["url"] ?>" target="_blank" rel="noreferrer noopener"><img class="socials__icon" src="<?php echo $itemS["social_icono"] ?>"></a></li>
                <?php }} ?> 
                </ul>
          </div>
        </div>
      </div>
    </footer> 
    
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/popper.min.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/jquery.min.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/swiper-bundle.min.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/vendors/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/sporcks/assets/js/add_ajax.js"></script>
       <?php wp_footer();?>
</body>

    
    
    
   
</html>
