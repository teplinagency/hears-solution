<?php
// check function exists
if (function_exists('acf_register_block')) {

    // register banner block
    acf_register_block(array(
        'name'              => 'banner',
        'title'             => __('Banner'),
        'mode' => 'edit',
        'description'       => __('Banner'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'welcome-view-site',
        'keywords'          => array( 'banner' ),
    ));

    // register expertise block
    acf_register_block(array(
        'name'              => 'expertise',
        'title'             => __('Expertise'),
        'mode' => 'edit',
        'description'       => __('Expertise'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'format-gallery',
        'keywords'          => array( 'expertise' ),
    ));


    // register person-card block
    acf_register_block(array(
        'name'              => 'person-card',
        'title'             => __('Person card'),
        'mode' => 'edit',
        'description'       => __('Person card'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'admin-users',
        'keywords'          => array( 'person'),
    ));

    // register slider block
    acf_register_block(array(
        'name'              => 'slider',
        'title'             => __('Slider'),
        'mode' => 'edit',
        'description'       => __('Slider'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'images-alt',
        'keywords'          => array( 'slider' ),
    ));

    // register competencies block
    acf_register_block(array(
        'name'              => 'competencies',
        'title'             => __('Competencies'),
        'mode' => 'edit',
        'description'       => __('Competencies'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'media-document',
        'keywords'          => array( 'competencies', 'home' ),
    ));

    // register Process block
    acf_register_block(array(
        'name'              => 'process',
        'title'             => __('Process'),
        'mode' => 'edit',
        'description'       => __('Process'),
        'render_callback'   => 'my_acf_block_render_callback',
        'render_template'   => 'my_acf_block_render_callback',
        'enqueue_assets'   => 'carc_style_js',
        'category'          => 'home',
        'icon'              => 'table-col-after',
        'keywords'          => array( 'process' ),
    ));

}
