<?php

add_action('init', 'create_post_types');

function create_post_types()
{
    register_post_type('acme_product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => false,
        )
    );
}