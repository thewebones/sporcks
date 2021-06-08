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