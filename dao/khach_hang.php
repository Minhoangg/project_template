<?php
require_once 'pdo.php';

// thêm khách hàng
function khach_hang_insert($mat_khau, $ho_ten, $email, $hinh, $vai_tro)
{
    $sql = "INSERT INTO khach_hang(mat_khau,ho_ten,email,hinh,vai_tro) VALUES(?,?,?,?,?)";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $vai_tro == 1);
}


// update khách hàng
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $vai_tro)
{
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,email=?,hinh=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $vai_tro == 1, $ma_kh);
}


// xóa  khách hàng nhiều hoặc một 
function khach_hang_delete($ma_kh)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}



// Truy vấn tất cả khách hàng
function khach_hang_selectall()
{
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}


// truy vấn một thông tin khách hàng theo mã khách hàng
function khach_hang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}









// kiểm tra sự tồn tại theo mã khách hàng
function khach_hang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}


// kiểm tra sự tồn tại theo mã khách hàng
function khach_hang_exist_ho_ten($ho_ten)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE ho_ten=?";
    return pdo_query_value($sql, $ho_ten) > 0;
}

// kiểm tra sự tồn tại theo email
function khach_hang_exist_email($email)
{
    $sql = "SELECT count(*) FROM khach_hang WHERE email=?";
    return pdo_query_value($sql, $email) > 0;
}



















// client -------------------------------------------

// insert tài khoảng khách hàng (khách hàng dăng ký)
function khach_hang_register($mat_khau, $ho_ten, $email)
{
    $sql = "INSERT INTO khach_hang(mat_khau,ho_ten,email) VALUES(?,?,?)";
    pdo_execute($sql, $mat_khau, $ho_ten, $email);
}


// sửa thông tin khách hàng (khách hàng edit)
function khach_hang_edit($mat_khau, $ho_ten, $email, $ma_kh)
{
    $sql = "UPDATE khach_hang SET mat_khau=?, ho_ten=?, email=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau, $ho_ten, $email, $ma_kh);
}




// truy vấn khách hàng theo email
function khach_hang_select_by_email($email)
{
    $sql = "SELECT * FROM khach_hang WHERE email=?";
    return pdo_query_one($sql, $email);
}


// update pass khách hàng theo email
function updata_pass_forgot($new_pass_update, $email)
{
    $sql = "UPDATE khach_hang SET mat_khau = ? WHERE email = ?";
    pdo_execute($sql, $new_pass_update, $email);
}



// truy vấn khách hàng theo tên
function checkuser_login($name, $pass)
{
    $sql = "SELECT * FROM khach_hang WHERE ho_ten = ? LIMIT 1"; // Thêm LIMIT 1 để trả về chỉ một hàng (nếu tìm thấy)
    $user = pdo_query_one($sql, $name); 

    if ($user && password_verify($pass, $user['mat_khau'])) {
        return $user;
    } else {
        return null;
    }
}