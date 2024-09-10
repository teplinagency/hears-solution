<?php
// check function exists
add_action('acf/init', 'theme_acf_init');
function theme_acf_init()
{

    if (function_exists('acf_register_block')) {

        // register banner block
        acf_register_block(array(
            'name' => 'banner',
            'title' => __('Banner'),
            'mode' => 'edit',
            'description' => __('Banner'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'welcome-view-site',
            'keywords' => array('banner'),
        ));

        // register main banner block
        acf_register_block(array(
            'name' => 'main-banner',
            'title' => __('Main Banner'),
            'mode' => 'edit',
            'description' => __('Main Banner'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'welcome-view-site',
            'keywords' => array('main-banner'),
        ));

        // register black banner block
        acf_register_block(array(
            'name' => 'black-banner',
            'title' => __('Black Banner'),
            'mode' => 'edit',
            'description' => __('Black Banner'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'welcome-view-site',
            'keywords' => array('main-banner'),
        ));

        // register black banner block
        acf_register_block(array(
            'name' => 'history-block',
            'title' => __('History Block'),
            'mode' => 'edit',
            'description' => __('History Block'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'dashicons-welcome-learn-more',
            'keywords' => array('main-banner'),
        ));


        // register expertise block
        acf_register_block(array(
            'name' => 'expertise',
            'title' => __('Expertise'),
            'mode' => 'edit',
            'description' => __('Expertise'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'format-gallery',
            'keywords' => array('expertise'),
        ));


        // register person-card block
        acf_register_block(array(
            'name' => 'person-card',
            'title' => __('Person card'),
            'mode' => 'edit',
            'description' => __('Person card'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'admin-users',
            'keywords' => array('person'),
        ));

        // register person-card block
        acf_register_block(array(
            'name' => 'solution-card',
            'title' => __('Solution card'),
            'mode' => 'edit',
            'description' => __('Solution card'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'dashicons-admin-page',
            'keywords' => array('solution'),
        ));

        // register person-card block
        acf_register_block(array(
            'name' => 'contact-us',
            'title' => __('Contact us'),
            'mode' => 'edit',
            'description' => __('Contact us'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'dashicons-welcome-write-blog',
            'keywords' => array('solution'),
        ));

        // register team block
        acf_register_block(array(
            'name' => 'our-team',
            'title' => __('Our team'),
            'mode' => 'edit',
            'description' => __('Our team'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'admin-users',
            'keywords' => array('solution'),
        ));

        // register location block
        acf_register_block(array(
            'name' => 'location',
            'title' => __('Location'),
            'mode' => 'edit',
            'description' => __('Location'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'dashicons-admin-site-alt3',
            'keywords' => array('solution'),
        ));


        // register slider block
        acf_register_block(array(
            'name' => 'slider',
            'title' => __('Slider'),
            'mode' => 'edit',
            'description' => __('Slider'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'images-alt',
            'keywords' => array('slider'),
        ));

        // register competencies block
        acf_register_block(array(
            'name' => 'competencies',
            'title' => __('Competencies'),
            'mode' => 'edit',
            'description' => __('Competencies'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'media-document',
            'keywords' => array('competencies', 'home'),
        ));

        // register Process block
        acf_register_block(array(
            'name' => 'process',
            'title' => __('Process'),
            'mode' => 'edit',
            'description' => __('Process'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'table-col-after',
            'keywords' => array('process'),
        ));

    }
}
