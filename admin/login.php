<?php

session_start();
ob_start();

include "../dao/pdo.php";
include "../dao/login.php";

if (isset($_POST['login'])) { // Kiểm tra nếu biểu mẫu đã được gửi
    $ho_ten = $_POST['username'];
    $mat_khau = $_POST['password'];

    if (empty($ho_ten)) {
        $username_error = "Không được để trống tên đăng nhập";
    } elseif (empty($mat_khau)) {
        $password_error = "Không được để trống password";
    } else {
        $vai_tro = checkuser($ho_ten, $mat_khau);

        if ($vai_tro == 1) {
            $_SESSION['vai_tro'] = $vai_tro;
            header('location: index.php');
        } else {
            $error = "Tên đăng nhập hoặc mật khẩu không tồn tại";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container pt-5">
        <div class="row mb-5 ">
            <h2 class="text-center mb-5">Đăng Nhập</h2>
            <div class="offset-sm-4"></div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="col-sm-4 offset-4">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" name="username" id="username">
                <?php
                if (isset($username_error) && $username_error != "") {
                    echo '<p style="color: red;">' . $username_error . '</p>';
                }
                ?>

                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" id="password">
                <?php
                if (isset($password_error) && $password_error != "") {
                    echo '<p style="color: red;">' . $password_error . '</p>';
                }
                ?>

                <?php
                if (isset($error) && $error != "") {
                    echo '<p style="color: red;">' . $error . '</p>';
                }
                ?>

                <div class="d-flex justify-content-between">
                    <input type="submit" value="Đăng nhập" class="btn btn-primary bg-blue mt-3" name="login">
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>