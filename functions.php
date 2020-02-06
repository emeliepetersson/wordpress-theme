<?php

declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Hide admin bar on the front end
add_filter('show_admin_bar', '__return_false');

// stylesheets and scripts
function custom_stylesheet()
{
    // link style sheets
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    // link js files
    wp_enqueue_script('Jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
}

// Call custom stylesheet function
add_action('wp_enqueue_scripts', 'custom_stylesheet');
