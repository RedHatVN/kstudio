<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<?php
require_once "simple_html_dom.php"; // Chèn thư viện simple_html_dom
$url = 'http://no2.vn/d138-b0-chipset-laptop.html';
$html1 = file_get_html($url);
foreach ($html1->find('div[class="goodsItem"]') as $lik) {
    echo $link = 'http://no2.vn/' . $lik->find('a', 0)->href;
    $html = file_get_html($link); // Create DOM from URL or file
    $title = $html->find('div[class="tensanpham clearfix bl"]', 0)->plaintext;
    $image_url = 'http://no2.vn/' . $html->find('a.MagicZoomPlus', 0)->href;
    $description = $html->find('div[id="com_h"] blockquote p', 0)->innertext;
    $price = str_replace(' điểm', '', $html->find('font.shoptv', 0)->plaintext);
    include 'add-product.php';
}
?>