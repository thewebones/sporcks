<?php
/**
 * Created by PhpStorm.
 * User: PAPO
 * Date: 6/15/2021
 * Time: 3:29 PM
 */
?>

<div class="metainvisible text-center" style="padding:100px 0px 100px 0px; background: black; color: white; width: 100%;">
    <h1 class="hero-content-section__title mb-5" style="color: white; text-transform: uppercase; margin-top: inherit;"><?php echo get_field("titulo_meta")?></h1>
    <p class="metainvisiblecont" style="font-family: GTAmericaExpandedRegular; margin-left: auto; margin-right: auto; text-align: center ; width: 560px; line-height: 15px; color:white !important; font-size: 15px;"> <?php echo get_field("texto_meta")?> </p>
    </div>
<div style= "background: black;">
<div style="background: white; height: 1px; width: 92%; margin: auto;" ></div>
</div>

<div class="convictorymeta" style=" background: black; color: white !important;">
    <section class="textconvict main row  align-items-center" style="width:60% ; margin-left: auto; margin-right:auto;">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-2 order-md-1 text-center" style="text-align: left">
            <h1 class="hero-content-section__title mb-5" style="color: white; text-transform: uppercase; text-align: left; margin-top: inherit;"><?php echo get_field("convictory_meta")?></h1>
            <h2 style="font-size: 22px; width: 185px; font-weight:900; text-align:left; margin-bottom: 50px; text-transform: uppercase; "><?php echo get_field("edicion_especial")?></h2>
            <p class= "mb-5" style="font-family: GTAmericaExpandedRegular; font-size: 15px; color:white !important; text-align: left; line-height: 15px;"><?php echo get_field("edicion_texto")?></p>
            <p style="font-family: GTAmericaExpandedRegular; margin-bottom: 50px; font-size: 15px; color:white !important; text-align: left; line-height: 15px;"><?php echo get_field("edicion_texto2")?></p>
            <div style="text-align: left; margin-bottom: 20px">
            <a class="convictory" style="text-align: left; " href="<?php echo get_field("boton_comprar")["link"]?>"><?php echo get_field("boton_comprar")["title"]?></a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-2 text-center">
            <img class="img-fluid" style="width: 550px; aspect-ratio: auto 853 / 1280; margin-top:70px; margin-bottom:80px;" src="<?php echo get_field("imagen_convictory")?> ">
        </div>
    </section>
</div>
</div>

</div>

<div style= "background: black;">
    <div style="background: white; height: 1px; width: 92%; margin: auto;" ></div>
</div>



