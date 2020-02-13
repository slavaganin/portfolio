<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SofToy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body>

<?php $theme_opts     =  get_option('st_opts'); ?>

<header class="header">
    <div class="header-mobile-gradient"></div>
    <nav class="header-nav">
        <div class="header-logo-wrap"><a href="index.html" class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="header-desktop-logo-img" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="header-mobile-logo-img" alt="">
            </a></div>

        <div class="hamburger-controls">
            <div class="hamburger-controls-wrap">
                <button class="hamburger">
                    <span class="hamburger-row"></span><span class="hamburger-row"></span><span class="hamburger-row"></span>
                </button>
                <button class="cross"></button>
            </div>
        </div>

<!--        <ul class="header-menu">-->
<!--            <li class="header-menu-li"><a class="header-menu-link header-link-toys" href="#">Игрушки</a></li>-->
<!--            <li class="header-menu-li"><a class="header-menu-link header-link-feedback" href="#">Отзывы</a></li>-->
<!--            <li class="header-menu-li"><a class="header-menu-link header-link-about" href="#">Об авторе</a></li>-->
<!--            <li class="header-menu-li"><a class="header-menu-link header-link-faq" href="#">Вопросы</a></li>-->
<!--        </ul>-->

        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'header-menu',
            'menu_id'        => ''
        )); ?>
    </nav>



    <?php
    $query = new WP_Query(array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-entry.php'
    ));
    if ($query->have_posts()) {
    while ($query->have_posts()) {
    $query->the_post();

    global $post;

    $metaboxes_data = get_post_meta($post->ID, 'entry-metaboxes', true)
    ?>
    <div class="header-intro" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
        <h1 class="header-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h1>
        <p class="header-intro-p"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
        <a href="#" class="header-intro-contact-link"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></a>
        <div class="header-intro-img-wrap"><img src="<?php if (isset($metaboxes_data['bkg-img']) && ($metaboxes_data['bkg-img'] != '')) echo $metaboxes_data['bkg-img']; ?>" alt="" class="header-intro-img"></div>
        <div class="header-mobile-intro-img-wrap"><img src="<?php if (isset($metaboxes_data['mobile-bkg-img']) && ($metaboxes_data['mobile-bkg-img'] != '')) echo $metaboxes_data['mobile-bkg-img']; ?>" alt="" class="header-mobile-intro-img"></div>
    </div>
        <?php
        wp_reset_postdata();
    }
    }
    ?>
</header>




<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-work-style.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'work-style-metaboxes', true)
?>
<section class="work-style" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="work-style-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <ul class="work-style-ul">
        <?php if (isset($metaboxes_data['first-item-icon']) && ($metaboxes_data['first-item-icon'] != '') && isset($metaboxes_data['first-item-text']) && ($metaboxes_data['first-item-text'] != '')) { ?>
        <li class="work-style-li">
            <div class="work-style-img-wrap "><img src="<?php echo $metaboxes_data['first-item-icon']; ?>" alt="" class="work-style-icon"></div>
            <p class="work-style-p"><?php echo $metaboxes_data['first-item-text']; ?></p>
        </li>
        <?php } ?>
        
        <?php if (isset($metaboxes_data['second-item-icon']) && ($metaboxes_data['second-item-icon'] != '') && isset($metaboxes_data['second-item-text']) && ($metaboxes_data['second-item-text'] != '')) { ?>
        <li class="work-style-li">
            <div class="work-style-img-wrap "><img src="<?php echo $metaboxes_data['second-item-icon']; ?>" alt="" class="work-style-icon"></div>
            <p class="work-style-p"><?php echo $metaboxes_data['second-item-text']; ?></p>
        </li>
        <?php } ?>
        
        <?php if (isset($metaboxes_data['third-item-icon']) && ($metaboxes_data['third-item-icon'] != '') && isset($metaboxes_data['third-item-text']) && ($metaboxes_data['third-item-text'] != '')) { ?>
        <li class="work-style-li">
            <div class="work-style-img-wrap "><img src="<?php echo $metaboxes_data['third-item-icon']; ?>" alt="" class="work-style-icon"></div>
            <p class="work-style-p"><?php echo $metaboxes_data['third-item-text']; ?></p>
        </li>
        <?php } ?>
        
        <?php if (isset($metaboxes_data['fourth-item-icon']) && ($metaboxes_data['fourth-item-icon'] != '') && isset($metaboxes_data['fourth-item-text']) && ($metaboxes_data['fourth-item-text'] != '')) { ?>
        <li class="work-style-li">
            <div class="work-style-img-wrap "><img src="<?php echo $metaboxes_data['fourth-item-icon']; ?>" alt="" class="work-style-icon"></div>
            <p class="work-style-p"><?php echo $metaboxes_data['fourth-item-text']; ?></p>
        </li>
        <?php } ?>
    </ul>
