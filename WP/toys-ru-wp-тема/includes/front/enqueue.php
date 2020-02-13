<?php

function st_enqueue() {
    wp_register_style( 'st_slick', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick.css' );
    wp_register_style( 'st_slick_theme', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick-theme.css' );
    wp_register_style( 'st_outdated_browser', get_template_directory_uri() . '/assets/libs/outdated-browser/outdatedbrowser.min.css' );
    wp_register_style( 'st_style', get_template_directory_uri() . '/assets/style/style.css' );

    wp_enqueue_style( 'st_slick' );
    wp_enqueue_style( 'st_slick_theme' );
    wp_enqueue_style( 'st_outdated_browser' );
    wp_enqueue_style( 'st_style' );

    wp_register_script( 'st_jquery', get_template_directory_uri() . '/assets/libs/jquery-3.2.1.min.js', array(), false, true );
    wp_register_script( 'st_slick', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick.min.js', array(), false, true );
    wp_register_script( 'st_jquery_validate', get_template_directory_uri() . '/assets/libs/jquery-validation/dist/jquery.validate.min.js', array(), false, true );
    wp_register_script( 'st_custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );
    wp_register_script( 'st_outdated_browser', get_template_directory_uri() . '/assets/libs/outdated-browser/outdatedbrowser.min.js', array(), false, true );

    wp_enqueue_script( 'st_jquery' );
    wp_enqueue_script( 'st_slick' );
    wp_enqueue_script( 'st_jquery_validate' );
    wp_enqueue_script( 'st_custom' );
    wp_enqueue_script( 'st_outdated_browser' );
}
