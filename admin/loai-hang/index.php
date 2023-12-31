<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require "../../global.php";



// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $ten_loai = $_POST['ten_loai'];

    if (loai_exist($ten_loai)) {
        $error = 'Tên loại đã tồn tại.';
        $VIEW_NAME = "add.php";
    } else {
        //insert vào db
        loai_insert($ten_loai);
        // Chuyển hướng đến danh sách
        header('location: index.php?btn_list');
        exit;
    }
} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_loai = $_REQUEST['ma_loai'];
    $loai_info = loai_select_by_id($ma_loai);
    extract($loai_info);

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "edit.php";

    // xóa theo mã loại
} else if (exist_param("btn_delete")) {

    $ma_loai = $_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    //hiển thị danh sách

    $items = loai_select_all();
    $VIEW_NAME = "list.php";


    // xóa tất cả cá danh sách
} else if (exist_param("btn_delete_all")) {

    $arr_ma_loai = $_POST['ma_loai'];
    loai_delete($arr_ma_loai);

    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_loai = $_POST['ma_loai'];
    $ten_loai = $_POST['ten_loai'];
    loai_update($ma_loai, $ten_loai);
    //hiển thị danh sách

    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
