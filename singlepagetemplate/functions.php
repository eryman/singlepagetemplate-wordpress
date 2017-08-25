<?php
add_action( 'wp_enqueue_scripts', 'mat_assets' );

function mat_assets() {
    wp_enqueue_style( 'Single Page Theme', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'Unica One', 'https://fonts.googleapis.com/css?family=Unica+One' );
    wp_enqueue_style( 'Icon Fonts', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
    
    
}


register_nav_menus( array(
	'header-menu' => 'Our Awesome Header Menu',
) );

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

add_theme_support( 'post-thumbnails' );


?>