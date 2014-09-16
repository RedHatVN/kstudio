<?php

function kstudio_setup() {

    // Automatic feed
    add_theme_support('automatic-feed-links');

    // Post thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('post-thumbnail', 600, 9999);
    add_image_size('medium-thumb', 520, 325, true);
    add_image_size('small-thumb', 320, 180, true);

    // Post formats
    //add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));
    // Add nav menu
    register_nav_menu('primary', 'Primary Menu');

    // Make the theme translation ready
    load_theme_textdomain('kstudio', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'kstudio_setup');

function kstudio_load_style_js() {
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    if (!is_admin()) {
        //JS
        wp_enqueue_script('kstudio-cycle2', get_template_directory_uri() . '/js/jquery.cycle2.min.js', array('jquery'), null, FALSE);
        wp_enqueue_script('kstudio-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), null, FALSE);

        //CSS
        wp_enqueue_style('googlefont', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&subset=latin,vietnamese', array(), null);
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.2.0');
        wp_enqueue_style('kstudio-style', get_stylesheet_uri(), array('font-awesome', 'googlefont'));
    }
}

add_action('wp_enqueue_scripts', 'kstudio_load_style_js');

function kstudio_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Trang %s', 'baskerville'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'kstudio_wp_title', 10, 2);

// Change the length of excerpts
function custom_excerpt_length($length) {
    return 40;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Add more-link text to excerpt
function new_excerpt_more($more) {
    return '... <a class="more-link" href="' . get_permalink(get_the_ID()) . '">' . __('chi tiết', 'kstudio') . ' &rsaquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

// Menu walker adding "has-children" class to menu li's with children menu items
class kstudio_nav_walker extends Walker_Nav_Menu {

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        $id_field = $this->db_fields['id'];
        if (!empty($children_elements[$element->$id_field])) {
            $element->classes[] = 'has-children';
        }
        Walker_Nav_Menu::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

}

require 'inc/knews.php';
