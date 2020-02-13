<?php

function st_activate() {
    if (version_compare (get_bloginfo('version') , '4.2', '<') ) {
        wp_die( 'Необходимо использовать Вордпресс версии 4.2 и выше, чтобы использовать эту тему.' );
    }

    $theme_opts = get_option('st_opts');

    if(!$theme_opts) {
        $opts                   =  array(
            'thank_you_modal_first_text'    =>  '',
            'thank_you_modal_second_text'     =>  '',
            'thank_you_modal_button_text'    =>  '',
            '2st_phone_num'     =>  '',
            'logo_text'         =>  '',
            'header_phone'      =>  '',
            'intro_p_one'       =>  '',
            'intro_p_two'       =>  '',
            'intro_p_three'     =>  '',
            'intro_button_text' =>  ''
        );

        add_option('st_opts', $opts);
    }
}