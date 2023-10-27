<?php


// login admin  truy vấn thông tin khách hàng theo họ tên
function checkuser($ho_ten, $mat_khau)
{
    $sql = "SELECT * FROM khach_hang WHERE ho_ten = ? LIMIT 1"; // Thêm LIMIT 1 để trả về chỉ một hàng (nếu tìm thấy)
    $user = pdo_query_one($sql, $ho_ten);

    if ($user && password_verify($mat_khau, $user['mat_khau'])) {
        return $user['vai_tro'];
    }
    return 0; // Trả về 0 nếu tên đăng nhập hoặc mật khẩu không hợp lệ
}




// function get_info_user($ho_ten, $mat_khau)
// {
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare("SELECT * FROM khach_hang WHERE ho_ten = :username");
//     $stmt->bindParam(':username', $ho_ten);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetch();
//     return $kq;
// }

// login client 
