<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('skill', ['student'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Skill'),
            'edit_item' => __('Edit Skill'),
            'name' => __('Skills'),
            'search_items' => __('Search Skills'),
            'singular_name' => __('Skill'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