</section>
    <?php
    wp_reset_postdata();
}
}
?>


<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-examples.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'examples-metaboxes', true)
?>
<section class="examples" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="examples-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <div class="examples-content">
        <div class="examples-slider-control">
            <button class="examples-prev-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-left.png" alt="" class="examples-slider-prev-icon"></button>
            <button class="examples-next-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.png" alt="" class="examples-slider-next-icon"></button>
        </div>
        <button class="examples-order-btn"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></button>
        <?php
        wp_reset_postdata();
        }
        }
        ?>

        <div class="examples-slider-wrap">
            <div class="examples-slider">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'desktop-example',
                    'orderby' => 'title',
                    'order'   => 'ASC'
                ));
                if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();

                global $post;
                $metaboxes_data = get_post_meta($post->ID, 'desktop-example-metaboxes', true)
                ?>
                <div class="examples-slide-wrap">
                    <div class="examples-slide" style="background-image: url('<?php echo $metaboxes_data['main-img']; ?>');"></div>
                </div>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <div class="examples-mobile-content">
        <div class="examples-mobile-slider-wrap">
            <div class="examples-mobile-slider">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'mobile-example',
                    'orderby' => 'title',
                    'order'   => 'ASC'
                ));
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();

                        global $post;
                        $metaboxes_data = get_post_meta($post->ID, 'mobile-example-metaboxes', true)
                        ?>
                        <div class="examples-mobile-slide-wrap">
                            <div class="examples-mobile-slide" style="background-image: url('<?php echo $metaboxes_data['main-img']; ?>');"></div>
                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>



<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-about.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'about-metaboxes', true)
?>
<section class="about" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="about-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <div class="about-content">
        <div class="about-left"><img src="<?php if (isset($metaboxes_data['main-img']) && ($metaboxes_data['main-img'] != '')) echo $metaboxes_data['main-img']; ?>" alt="" class="about-photo"></div>
        <div class="about-right">
            <h3 class="about-second-title"><?php if (isset($metaboxes_data['second-title']) && ($metaboxes_data['second-title'] != '')) echo $metaboxes_data['second-title']; ?></h3>
            <p class="about-content-p"><?php if (isset($metaboxes_data['main-p']) && ($metaboxes_data['main-p'] != '')) echo $metaboxes_data['main-p']; ?></p>
            <button class="about-contact-btn"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></button>
        </div>
    </div>
</section>
    <?php
    wp_reset_postdata();
}
}
?>



<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-reviews.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'reviews-metaboxes', true)
?>
<section class="feedback" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="feedback-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <?php
    wp_reset_postdata();
    }
    }
    ?>

    <div class="feedback-slider-wrap">
        <div class="feedback-mobile-slider">
            <?php
            $query = new WP_Query(array(
                'post_type' => 'review',
                'orderby' => 'title',
                'order'   => 'ASC'
            ));
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();

                    global $post;
                    $metaboxes_data = get_post_meta($post->ID, 'review-metaboxes', true)
                    ?>
                    <div class="feedback-mobile-slide-wrap">
                        <div class="feedback-mobile-slide">
                            <div class="feedback-img-wrap"><img src="<?php if (isset($metaboxes_data['main-img']) && ($metaboxes_data['main-img'] != '')) echo $metaboxes_data['main-img']; ?>" alt="" class="feedback-img"></div>
                            <h4 class="feedback-client-name"><?php if (isset($metaboxes_data['author-name']) && ($metaboxes_data['author-name'] != '')) echo $metaboxes_data['author-name']; ?></h4>
                            <p class="feedback-p"><?php if (isset($metaboxes_data['review-text']) && ($metaboxes_data['review-text'] != '')) echo $metaboxes_data['review-text']; ?></p>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <?php
    $query = new WP_Query(array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-reviews.php'
    ));
    if ($query->have_posts()) {
    while ($query->have_posts()) {
    $query->the_post();

    global $post;

    $metaboxes_data = get_post_meta($post->ID, 'reviews-metaboxes', true)
    ?>
    <button class="feedback-order-btn"><?php if (isset($metaboxes_data['button-text']) && ($metaboxes_data['button-text'] != '')) echo $metaboxes_data['button-text']; ?></button>
        <?php
        wp_reset_postdata();
    }
    }
    ?>
