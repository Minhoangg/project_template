<?php
// Bắt đầu phiên làm việc
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['vai_tro']) && $_SESSION['vai_tro'] == 1) {
    // Xóa tất cả dữ liệu phiên
    session_unset();
    session_destroy();

    // Chuyển hướng người dùng đến trang đăng nhập
    header('location: login.php');
} else {
    // Nếu người dùng chưa đăng nhập, bạn có thể xử lý theo cách cụ thể.
    // Ví dụ, chuyển họ đến trang đăng nhập hoặc hiển thị một thông báo.
    header('location: login.php');
}
?>
