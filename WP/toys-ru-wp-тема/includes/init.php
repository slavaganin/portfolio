<?php

function st_custom_post_types_init()
{

    // Регистрация пользовательского типа записи
    $labels = array(
        'name' => 'Примеры работ для ПК',
        'singular_name' => 'Пример',
        'menu_name' => 'Примеры работ для ПК',
        'name_admin_bar' => 'Прмеры работ для ПК',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить новый пример работы для ПК версии сайта',
        'new_item' => 'Новый пример работы для ПК версии сайта',
        'edit_item' => 'Редактировать пример работы для ПК версии сайта',
        'view_item' => 'Просмотерть пример работы для ПК версии сайта',
        'all_items' => 'Все примеры работ для ПК версии сайта',
        'search_items' => 'Искать примеры работ для ПК версии сайта',
        'parent_item_colon' => '',
        'not_found' => 'Примеры работ для ПК версии сайта не найдены',
        'not_found_in_trash' => 'Примеры работ для ПК версии сайта не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи для примеров работ для ПК версии сайта', 'desktop-example'),
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
        'name' => 'Примеры работ для мобильных',
        'singular_name' => 'Пример',
        'menu_name' => 'Примеры работ для мобильных',
        'name_admin_bar' => 'Примеры работ для мобильных',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить новый пример работы для мобильной версии сайта',
        'new_item' => 'Новый пример работы для мобильной версии сайта',
        'edit_item' => 'Редактировать пример работы для мобильной версии сайта',
        'view_item' => 'Просмотреть пример работы для мобильной версии сайта',
        'all_items' => 'Все примеры работ для мобильной версии сайта',
        'search_items' => 'Искать примеры работ для мобильной версии сайта',
        'parent_item_colon' => '',
        'not_found' => 'Примеры работ для мобильной версии сайта не найдены',
        'not_found_in_trash' => 'Примеры работ для мобильной версии сайта не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи примеров работ для мобильной версии сайта', 'mobile-example'),
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
        'name' => 'Отзывы',
        'singular_name' => 'Отзыв',
        'menu_name' => 'Отзывы',
        'name_admin_bar' => 'Отзывы',
        'add_new' => 'Добавить',
        'add_new_item' => 'Добавить новый отзыв',
        'new_item' => 'Новый отзыв',
        'edit_item' => 'Редактировать отзыв',
        'view_item' => 'Просмотреть отзыв',
        'all_items' => 'Все отзывы',
        'search_items' => 'Искать отзывы',
        'parent_item_colon' => '',
        'not_found' => 'Отзывы не найдены',
        'not_found_in_trash' => 'Отзывы не найдены в Корзине'
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Кастомный тип записи для отзывов', 'review'),
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