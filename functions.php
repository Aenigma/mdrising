<?php
function my_theme_enqueue_styles() {

    $parent_style = 'athena-style'; // 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'mdrising-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );


function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<br \/>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

