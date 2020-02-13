<?php
function st_add_meta()
{
    global $post;
    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if ($pageTemplate == 'page-entry.php') {
            add_meta_box(
                'entry-metaboxes', // $id
                'Metaboxes of Entry Page', // $title
                'display_entry_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-work-style.php') {
            add_meta_box(
                'work-style-metaboxes', // $id
                'Metaboxes of Work Style Page', // $title
                'display_work_style_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-examples.php') {
            add_meta_box(
                'examples-metaboxes', // $id
                'Metaboxes of Examples Page', // $title
                'display_examples_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-about.php') {
            add_meta_box(
                'about-metaboxes', // $id
                'Metaboxes of About Page', // $title
                'display_about_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-reviews.php') {
            add_meta_box(
                'reviews-metaboxes', // $id
                'Metaboxes of Reviews Page', // $title
                'display_reviews_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-process.php') {
            add_meta_box(
                'process-metaboxes', // $id
                'Metaboxes of Process Page', // $title
                'display_process_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }
        if ($pageTemplate == 'page-faq.php') {
            add_meta_box(
                'faq-metaboxes', // $id
                'Metaboxes of FAQ Page', // $title
                'display_faq_metaboxes', // $callback
                'page', // $page
                'before-editor', // $context
                'high');
        }

        add_meta_box(
            'desktop-example-metaboxes', // $id
            'Metaboxes of Desktop Work Example', // $title
            'display_desktop_example_metaboxes', // $callback
            'desktop-example', // $page
            'before-editor', // $context
            'high');
        add_meta_box(
            'mobile-example-metaboxes', // $id
            'Metaboxes of Mobile Work Example', // $title
            'display_mobile_example_metaboxes', // $callback
            'mobile-example', // $page
            'before-editor', // $context
            'high');
        add_meta_box(
            'review-metaboxes', // $id
            'Metaboxes of Review', // $title
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
                <p>Link for the Entry Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the Entry Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Paragraph</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Connect Button text</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="button-text" value="<?php if (isset($metaboxes_data['button-text'])) echo $metaboxes_data['button-text']; ?>"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Background Image for Desktop</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['bkg-img'])) echo $metaboxes_data['bkg-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Background Image" name="bkg-img" value="<?php if (isset($metaboxes_data['bkg-img'])) echo $metaboxes_data['bkg-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                        value="<?php if (isset($metaboxes_data['img-title'])) echo $metaboxes_data['img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Background Image for Mobile</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['mobile-bkg-img'])) echo $metaboxes_data['mobile-bkg-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Mobile Background Image" name="mobile-bkg-img" value="<?php if (isset($metaboxes_data['mobile-bkg-img'])) echo $metaboxes_data['mobile-bkg-img']; ?>">
                <input class="imgTitle" type="hidden" name="mobile-img-title"
                        value="<?php if (isset($metaboxes_data['mobile-img-title'])) echo $metaboxes_data['mobile-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
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
                <p>Link for the Work Style Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the Work Style Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>First Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Icon</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['first-item-icon'])) echo $metaboxes_data['first-item-icon']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="first-item-icon" value="<?php if (isset($metaboxes_data['first-item-icon'])) echo $metaboxes_data['first-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="first-item-icon-title"
                       value="<?php if (isset($metaboxes_data['first-item-icon-title'])) echo $metaboxes_data['first-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Second Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Icon</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['second-item-icon'])) echo $metaboxes_data['second-item-icon']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="second-item-icon" value="<?php if (isset($metaboxes_data['second-item-icon'])) echo $metaboxes_data['second-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="second-item-icon-title"
                       value="<?php if (isset($metaboxes_data['second-item-icon-title'])) echo $metaboxes_data['second-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Third Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Icon</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['third-item-icon'])) echo $metaboxes_data['third-item-icon']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="third-item-icon" value="<?php if (isset($metaboxes_data['third-item-icon'])) echo $metaboxes_data['third-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="third-item-icon-title"
                       value="<?php if (isset($metaboxes_data['third-item-icon-title'])) echo $metaboxes_data['third-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Fourth Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item Icon</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['fourth-item-icon'])) echo $metaboxes_data['fourth-item-icon']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="fourth-item-icon" value="<?php if (isset($metaboxes_data['fourth-item-icon'])) echo $metaboxes_data['fourth-item-icon']; ?>">
                <input class="imgTitle" type="hidden" name="fourth-item-icon-title"
                       value="<?php if (isset($metaboxes_data['fourth-item-icon-title'])) echo $metaboxes_data['fourth-item-icon-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item Text</h6>
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
                <p>Link for the Examples Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the Examples Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Order Button text</h6>
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
                <h6>Desktop Work Example Image</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
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
                <h6>Mobile Work Example Image</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
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
                <p>Link for the About Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the About Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Author Photo Image</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="second-title" cols="45" rows="4"><?php if (isset($metaboxes_data['second-title'])) echo $metaboxes_data['second-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Paragraph</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-p" cols="45" rows="4"><?php if (isset($metaboxes_data['main-p'])) echo $metaboxes_data['main-p']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Connect Button text</h6>
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
                <p>Link for the Reviews Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the Reviews Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Order Toy Button text</h6>
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
                <h6>Review Image</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="main-img" value="<?php if (isset($metaboxes_data['main-img'])) echo $metaboxes_data['main-img']; ?>">
                <input class="imgTitle" type="hidden" name="img-title"
                       value="<?php if (isset($metaboxes_data['main-img-title'])) echo $metaboxes_data['main-img-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Review Author Name</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="author-name" cols="45" rows="4"><?php if (isset($metaboxes_data['author-name'])) echo $metaboxes_data['author-name']; ?></textarea></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Review Text</h6>
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
                <p>Link for the Process Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the Process Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>First Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Image</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['first-item-image'])) echo $metaboxes_data['first-item-image']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="first-item-image" value="<?php if (isset($metaboxes_data['first-item-image'])) echo $metaboxes_data['first-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="first-item-image-title"
                       value="<?php if (isset($metaboxes_data['first-item-image-title'])) echo $metaboxes_data['first-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Second Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Image</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['second-item-image'])) echo $metaboxes_data['second-item-image']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="second-item-image" value="<?php if (isset($metaboxes_data['second-item-image'])) echo $metaboxes_data['second-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="second-item-image-title"
                       value="<?php if (isset($metaboxes_data['second-item-image-title'])) echo $metaboxes_data['second-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Third Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Image</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['third-item-image'])) echo $metaboxes_data['third-item-image']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="third-item-image" value="<?php if (isset($metaboxes_data['third-item-image'])) echo $metaboxes_data['third-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="third-item-image-title"
                       value="<?php if (isset($metaboxes_data['third-item-image-title'])) echo $metaboxes_data['third-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Fourth Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item image</h6>
                <p><p>Preview</p>
                <img class="imgPrev" style="width: 50%; text-align: center" src="<?php if (isset($metaboxes_data['fourth-item-image'])) echo $metaboxes_data['fourth-item-image']; ?>" alt="Preview"><br>
                <input class="imgUrl" type="text" placeholder="Image" name="fourth-item-image" value="<?php if (isset($metaboxes_data['fourth-item-image'])) echo $metaboxes_data['fourth-item-image']; ?>">
                <input class="imgTitle" type="hidden" name="fourth-item-image-title"
                       value="<?php if (isset($metaboxes_data['fourth-item-image-title'])) echo $metaboxes_data['fourth-item-image-title']; ?>">
                <button type="button" class="upload-img-btn btn btn-info">Choose</button></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item Text</h6>
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
                <p>Link for the FAQ Page block (used on the edit page of the Main menu)(here without a grid sign)</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><input type="text" name="menu-anchor" value="<?php if (isset($metaboxes_data['menu-anchor'])) echo $metaboxes_data['menu-anchor']; ?>"></p>
            </div>
        </div>
    </div>
    <div class="form-group container">
        <h5>Main Content of the FAQ Page</h5><br><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Main Title</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p><textarea name="main-title" cols="45" rows="4"><?php if (isset($metaboxes_data['main-title'])) echo $metaboxes_data['main-title']; ?></textarea></p>
            </div>
        </div>
        <h5>First Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['first-item-title'])) echo $metaboxes_data['first-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>First Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="first-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['first-item-text'])) echo $metaboxes_data['first-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Second Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['second-item-title'])) echo $metaboxes_data['second-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Second Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="second-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['second-item-text'])) echo $metaboxes_data['second-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Third Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['third-item-title'])) echo $metaboxes_data['third-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Third Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="third-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['third-item-text'])) echo $metaboxes_data['third-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Fourth Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['fourth-item-title'])) echo $metaboxes_data['fourth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fourth Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fourth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fourth-item-text'])) echo $metaboxes_data['fourth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Fifth Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fifth Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fifth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['fifth-item-title'])) echo $metaboxes_data['fifth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Fifth Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="fifth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['fifth-item-text'])) echo $metaboxes_data['fifth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
        <h5>Sixth Item Content</h5><br>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Sixth Item Title</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="sixth-item-title" cols="45" rows="2"><?php if (isset($metaboxes_data['sixth-item-title'])) echo $metaboxes_data['sixth-item-title']; ?></textarea></p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h6>Sixth Item Text</h6>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p><textarea name="sixth-item-text" cols="45" rows="4"><?php if (isset($metaboxes_data['sixth-item-text'])) echo $metaboxes_data['sixth-item-text']; ?></textarea></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}



