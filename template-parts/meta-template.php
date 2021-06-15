<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/14/2021
 * Time: 10:44 AM
 */
?>
<div style="background: black">

<div class="metainvisible text-center" style=" padding:100px 0px 100px 0px; background: black; color: white; width: 100%;">
    <h2 style="font-size: 28px; font-weight:800; text-transform: lowercase;"><?php echo get_post_meta( get_the_ID(), 'meta_de', true );?><h2>
    <h1 class="hero-content-section__title mb-5" style="color: white; text-transform: uppercase; margin-top: inherit;"><?php echo get_post_meta( get_the_ID(), 'nombre_atleta', true );?></h1>
    <div class="text-center" style="width:70% ; margin-left: auto; margin-right: auto; ">
        <p class="text-center" style="font-family: GTAmericaExpandedRegula;line-height: 15px; font-size: 15px;"> <?php echo get_post_meta( get_the_ID(), 'frase_principal', true );?> </p>
    </div>
</div>
<div style="background: white;height: 1px;width: 92%;margin: auto;" >

 </div>
</div>
<div class="reflexionmeta" style=" background: black; color: white;">
    <section class="main row  align-items-center" style="width:80% ; margin-left: auto; margin-right:auto;">
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-2 order-md-1 text-center">
        <h2 style="font-size: 22px; font-weight:900; text-align:left; margin-bottom: 50px; text-transform: uppercase; "><?php echo get_post_meta( get_the_ID(), 'reflexion', true );?></h2>
        <p style="font-family: GTAmericaExpandedRegular; font-size: 16px; text-align: left; line-height: 15px;"><?php echo get_post_meta( get_the_ID(), 'texto_reflexion', true );?></p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-2 text-center">
         <?php $id_imagen_simple=get_post_meta( get_the_ID(), 'imagen_simple', true );?>
         <img class="imagenmeta" style="width: 366px; aspect-ratio: auto 366 / 513; margin-top:70px; margin-bottom:80px;" src="<?php echo wp_get_attachment_image_src($id_imagen_simple,'full')[0] ; ?> ">
     </div>
    </section>
</div>
</div>
