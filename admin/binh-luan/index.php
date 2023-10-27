<?php
require "../../dao/binh-luan.php";
require "../../dao/thong-ke.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param('btn_delete')) {

    binh_luan_delete($ma_bl);

    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
} else if (exist_param("ma_hh")) {

    $items = binh_luan_select_by_hang_hoa($ma_hh);
    $VIEW_NAME = "detail.php";
} else if (exist_param("btn_delete_all")) {
    $arr_ma_bl = $_POST['ma_bl'];
    binh_luan_delete($arr_ma_bl);

    // Chuyển hướng hoặc tải lại trang theo cách cần thiết
    header("Location: index.php"); // Thay đổi "index.php" thành URL phù hợp
    exit;
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
