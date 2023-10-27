<?php
require_once "../../dao/pdo.php";
require_once "../../dao/khach_hang.php";
require "../../global.php";

extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_insert")) {
    $mat_khau = $_POST['mat_khau'];
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    $vai_tro = $_POST['vai_tro'];

    // Mã hóa mật khẩu
    $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);

    // Insert dữ liệu đã được mã hóa vào cơ sở dữ liệu
    khach_hang_insert($hashed_password, $ho_ten, $email, $hinh, $vai_tro);

    // Hiển thị dữ liệu
    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_edit")) {
    // lấy dữ liệu từ form
    $ma_kh = $_REQUEST["ma_kh"];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);
    // showw dữ liệu
    $items = khach_hang_selectall();
    $VIEW_NAME = "edit.php";
} elseif (exist_param("btn_delete")) {

    $ma_kh = $_REQUEST['ma_kh'];
    khach_hang_delete($ma_kh);
    //hiển thị danh sách

    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {

    $arr_ma_kh = $_POST['ma_kh'];
    khach_hang_delete($arr_ma_kh);

    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} elseif (exist_param("btn_update")) {

    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $vai_tro = $_POST['vai_tro'];
    $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);

    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

    khach_hang_update($ma_kh,  $hashed_password, $ho_ten, $email, $hinh, $vai_tro);
    // khach_hang_update();
    //hiển thị danh sách
    $items = khach_hang_selectall();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";
