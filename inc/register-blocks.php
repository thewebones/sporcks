<?php
/**
 * Created by PhpStorm.
 * User: pompi
 * Date: 7/06/21
 * Time: 23:58
 */
acf_register_block_type(array(
    'name'              => 'bg-cta-section',
    'title'             => __('Imagen background and CTA'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/bg-cta-section/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'proudly-addictive',
    'title'             => __('proudly_addictive'),
    'description'       => __('bloque rojo'),
    'render_template'   => 'template-parts/blocks/proudly-addictive/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'slider-home',
    'title'             => __('slider'),
    'description'       => __('bg-cta-section'),
    'render_template'   => 'template-parts/blocks/slider-home/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'slider',),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'two-seccion-image-text',
    'title'             => __('two-seccion-image-text'),
    'description'       => __('two-seccion'),
    'render_template'   => 'template-parts/blocks/two-seccion-image-text/index.php',
    'keywords'          => array('panel', 'two-seccion', 'image-text'),
    'category' => 'widgets'
));
acf_register_block_type(array(
    'name'              => 'instagram-block',
    'title'             => __('instagram'),
    'description'       => __('seccion de fotos de instagram'),
    'render_template'   => 'template-parts/blocks/instagram-block/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'services-block',
    'title'             => __('services'),
    'description'       => __('servicios con iconos'),
    'render_template'   => 'template-parts/blocks/services-block/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'fundadores-block',
    'title'             => __('fundadores'),
    'description'       => __('parrafo grande de fundadores'),
    'render_template'   => 'template-parts/blocks/fundadores-block/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'lista-blog',
    'title'             => __('Lista de Blog'),
    'description'       => __('Lista de Blog del sitio'),
    'render_template'   => 'template-parts/blocks/lista-blog/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('blog', 'lista', 'card', 'article'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'titulo-texto-imagenabajo',
    'title'             => __('titulo_texto_imagenabajo'),
    'description'       => __('fondo blanco con texto e imagen abajo'),
    'render_template'   => 'template-parts/blocks/titulo-texto-imagenabajo/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('panel', 'cta', 'card', 'article'),
    'category' => 'widgets'

));
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Ajustes Generales',
        'menu_title'	=> 'Ajustes Generales',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}
acf_register_block_type(array(
    'name'              => 'lista-atletas',
    'title'             => __('Lista de Atletas'),
    'description'       => __('Lista de todos los atletas del sitio'),
    'render_template'   => 'template-parts/blocks/lista-atletas/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('atletas', 'lista', 'card', 'biografia'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'galeria-blog',
    'title'             => __('Galeria del Blog'),
    'description'       => __('Galeria personailzada para el blog'),
    'render_template'   => 'template-parts/blocks/galeria-blog/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('galeria', 'blog'),
    'category' => 'widgets'

));
acf_register_block_type(array(
    'name'              => 'icon-modal-meta',
    'title'             => __('Meta Iconos'),
    'description'       => __('Iconos con descripci??n de la p??gina meta'),
    'render_template'   => 'template-parts/blocks/icon-modal-meta/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('galeria', 'blog'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'card-metas',
    'title'             => __('Cartas de meta'),
    'description'       => __('Lista de cada meta'),
    'render_template'   => 'template-parts/blocks/cards-meta/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('meta'),
    'category' => 'widgets'
));

acf_register_block_type(array(
    'name'              => 'seccion-comparte',
    'title'             => __('seccion comparte'),
    'description'       => __('compartir la meta'),
    'render_template'   => 'template-parts/blocks/seccion-comparte/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('meta'),
    'category' => 'widgets'
));
acf_register_block_type(array(
    'name'              => 'titulo_meta',
    'title'             => __('Titulo Meta'),
    'description'       => __('titulo pagina meta'),
    'render_template'   => 'template-parts/blocks/Titulo Meta/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('meta'),
    'category' => 'widgets'
));
acf_register_block_type(array(
    'name'              => 'back-atletas',
    'title'             => __('back atletas'),
    'description'       => __('boton back-atletas'),
    'render_template'   => 'template-parts/blocks/back-atletas/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('meta','boton back' ),
    'category' => 'widgets'
));
acf_register_block_type(array(
    'name'              => 'new-colection',
    'title'             => __('new-colection'),
    'description'       => __('coleccion de productos nuevos'),
    'render_template'   => 'template-parts/blocks/new-colection/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('meta','productos nuevos' ),
    'category' => 'widgets'
));