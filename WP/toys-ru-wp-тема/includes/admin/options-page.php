<?php

function st_theme_opts_page() {
    $theme_opts      =  get_option('st_opts');
    ?>
    <div class="wrap">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo 'Опции Темы'; ?>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                if(isset($_GET['status']) && $_GET['status'] == 1) {
                    ?>
                    <div class="alert alert-success">Успех!</div>
                    <?php
                }
                ?>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="st_save_options">
                    <?php wp_nonce_field('st_options_verify'); ?>
                    <h4>Основные Опции</h4>

                    <h5>Опции контактных форм (укажите шорткоды, генерируемые плагином Contact Form 7)</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы заказа игрушки мобильной версии сайта</label><br>
                            <input type="text" name="st_input_mobile_order_toy_form_shortcode"
                                   value="<?php
                                   $mobile_order_toy_form_shortcode = html_entity_decode(htmlentities($theme_opts['mobile_order_toy_form_shortcode']));
                                   echo $mobile_order_toy_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label>Шорткод формы заказа игрушки модального (всплывающего) окна</label><br>
                            <input type="text" name="st_input_modal_order_toy_form_shortcode"
                                   value="<?php
                                   $modal_order_toy_form_shortcode = html_entity_decode(htmlentities($theme_opts['modal_order_toy_form_shortcode']));
                                   echo $modal_order_toy_form_shortcode;
                                   ?>" style="width: 80%">
                        </div>
                    </div>

                    <h5>Опции модального (всплывающего) окна с благодарностью за оставленный заказ</h5>
                    <div class="form-group container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Основной текст</label><br>
                                <input type="text" name="st_input_thank_you_modal_first_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_first_text']) && ($theme_opts['thank_you_modal_first_text'] != '')) echo $theme_opts['thank_you_modal_first_text']; ?>" style="width: 80%">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Дополнительный текст</label><br>
                                <input type="text" name="st_input_thank_you_modal_second_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_second_text']) && ($theme_opts['thank_you_modal_second_text'] != '')) echo $theme_opts['thank_you_modal_second_text']; ?>" style="width: 80%">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Текст кнопки</label><br>
                                <input type="text" name="st_input_thank_you_modal_button_text"
                                       value="<?php if (isset($theme_opts['thank_you_modal_button_text']) && ($theme_opts['thank_you_modal_button_text'] != '')) echo $theme_opts['thank_you_modal_button_text']; ?>" style="width: 80%">
                            </div>
                        </div>
                    </div>

                    <h5>Опции футера ("подвала" сайта)</h5>
                    <div class="form-group container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Телефон в футере ("подвале" сайта) (текст - укажите, как будет выглядеть))</label><br>
                                <input type="text" name="st_input_footer_phone_text"
                                       value="<?php if (isset($theme_opts['footer_phone_text']) && ($theme_opts['footer_phone_text'] != '')) echo $theme_opts['footer_phone_text']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Телефон в футере ("подвале" сайта) (ссылка - укажите в международном формате для совершения звонка)</label><br>
                                <input type="text" name="st_input_footer_phone_link"
                                       value="<?php if (isset($theme_opts['footer_phone_link']) && ($theme_opts['footer_phone_link'] != '')) echo $theme_opts['footer_phone_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Ссылка на профиль FaceBook</label><br>
                                <input type="text" name="st_input_footer_facebook_link"
                                       value="<?php if (isset($theme_opts['footer_facebook_link']) && ($theme_opts['footer_facebook_link'] != '')) echo $theme_opts['footer_facebook_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Ссылка на профиль Instagram</label><br>
                                <input type="text" name="st_input_footer_insta_link"
                                       value="<?php if (isset($theme_opts['footer_insta_link']) && ($theme_opts['footer_insta_link'] != '')) echo $theme_opts['footer_insta_link']; ?>" style="width: 80%">
                            </div>
                            <br>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <label>Электропочта в футере ("подвале" сайта)</label><br>
                                <input type="text" name="st_input_footer_email"
                                       value="<?php if (isset($theme_opts['footer_email']) && ($theme_opts['footer_email'] != '')) echo $theme_opts['footer_email']; ?>" style="width: 80%">
                            </div>
                        </div>
                    </div>

                    <br><br><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo 'Сохранить'; ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}