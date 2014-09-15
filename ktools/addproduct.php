<meta charset="utf-8"/>
<?php
include '../wp-load.php';
$post = array(
    'post_author' => 1,
    'post_content' => $description,
    'post_status' => "publish",
    'post_title' => $title,
    'post_parent' => '',
    'post_type' => "product",

);
//Create post
$post_id = wp_insert_post($post, $wp_error);

if ($post_id) {
    echo ' Thêm thành công!';
    echo '<br />';
    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    $img_url = $image_url;
    media_sideload_image($img_url, $post_id, $title);
    $attach = get_posts(array(
        'post_type' => 'attachment',
        'post_parent' => $post_id,
        'post_status' => 'inherit'
    ));
    update_post_meta($post_id, '_thumbnail_id', $attach[0]->ID);
    wp_set_object_terms($post_id, array('Hi-fi'), 'product_cat');
    wp_set_object_terms($post_id, 'simple', 'product_type');
    update_post_meta($post_id, '_visibility', 'visible');
    update_post_meta($post_id, '_stock_status', 'instock');
    update_post_meta($post_id, 'total_sales', '0');
    update_post_meta($post_id, '_downloadable', 'no');
    update_post_meta($post_id, '_virtual', 'no');
    update_post_meta($post_id, '_regular_price', $price); //Giá sản phẩm
    update_post_meta($post_id, '_price', $price); //Giá sản phẩm = Giá Regular
    update_post_meta($post_id, '_purchase_note', "");
    update_post_meta($post_id, '_featured', "no");
    update_post_meta($post_id, '_weight', "");
    update_post_meta($post_id, '_length', "");
    update_post_meta($post_id, '_width', "");
    update_post_meta($post_id, '_height', "");
    update_post_meta($post_id, '_sku', "");
    update_post_meta($post_id, '_product_attributes', array());
    update_post_meta($post_id, '_sale_price_dates_from', "");
    update_post_meta($post_id, '_sale_price_dates_to', "");
    update_post_meta($post_id, '_sold_individually', "");
    update_post_meta($post_id, '_manage_stock', "no");
    update_post_meta($post_id, '_backorders', "no");
    update_post_meta($post_id, '_stock', "");
}