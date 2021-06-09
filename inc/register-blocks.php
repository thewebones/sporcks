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