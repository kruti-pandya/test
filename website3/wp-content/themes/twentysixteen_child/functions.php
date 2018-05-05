<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



// function twentysixteen_child_enqueue_styles() {

//     $parent_style = 'twentysixteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

//     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array( $parent_style ),
//         wp_get_theme()->get('Version')
//     );
// }
// add_action( 'wp_enqueue_scripts', 'twentysixteen_child_enqueue_styles' );
?>