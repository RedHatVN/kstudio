<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
exit();
require_once "simple_html_dom.php"; // Chèn thư viện simple_html_dom
$url = 'http://audiohoanghai.com/am-thanh-hi-fi_dm3.html?page=15';
$html1 = file_get_html($url);
foreach ($html1->find('div[class="product_info"]') as $lik) {
    $link = 'http://audiohoanghai.com' . $lik->find('div[class="product_name"] a', 0)->href;
    $html = file_get_html($link); // Create DOM from URL or file
    $title = $html->find('h1[id="product_name"]', 0)->plaintext;
    $image_url = str_replace('250_', '', 'http://audiohoanghai.com' . $lik->find('a[class="tooltip"] img', 0)->src);
    $description = strip_tags($html->find('div[id="content_1"]', 0)->innertext, '<br /><br>');
    $price = str_replace(array(' VND', '.'), '', $lik->find('.price_display', 0)->plaintext);
    include 'addproduct.php';
}
?>