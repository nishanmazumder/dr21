<?php

/**
 * Enqueue scripts and styles.
 */
function nmbet_scripts() {

    wp_enqueue_style( 'nm-bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css');
    wp_enqueue_style( 'nm-font', get_template_directory_uri(). '/assets/css/font-awesome.min.css'); 
    wp_enqueue_style( 'nm-3webetstyle', get_template_directory_uri(). '/assets/css/hover.css'); 
    wp_enqueue_style( 'nm-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans&display=swap'); 
    wp_enqueue_style( 'nm-style', get_template_directory_uri(). '/assets/css/main.css'); 

    //wp_style_add_data( 'nmbet-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nm-Jquery-1', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', '', '', true);
    wp_enqueue_script( 'nm-bootstrap', get_template_directory_uri() . '/assets/js/functions.js', '', '', true);
    wp_enqueue_script( 'nm-smooth', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script( 'nm-aos', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
    wp_enqueue_script( 'nm-count', get_template_directory_uri() . '/assets/js/count.js', array('nm-Jquery-1'), '', true);
}
add_action( 'wp_enqueue_scripts', 'nmbet_scripts' );