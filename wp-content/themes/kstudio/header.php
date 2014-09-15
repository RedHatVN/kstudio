<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri() . '/js'; ?>/html5shiv.min.js"></script>
            <script src="<?php echo get_template_directory_uri() . '/js'; ?>/respond.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="logo">
            <a href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('description')); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" title="<?php echo esc_attr(get_bloginfo('description')); ?>" /></a>
            <?php if (is_front_page() || is_home()): ?>
                <h1><?php echo esc_attr(get_bloginfo('description')); ?></h1>
            <?php else: ?>
                <p><?php echo esc_attr(get_bloginfo('description')); ?></p>
            <?php endif; ?>
        </header>
        <nav>
            <div class="navigation srow">
                <ul class="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'container' => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                        'walker' => new kstudio_nav_walker
                    ));
                    ?>
                </ul>
            </div>
        </nav>