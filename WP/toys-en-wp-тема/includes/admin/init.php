<?php

function st_admin_init() {
    include('enqueue.php');

    add_action('admin_enqueue_scripts', 'st_admin_enqueue');
    add_action('admin_post_st_save_options', 'st_save_options');

    function st_create_new_metaboxes_context( $post ) {
        do_meta_boxes( null, 'before-editor', $post );
    }

    ## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
    if( 'disable_gutenberg' ){
        add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

        // отключим подключение базовых css стилей для блоков
        // ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
        remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

        // Move the Privacy Policy help notice back under the title field.
        add_action( 'admin_init', function(){
            remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
            add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        } );
    }


    //Remove Classic Editor from Pages and Posts Edit
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
    remove_post_type_support('desktop-example', 'editor');
    remove_post_type_support('mobile-example', 'editor');
    remove_post_type_support('review', 'editor');
}


function st_custom_mime_types( $mimes ) {

// New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['jpg'] = 'image/bmp';

// Optional. Remove a mime type.

    return $mimes;
}
