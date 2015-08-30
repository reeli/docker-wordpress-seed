<?php

include_once 'functions/post_types.inc';
include_once 'functions/enqueue_scripts.inc';
include_once 'functions/comments_config.inc';

add_action('after_setup_theme', 'customtheme_setup');

function customtheme_setup()
{
    load_theme_textdomain('customtheme', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width)) $content_width = 640;
    register_nav_menus(
        array('main-menu' => __('Main Menu', 'customtheme'))
    );
}

add_filter('the_title', 'customtheme_title');

function customtheme_title($title)
{
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'customtheme_filter_wp_title');

function customtheme_filter_wp_title($title)
{
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'customtheme_widgets_init');

function customtheme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'customtheme'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}