</section>


<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-process.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'process-metaboxes', true)
?>
<section class="process" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="process-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <div class="process-slider-wrap">
        <ul class="process-slider-ul">
            <li class="process-slide-li">
                <div class="process-slide">
                    <img src="<?php if (isset($metaboxes_data['first-item-image']) && ($metaboxes_data['first-item-image'] != '')) echo $metaboxes_data['first-item-image']; ?>" class="process-li-img" alt=""><p class="process-li-p"><?php if (isset($metaboxes_data['first-item-text']) && ($metaboxes_data['first-item-text'] != '')) echo $metaboxes_data['first-item-text']; ?></p>
                </div>
            </li>
            <li class="process-slide-li">
                <div class="process-slide">
                    <img src="<?php if (isset($metaboxes_data['second-item-image']) && ($metaboxes_data['second-item-image'] != '')) echo $metaboxes_data['second-item-image']; ?>" class="process-li-img" alt=""><p class="process-li-p"><?php if (isset($metaboxes_data['second-item-text']) && ($metaboxes_data['second-item-text'] != '')) echo $metaboxes_data['second-item-text']; ?></p>
                </div>
            </li>
            <li class="process-slide-li">
                <div class="process-slide">
                    <img src="<?php if (isset($metaboxes_data['third-item-image']) && ($metaboxes_data['third-item-image'] != '')) echo $metaboxes_data['third-item-image']; ?>" class="process-li-img" alt=""><p class="process-li-p"><?php if (isset($metaboxes_data['third-item-text']) && ($metaboxes_data['third-item-text'] != '')) echo $metaboxes_data['third-item-text']; ?></p>
                </div>
            </li>
            <li class="process-slide-li">
                <div class="process-slide">
                    <img src="<?php if (isset($metaboxes_data['fourth-item-image']) && ($metaboxes_data['fourth-item-image'] != '')) echo $metaboxes_data['fourth-item-image']; ?>" class="process-li-img" alt=""><p class="process-li-p"><?php if (isset($metaboxes_data['fourth-item-text']) && ($metaboxes_data['fourth-item-text'] != '')) echo $metaboxes_data['fourth-item-text']; ?></p>
                </div>
            </li>
        </ul>
    </div>
</section>
    <?php
    wp_reset_postdata();
}
}
?>



<?php
$query = new WP_Query(array(
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-faq.php'
));
if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();

global $post;

$metaboxes_data = get_post_meta($post->ID, 'faq-metaboxes', true)
?>
<section class="faq" id="<?php if (isset($metaboxes_data['menu-anchor']) && ($metaboxes_data['menu-anchor'] != '')) echo $metaboxes_data['menu-anchor']; ?>">
    <h2 class="faq-title"><?php if (isset($metaboxes_data['main-title']) && ($metaboxes_data['main-title'] != '')) echo $metaboxes_data['main-title']; ?></h2>
    <ul class="faq-ul">
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['first-item-title']) && ($metaboxes_data['first-item-title'] != '')) echo $metaboxes_data['first-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['first-item-text']) && ($metaboxes_data['first-item-text'] != '')) echo $metaboxes_data['first-item-text']; ?></p>
        </li>
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['second-item-title']) && ($metaboxes_data['second-item-title'] != '')) echo $metaboxes_data['second-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['second-item-text']) && ($metaboxes_data['second-item-text'] != '')) echo $metaboxes_data['second-item-text']; ?></p>
        </li>
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['third-item-title']) && ($metaboxes_data['third-item-title'] != '')) echo $metaboxes_data['third-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['third-item-text']) && ($metaboxes_data['third-item-text'] != '')) echo $metaboxes_data['third-item-text']; ?></p>
        </li>
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['fourth-item-title']) && ($metaboxes_data['fourth-item-title'] != '')) echo $metaboxes_data['fourth-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['fourth-item-text']) && ($metaboxes_data['fourth-item-text'] != '')) echo $metaboxes_data['fourth-item-text']; ?></p>
        </li>
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['fifth-item-title']) && ($metaboxes_data['fifth-item-title'] != '')) echo $metaboxes_data['fifth-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['fifth-item-text']) && ($metaboxes_data['fifth-item-text'] != '')) echo $metaboxes_data['fifth-item-text']; ?></p>
        </li>
        <li class="faq-li">
            <h3 class="faq-li-title"><?php if (isset($metaboxes_data['sixth-item-title']) && ($metaboxes_data['sixth-item-title'] != '')) echo $metaboxes_data['sixth-item-title']; ?></h3>
            <p class="faq-li-p"><?php if (isset($metaboxes_data['sixth-item-text']) && ($metaboxes_data['sixth-item-text'] != '')) echo $metaboxes_data['sixth-item-text']; ?></p>
        </li>
    </ul>
</section>
    <?php
    wp_reset_postdata();
}
}
?>


