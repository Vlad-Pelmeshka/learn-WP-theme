<?php

function base_script_styles(){

    // style
    wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('uikit-style', 'https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css');
}

add_action('wp_enqueue_scripts','base_script_styles');


function theme_support() {

    add_theme_support( 'post-thumbnails' );
}

add_action('init', 'theme_support');