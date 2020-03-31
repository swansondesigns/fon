<?php


function dzgala_child_enqueue_it_up() {

	wp_enqueue_script( 'jazz-hands', get_stylesheet_directory_uri() . '/jazz-hands.js', array( 'jquery' ), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'dzgala_child_enqueue_it_up', 10, 10 );
