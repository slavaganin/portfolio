<?php

function st_theme_opts_page() {
    $theme_opts      =  get_option('st_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Theme Options'; ?>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                if(isset($_GET['status']) && $_GET['status'] == 1) {
                    ?>
                    <div class="alert alert-success">Success!</div>
                    <?php
                }
                ?>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="st_save_options">
                    <?php wp_nonce_field('st_options_verify'); ?>
                    <h4>Main Options</h4>

                    <h5>Contact Forms Settings (specify the Shortcodes set by the Contact Form 7 Plugin)</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Mobile Order Toy Request Form Shortcode</label><br>
                            <input type="text" name="st_input_mobile_order_toy_form_shortcode"
                                   value="<?php
                                   $mobile_order_toy_form_shortcode = html_entity_decode(htmlentities($theme_opts['mobile_order_toy_form_shortcode']));
                                   echo $mobile_order_toy_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Modal Window Order Toy Request Form Shortcode</label><br>
                            <input type="text" name="st_input_modal_order_toy_form_shortcode"
                                   value="<?php
                                   $modal_order_toy_form_shortcode = html_entity_decode(htmlentities($theme_opts['modal_order_toy_form_shortcode']));
                                   echo $modal_order_toy_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                    </div>

                    <h5>Thank You for Your Request Modal Window Options</h5>
                    <div class="form-group container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>First Text</label><br>
                                <input type="text" name="st_input_thank_you_modal_first_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_first_text']) && ($theme_opts['thank_you_modal_first_text'] != '')) echo $theme_opts['thank_you_modal_first_text']; ?>" style="width: 80%">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Second Text</label><br>
                                <input type="text" name="st_input_thank_you_modal_second_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_second_text']) && ($theme_opts['thank_you_modal_second_text'] != '')) echo $theme_opts['thank_you_modal_second_text']; ?>" style="width: 80%">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Button Text</label><br>
                                <input type="text" name="st_input_thank_you_modal_button_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_button_text']) && ($theme_opts['thank_you_modal_button_text'] != '')) echo $theme_opts['thank_you_modal_button_text']; ?>" style="width: 80%">
                            </div>
                        </div>
                    </div>

                    <h5>Footer Options</h5>
                    <div class="form-group container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Footer Phone (Text)</label><br>
                                <input type="text" name="st_input_footer_phone_text"
                                       value="<?php if (isset($theme_opts['footer_phone_text']) && ($theme_opts['footer_phone_text'] != '')) echo $theme_opts['footer_phone_text']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Footer Phone (Link)</label><br>
                                <input type="text" name="st_input_footer_phone_link"
                                       value="<?php if (isset($theme_opts['footer_phone_link']) && ($theme_opts['footer_phone_link'] != '')) echo $theme_opts['footer_phone_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Facebook Profile Link</label><br>
                                <input type="text" name="st_input_footer_facebook_link"
                                       value="<?php if (isset($theme_opts['footer_facebook_link']) && ($theme_opts['footer_facebook_link'] != '')) echo $theme_opts['footer_facebook_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Instagramm Profile Link</label><br>
                                <input type="text" name="st_input_footer_insta_link"
                                       value="<?php if (isset($theme_opts['footer_insta_link']) && ($theme_opts['footer_insta_link'] != '')) echo $theme_opts['footer_insta_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Footer Email</label><br>
                                <input type="text" name="st_input_footer_email"
                                       value="<?php if (isset($theme_opts['footer_email']) && ($theme_opts['footer_email'] != '')) echo $theme_opts['footer_email']; ?>" style="width: 80%">
                            </div>
                        </div>
                    </div>

                    <br><br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo 'Save'; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}