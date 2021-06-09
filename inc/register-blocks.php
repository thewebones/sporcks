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
    'description'       => __('slider'),
    'render_template'   => 'template-parts/blocks/slider-home/index.php',
    'keywords'          => array('panel', 'slider',),
    'category' => 'widgets'

));
acf_register_block_type(array(
<<<<<<< HEAD
    'name'              => 'two-seccion-image-text',
    'title'             => __('two-seccion-image-text'),
    'description'       => __('two-seccion'),
    'render_template'   => 'template-parts/blocks/two-seccion-image-text/index.php',
    'keywords'          => array('panel', 'two-seccion', 'image-text'),
=======
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
>>>>>>> f4ce6acc853e840d55be5a9bcc0cfc663b7aff65
    'category' => 'widgets'

));
