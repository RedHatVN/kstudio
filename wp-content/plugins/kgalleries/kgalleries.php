<?php

/*
 * Plugin Name: K Galleries
 */

class KGalleries {

    function kgalleries_post_type() {
        $labels = array(
            'name' => 'Galleries',
            'singular_name' => 'Gallery',
            'menu_name' => 'Thư viện ảnh',
            'name_admin_bar' => 'Thư viện ảnh',
            'add_new' => 'Thêm mới',
            'add_new_item' => 'Thêm mới Album',
            'new_item' => 'Thêm mới',
            'edit' => 'Sửa',
            'edit_item' => 'Sửa album',
            'view_item' => 'Xem chi tiết',
            'all_items' => 'Album ảnh',
            'search_items' => 'Tìm kiếm',
            'parent_item_colon' => 'Album cha',
            'not_found' => 'Không tìm thấy Album nào',
            'not_found_in_trash' => 'Không có Album nào trong sọt rác'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'album'),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'comments'),
        );
        register_post_type('galleries', $args);
    }

    function kgalleries_taxonomies() {
        $labels = array(
            'name' => 'Gallery Taxonomies',
            'singular_name' => 'Gallery', 'taxonomy singular name',
            'search_items' => 'Tìm danh mục',
            'all_items' => 'Galleries',
            'parent_item' => 'Danh mục cha',
            'parent_item_colon' => 'Danh mục cha:',
            'edit_item' => 'Sửa',
            'update_item' => 'Cập nhật',
            'add_new_item' => 'Thêm mới',
            'new_item_name' => 'Thêm mới',
            'menu_name' => 'Danh mục',
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'gallery'),
        );
        register_taxonomy('gallery', array('galleries'), $args);
    }

}

add_action('init', array('KGalleries', 'kgalleries_post_type'));
add_action('init', array('KGalleries', 'kgalleries_taxonomies'), 0);