<section class="mobile-order-form-section">
<!--    <form action="#" method="post">-->
<!--        <div class="order-form-input-wrap">-->
<!--            <input type="text" name="name" placeholder="Имя" required>-->
<!--        </div>-->
<!--        <div class="order-form-input-wrap">-->
<!--            <input type="tel" name="phone" placeholder="Телефон">-->
<!--        </div>-->
<!--        <div class="order-form-input-wrap">-->
<!--            <input type="email" name="email" placeholder="E-mail">-->
<!--        </div>-->
<!--        <div class="mobile-form-messages"></div>-->
<!--        <button type="submit">Заказать игрушку</button>-->
<!--    </form>-->
    <?php
    $mobile_order_form_shortcode = str_replace("&quot;", "'", $theme_opts['mobile_order_toy_form_shortcode']);
    echo do_shortcode($mobile_order_form_shortcode);
    ?>
</section>

<section class="modals">
    <div class="modal-1">
<!--        <form action="#" method="post">-->
<!--            <div class="order-form-input-wrap">-->
<!--                <input type="text" name="name" placeholder="Имя" class="form_name" required>-->
<!--            </div>-->
<!--            <div class="order-form-input-wrap">-->
<!--                <input type="tel" name="phone" placeholder="Телефон" class="form_phone">-->
<!--            </div>-->
<!--            <div class="order-form-input-wrap">-->
<!--                <input type="email" name="email" placeholder="E-mail" class="form_email">-->
<!--            </div>-->
<!--            <div class="modal-form-messages"></div>-->
<!--            <button type="submit">Заказать игрушку</button>-->
<!--            <button class="modal-1-cancel">Закрыть окно</button>-->
<!--        </form>-->
        <?php
        $modal_order_form_shortcode = str_replace("&quot;", "'", $theme_opts['modal_order_toy_form_shortcode']);
        echo do_shortcode($modal_order_form_shortcode);
        ?>
    </div>

    <div class="modal-2">
        <p class="modal-2-p"><?php if (isset($theme_opts['thank_you_modal_first_text']) && ($theme_opts['thank_you_modal_first_text'] != '')) echo $theme_opts['thank_you_modal_first_text']; ?></p>
        <p class="modal-2-p"><?php if (isset($theme_opts['thank_you_modal_second_text']) && ($theme_opts['thank_you_modal_second_text'] != '')) echo $theme_opts['thank_you_modal_second_text']; ?></p>
        <button class="modal-2-btn"><?php if (isset($theme_opts['thank_you_modal_button_text']) && ($theme_opts['thank_you_modal_button_text'] != '')) echo $theme_opts['thank_you_modal_button_text']; ?></button>
    </div>
</section>

<footer class="footer">
    <?php if (isset($theme_opts['footer_phone_text']) && ($theme_opts['footer_phone_text'] != '') && isset($theme_opts['footer_phone_link']) && ($theme_opts['footer_phone_link'] != '')) echo '<a href="tel:' . $theme_opts['footer_phone_link'] . '" class="footer-phone-link">' . $theme_opts['footer_phone_text'] . '</a>'; ?>
    <?php if (isset($theme_opts['footer_facebook_link']) && ($theme_opts['footer_facebook_link'] != '')) echo '<a href="' . $theme_opts['footer_facebook_link'] . '" class="footer-fb-link" target="_blank"><img src="' . get_template_directory_uri() . '/assets/img/fb-icon.png" alt="" class="footer-fb-icon"></a>'; ?>
    <?php if (isset($theme_opts['footer_insta_link']) && ($theme_opts['footer_insta_link'] != '')) echo '<a href="' . $theme_opts['footer_insta_link'] . '" class="footer-insta-link" target="_blank"><img src="' . get_template_directory_uri() . '/assets/img/insta-icon.png" alt="" class="footer-insta-icon"></a>'; ?>
    <?php if (isset($theme_opts['footer_email']) && ($theme_opts['footer_email'] != '')) echo '<a href="mailto:' . $theme_opts['footer_email'] . '" class="footer-gmail-link"><img src="' . get_template_directory_uri() . '/assets/img/gmail-icon.png" alt="" class="footer-gmail-icon"></a>'; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>