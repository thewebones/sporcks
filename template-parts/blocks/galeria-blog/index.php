<?php if(get_field("ancho_completo") == 1 ) {?>

<div class="row">
    <?php 
       foreach (get_field("galeria") as $item) {
            if($item["ancho"] == "1") { ?>
        <div class="col-12 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>

            <?php } 
            else if($item["ancho"] == "2/3") { ?>
        <div class="col-8 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>

        <?php } 
            else if($item["ancho"] == "1/2") { ?>
        <div class="col-6 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>

        <?php } else if($item["ancho"] == "1/3") { ?>
        <div class="col-4 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>
        <?php } ?>
        
    <?php } ?>   
 </div>

 <?php } else {?>

    <div class="flex">
    <?php 
       foreach (get_field("galeria") as $item) {
            if($item["ancho"] == "1") { ?>
        <div class="col-lg-10 col-md-10 col-sm-12 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>

            <?php } 
            else if($item["ancho"] == "2/3") { ?>
        <div class="col-lg-7 col-md-7 col-sm-12 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>

        <?php } 
            else if($item["ancho"] == "1/2") { ?>
        <div class="col-lg-5 col-md-5 col-sm-12 mb-5">
            <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important;">
        </div>

        <?php } else if($item["ancho"] == "1/3") { ?>
        <div class="col-lg-3 col-md-3 col-sm-12 mb-5">
        <img src="<?php echo $item["imagen"] ?>" style="height:100% !important; width:100% !important">
        </div>
        <?php } ?>
        
    <?php } ?>   
    </div>
 <?php } ?>