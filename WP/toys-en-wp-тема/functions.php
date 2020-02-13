<?php

//Setup
add_theme_support('menus');
remove_theme_support('editor-style');
remove_theme_support('editor');

//Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/process/save-options.php');
include(get_template_directory() . '/includes/metaboxes.php');
include(get_template_directory() . '/includes/init.php');
require_once(get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php');
include(get_template_directory() . '/includes/register-plugins.php');

//Action and Filter Hooks
add_action('wp_enqueue_scripts', 'st_enqueue');
add_action('after_setup_theme', 'st_setup_theme');
add_action('after_setup_theme', 'st_activate');
add_action('admin_menu', 'st_admin_menus');
add_action('admin_init', 'st_admin_init');
add_action('init', 'st_custom_post_types_init');
add_action('add_meta_boxes', 'st_add_meta');
add_action('save_post', 'st_save_meta', 10, 3);
add_action('edit_form_after_title', 'st_create_new_metaboxes_context');
add_filter('upload_mimes', 'st_custom_mime_types');
add_action( 'tgmpa_register', 'st_register_required_plugins' );

//Shortcodes

