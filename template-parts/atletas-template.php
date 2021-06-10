<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 10/06/21
 * Time: 13:37
 */
$id_perfil=get_post_meta( get_the_ID(), 'perfil', true );
echo  '<h1>'.   wp_get_attachment_image_src($id_perfil)[0].'</h1>';
?>
<h1>atletas</h1>
