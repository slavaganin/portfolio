<?php

function st_save_options() {
    if(!current_user_can('edit_theme_options')) {
        wp_die('Вам нельзя находиться на этой странице');
    }

    check_admin_referer('st_options_verify');

    $opts                      =  get_option('st_opts');

    $opts['mobile_order_toy_form_shortcode']    =  htmlentities(stripslashes($_POST['st_input_mobile_order_toy_form_shortcode']));
    $opts['modal_order_toy_form_shortcode']    =  htmlentities(stripslashes($_POST['st_input_modal_order_toy_form_shortcode']));

    $opts['thank_you_modal_first_text']    =  sanitize_text_field(stripslashes($_POST['st_input_thank_you_modal_first_text']));
    $opts['thank_you_modal_second_text']    =  sanitize_text_field(stripslashes($_POST['st_input_thank_you_modal_second_text']));
    $opts['thank_you_modal_button_text']    =  sanitize_text_field(stripslashes($_POST['st_input_thank_you_modal_button_text']));
    $opts['footer_phone_text']    =  sanitize_text_field(stripslashes($_POST['st_input_footer_phone_text']));
    $opts['footer_phone_link']    =  sanitize_text_field(stripslashes($_POST['st_input_footer_phone_link']));
    $opts['footer_facebook_link']    =  sanitize_text_field(stripslashes($_POST['st_input_footer_facebook_link']));
    $opts['footer_insta_link']    =  sanitize_text_field(stripslashes($_POST['st_input_footer_insta_link']));
    $opts['footer_email']    =  sanitize_text_field(stripslashes($_POST['st_input_footer_email']));

    update_option('st_opts', $opts);

    wp_redirect(admin_url('admin.php?page=st_theme_opts&status=1'));
}