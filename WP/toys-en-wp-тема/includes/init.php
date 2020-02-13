<?php

function st_custom_post_types_init()
{

    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Desktop Work Examples',
        'singular_name' => 'Example',
        'menu_name' => 'Desktop Work Examples',
        'name_admin_bar' => 'Desktop Work Examples',
        'add_new' => 'Add',
        'add_new_item' => 'Add new Desktop Work Example',
        'new_item' => 'New Desktop Work Example',
        'edit_item' => 'Edit Desktop Work Example',
        'view_item' => 'View Desktop Work Example',
        'all_items' => 'All Desktop Work Examples',
        'search_items' => 'Search for Desktop Work Examples',
        'parent_item_colon' => '',
        'not_found' => 'Desktop Work Examples not Found',
        'not_found_in_trash' => 'Desktop Work Examples not Found in Trash'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Custom Post Type for Desktop Work Examples', 'desktop-example'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'desktop-example'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true
    );
    register_post_type('desktop-example', $args);


    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Mobile Work Examples',
        'singular_name' => 'Example',
        'menu_name' => 'Mobile Work Examples',
        'name_admin_bar' => 'Mobile Work Examples',
        'add_new' => 'Add',
        'add_new_item' => 'Add new Mobile Work Example',
        'new_item' => 'New Mobile Work Example',
        'edit_item' => 'Edit Mobile Work Example',
        'view_item' => 'View Mobile Work Example',
        'all_items' => 'All Mobile Work Examples',
        'search_items' => 'Search for Mobile Work Examples',
        'parent_item_colon' => '',
        'not_found' => 'Mobile Work Examples not Found',
        'not_found_in_trash' => 'Mobile Work Examples not Found in Trash'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Custom Post Type for Mobile Work Examples', 'mobile-example'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'mobile-example'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true
    );
    register_post_type('mobile-example', $args);


    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Review',
        'menu_name' => 'Reviews',
        'name_admin_bar' => 'Reviews',
        'add_new' => 'Add',
        'add_new_item' => 'Add new Review',
        'new_item' => 'New Review',
        'edit_item' => 'Edit Review',
        'view_item' => 'View Review',
        'all_items' => 'All Reviews',
        'search_items' => 'Search for Reviews',
        'parent_item_colon' => '',
        'not_found' => 'Reviews not Found',
        'not_found_in_trash' => 'Reviews not Found in Trash'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Custom Post Type for Reviews', 'review'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'review'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 20,
        'taxonomies' => array(),
        'exclude_from_search' => true
    );
    register_post_type('review', $args);

}