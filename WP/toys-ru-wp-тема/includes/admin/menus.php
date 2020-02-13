<?php

function st_admin_menus() {
    add_menu_page(
        'Страница Опций Темы',
        'Опции Темы',
        'edit_theme_options',
        'st_theme_opts',
        'st_theme_opts_page'
    );
}