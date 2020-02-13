<?php
function st_add_meta()
{
    global $post;
    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-entry.php') {
            add_meta_box(
                'entry-metaboxes', // $id
                'Метабоксы вводного блока', // $title
                'display_entry_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-work-style.php') {
            add_meta_box(
                'work-style-metaboxes', // $id
                'Метабоксы блока с описанием характеристик работы', // $title
                'display_work_style_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-examples.php') {
            add_meta_box(
                'examples-metaboxes', // $id
                'Метабоксы блока примеров работ', // $title
                'display_examples_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-about.php') {
            add_meta_box(
                'about-metaboxes', // $id
                'Метабоксы блока об Авторе', // $title
                'display_about_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-reviews.php') {
            add_meta_box(
                'reviews-metaboxes', // $id
                'Метабоксы блока отзывов', // $title
                'display_reviews_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-process.php') {
            add_meta_box(
                'process-metaboxes', // $id
                'Метабоксы блока с описанием процесса работы', // $title
                'display_process_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-faq.php') {
            add_meta_box(
                'faq-metaboxes', // $id
                'Метабоксы блока вопросов и ответов', // $title
                'display_faq_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        add_meta_box(
            'desktop-example-metaboxes', // $id
            'Метабоксы примера работы для ПК версии сайта', // $title
            'display_desktop_example_metaboxes', // $callback
            'desktop-example', // $page
            'before-editor', // $context
            'high');
        add_meta_box(
            'mobile-example-metaboxes', // $id
            'Метабоксы примера работы для мобильной версии сайта', // $title
            'display_mobile_example_metaboxes', // $callback
            'mobile-example', // $page
            'before-editor', // $context
            'high');
        add_meta_box(
            'review-metaboxes', // $id
            'Метабоксы отзыва', // $title
            'display_review_metaboxes', // $callback
            'review', // $page
            'before-editor', // $context
            'high');
    }
}

function st_save_meta($post_id, $post, $update)
{
    global $post;
    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if (!$update) {
            return;
        }

        if ($pageTemplate == 'page-entry.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = wp_kses_post($_POST['main-title']);
            $metaboxes_data['main-p'] = wp_kses_post($_POST['main-p']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            $metaboxes_data['bkg-img'] = esc_url_raw($_POST['bkg-img']);
            $metaboxes_data['mobile-bkg-img'] = esc_url_raw($_POST['mobile-bkg-img']);
            update_post_meta($post_id, 'entry-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-work-style.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['first-item-icon'] = esc_url_raw($_POST['first-item-icon']);
            $metaboxes_data['first-item-text'] = sanitize_text_field($_POST['first-item-text']);
            $metaboxes_data['second-item-icon'] = esc_url_raw($_POST['second-item-icon']);
            $metaboxes_data['second-item-text'] = sanitize_text_field($_POST['second-item-text']);
            $metaboxes_data['third-item-icon'] = esc_url_raw($_POST['third-item-icon']);
            $metaboxes_data['third-item-text'] = sanitize_text_field($_POST['third-item-text']);
            $metaboxes_data['fourth-item-icon'] = esc_url_raw($_POST['fourth-item-icon']);
            $metaboxes_data['fourth-item-text'] = sanitize_text_field($_POST['fourth-item-text']);
            update_post_meta($post_id, 'work-style-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-examples.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            update_post_meta($post_id, 'examples-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-about.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['main-img'] = esc_url_raw($_POST['main-img']);
            $metaboxes_data['second-title'] = sanitize_text_field($_POST['second-title']);
            $metaboxes_data['main-p'] = sanitize_text_field($_POST['main-p']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            update_post_meta($post_id, 'about-metaboxes', $metaboxes_data);
        }

        if ($pageTemplate == 'page-reviews.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['button-text'] = sanitize_text_field($_POST['button-text']);
            update_post_meta($post_id, 'reviews-metaboxes', $metaboxes_data);
        }
        
        if ($pageTemplate == 'page-process.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['first-item-image'] = esc_url_raw($_POST['first-item-image']);
            $metaboxes_data['first-item-text'] = sanitize_text_field($_POST['first-item-text']);
            $metaboxes_data['second-item-image'] = esc_url_raw($_POST['second-item-image']);
            $metaboxes_data['second-item-text'] = sanitize_text_field($_POST['second-item-text']);
            $metaboxes_data['third-item-image'] = esc_url_raw($_POST['third-item-image']);
            $metaboxes_data['third-item-text'] = sanitize_text_field($_POST['third-item-text']);
            $metaboxes_data['fourth-item-image'] = esc_url_raw($_POST['fourth-item-image']);
            $metaboxes_data['fourth-item-text'] = sanitize_text_field($_POST['fourth-item-text']);
            update_post_meta($post_id, 'process-metaboxes', $metaboxes_data);
        }
        
        if ($pageTemplate == 'page-faq.php') {
            $metaboxes_data['menu-anchor'] = sanitize_text_field($_POST['menu-anchor']);
            $metaboxes_data['main-title'] = sanitize_text_field($_POST['main-title']);
            $metaboxes_data['first-item-title'] = sanitize_text_field($_POST['first-item-title']);
            $metaboxes_data['first-item-text'] = sanitize_text_field($_POST['first-item-text']);
            $metaboxes_data['second-item-title'] = sanitize_text_field($_POST['second-item-title']);
            $metaboxes_data['second-item-text'] = sanitize_text_field($_POST['second-item-text']);
            $metaboxes_data['third-item-title'] = sanitize_text_field($_POST['third-item-title']);
            $metaboxes_data['third-item-text'] = sanitize_text_field($_POST['third-item-text']);
            $metaboxes_data['fourth-item-title'] = sanitize_text_field($_POST['fourth-item-title']);
            $metaboxes_data['fourth-item-text'] = sanitize_text_field($_POST['fourth-item-text']);
            $metaboxes_data['fifth-item-title'] = sanitize_text_field($_POST['fifth-item-title']);
            $metaboxes_data['fifth-item-text'] = sanitize_text_field($_POST['fifth-item-text']);
            $metaboxes_data['sixth-item-title'] = sanitize_text_field($_POST['sixth-item-title']);
            $metaboxes_data['sixth-item-text'] = sanitize_text_field($_POST['sixth-item-text']);
            update_post_meta($post_id, 'faq-metaboxes', $metaboxes_data);
        }

        $desktop_example_metaboxes['main-img'] = esc_url_raw($_POST['main-img']);
        update_post_meta($post_id, 'desktop-example-metaboxes', $desktop_example_metaboxes);
        
        $mobile_example_metaboxes['main-img'] = esc_url_raw($_POST['main-img']);
        update_post_meta($post_id, 'mobile-example-metaboxes', $mobile_example_metaboxes);
        
        $review_metaboxes['main-img'] = esc_url_raw($_POST['main-img']);
        $review_metaboxes['author-name'] = sanitize_text_field($_POST['author-name']);
        $review_metaboxes['review-text'] = sanitize_text_field($_POST['review-text']);
        update_post_meta($post_id, 'review-metaboxes', $review_metaboxes);

    }
}


function display_entry_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'entry-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для Вводного блока (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое Вводного блока</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Главный заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной параграф</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки вызова окна оформления заявки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Фоновое изображение десктопной (ПК) версии сайта</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['bkg-img'])) echo $metaboxes_data['bkg-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Фоновое изображение" name="bkg-img" value="<?php if (isset($metaboxes_data['bkg-img'])) echo $metaboxes_data['bkg-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                        value="<?php if (isset($metaboxes_data['img-title'])) echo $metaboxes_data['img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Фоновое изображение мобильной версии сайта</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['mobile-bkg-img'])) echo $metaboxes_data['mobile-bkg-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Фоновое изображение для мобильных" name="mobile-bkg-img" value="<?php if (isset($metaboxes_data['mobile-bkg-img'])) echo $metaboxes_data['mobile-bkg-img']; ?>">
                <input class="imgTitle" type="hidden" name="mobile-img-title"
                        value="<?php if (isset($metaboxes_data['mobile-img-title'])) echo $metaboxes_data['mobile-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <?php
}


function display_work_style_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'work-style-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока с описанием характеристик стиля работы (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока с описанием характеристик стиля работы</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>Первая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Иконка характеристики</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['first-item-icon'])) echo $metaboxes_data['first-item-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="first-item-icon" value="<?php if (isset($metaboxes_data['first-item-icon'])) echo $metaboxes_data['first-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="first-item-icon-title"
                       value="<?php if (isset($metaboxes_data['first-item-icon-title'])) echo $metaboxes_data['first-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст характеристики</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Вторая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Иконка характеристики</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['second-item-icon'])) echo $metaboxes_data['second-item-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="second-item-icon" value="<?php if (isset($metaboxes_data['second-item-icon'])) echo $metaboxes_data['second-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="second-item-icon-title"
                       value="<?php if (isset($metaboxes_data['second-item-icon-title'])) echo $metaboxes_data['second-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст характеристики</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Третья характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Иконка характеристики</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['third-item-icon'])) echo $metaboxes_data['third-item-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="third-item-icon" value="<?php if (isset($metaboxes_data['third-item-icon'])) echo $metaboxes_data['third-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="third-item-icon-title"
                       value="<?php if (isset($metaboxes_data['third-item-icon-title'])) echo $metaboxes_data['third-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст характеристики</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Четвертая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Иконка характеристики</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['fourth-item-icon'])) echo $metaboxes_data['fourth-item-icon']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="fourth-item-icon" value="<?php if (isset($metaboxes_data['fourth-item-icon'])) echo $metaboxes_data['fourth-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="fourth-item-icon-title"
                       value="<?php if (isset($metaboxes_data['fourth-item-icon-title'])) echo $metaboxes_data['fourth-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст характеристики</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fourth-item-text'])) echo $metaboxes_data['fourth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}


function display_examples_metaboxes() {
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'examples-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока с указанием примеров работ (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока с указанием примеров работ</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки вызова окна оформления заявки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
    </div>
    <?php
}


function display_desktop_example_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'desktop-example-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение примера работы для ПК версии сайта</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <?php
}


function display_mobile_example_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'mobile-example-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение примера работы для мобильной версии сайта</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
    </div>
    <?php
}


function display_about_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'about-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока "Об авторе" (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока "Об авторе"</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение автора</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Дополнительный заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="second-title" cols="45" rows="4"><?php if (isset($metaboxes_data['second-title'])) echo $metaboxes_data['second-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной параграф</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки вызова окна оформления заявки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
    </div>
    <?php
}


function display_reviews_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'reviews-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока отзывов (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока отзывов</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст кнопки вызова окна оформления заявки</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
    </div>
    <?php
}


function display_review_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'review-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение отзыва</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Имя автора отзыва</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="author-name" cols="45" rows="4"><?php if (isset($metaboxes_data['author-name'])) echo $metaboxes_data['author-name']; ?></textarea></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст отзыва</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="review-text" cols="50" rows="6"><?php if (isset($metaboxes_data['review-text'])) echo $metaboxes_data['review-text']; ?></textarea></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}


function display_process_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'process-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока с описанием процесса работы (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока с описанием процесса работы</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>Первая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['first-item-image'])) echo $metaboxes_data['first-item-image']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="first-item-image" value="<?php if (isset($metaboxes_data['first-item-image'])) echo $metaboxes_data['first-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="first-item-image-title"
                       value="<?php if (isset($metaboxes_data['first-item-image-title'])) echo $metaboxes_data['first-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Вторая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['second-item-image'])) echo $metaboxes_data['second-item-image']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="second-item-image" value="<?php if (isset($metaboxes_data['second-item-image'])) echo $metaboxes_data['second-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="second-item-image-title"
                       value="<?php if (isset($metaboxes_data['second-item-image-title'])) echo $metaboxes_data['second-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Третья характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['third-item-image'])) echo $metaboxes_data['third-item-image']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="third-item-image" value="<?php if (isset($metaboxes_data['third-item-image'])) echo $metaboxes_data['third-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="third-item-image-title"
                       value="<?php if (isset($metaboxes_data['third-item-image-title'])) echo $metaboxes_data['third-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Четвертая характеристика</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Изображение</h6>
                <p><p>Предпросмотр</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['fourth-item-image'])) echo $metaboxes_data['fourth-item-image']; ?>" alt="Предпросмотр"><br>
                <input class="imgUrl" type="text" placeholder="Изображение" name="fourth-item-image" value="<?php if (isset($metaboxes_data['fourth-item-image'])) echo $metaboxes_data['fourth-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="fourth-item-image-title"
                       value="<?php if (isset($metaboxes_data['fourth-item-image-title'])) echo $metaboxes_data['fourth-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Выбрать</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fourth-item-text'])) echo $metaboxes_data['fourth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}


function display_faq_metaboxes()
{
    global $post;
    $metaboxes_data = get_post_meta($post->ID, 'faq-metaboxes', true);
    ?>
    <div class="form-group container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p>Ссылка для блока вопросов и ответов (используется на странице редактирования Главного меню)(здесь без знака решетки)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Основное содержимое блока вопросов и ответов</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Основной заголовок</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>Первый элемент</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['first-item-title'])) echo $metaboxes_data['first-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Второй элеменет</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['second-item-title'])) echo $metaboxes_data['second-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Третий элемент</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['third-item-title'])) echo $metaboxes_data['third-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Четвертый элемент</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['fourth-item-title'])) echo $metaboxes_data['fourth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fourth-item-text'])) echo $metaboxes_data['fourth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Пятый элемент</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fifth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['fifth-item-title'])) echo $metaboxes_data['fifth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fifth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fifth-item-text'])) echo $metaboxes_data['fifth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Шестой элемент</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Заголовок вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="sixth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['sixth-item-title'])) echo $metaboxes_data['sixth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Текст вопроса/ответа</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="sixth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['sixth-item-text'])) echo $metaboxes_data['sixth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}



