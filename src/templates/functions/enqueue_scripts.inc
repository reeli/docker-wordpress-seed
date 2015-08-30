<?php

$GLOBALS['CUSTOM_THEME_VERSION'] = '0.0.1';

function customtheme_enqueue_scripts()
{

    wp_enqueue_style('index.css', get_template_directory_uri() . '/assets/css/index.css', array(), $GLOBALS['CUSTOM_THEME_VERSION'], true);

    wp_enqueue_script('vendor', get_template_directory_uri() . '/assets/js/vendor.js', array(), $GLOBALS['CUSTOM_THEME_VERSION'], true);
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array(), $GLOBALS['CUSTOM_THEME_VERSION'], true);
}

add_action('wp_enqueue_scripts', 'customtheme_enqueue_scripts');
