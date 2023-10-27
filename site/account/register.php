<div class="container row">
    <div class="container mt-5 col-6">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                    <h3 class="mb10">Tạo tài khoản</h3>
                    <p>Vui lòng điền đầy đủ các thông tin bên dưới</p>
                </div>
                <form action="index.php?act=register" method="POST">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only" for="name">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" required placeholder="Nhập họ và tên...">
                            <?php
                            if (isset($error_hoten) && !empty($error_hoten)) {
                                echo '<div class="text-red">' . $error_hoten . '</div>';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required placeholder="Nhập địa chỉ email...">
                            <?php
                            if (isset($error_email) && !empty($error_email)) {
                                echo '<div class="text-red">' . $error_email . '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only" for="password">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" required placeholder="Nhập mật khẩu...">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <input type="submit" name="register" value="Đăng kí" class="btn btn-primary mr-3">
                        <div>
                            <p>Bạn đã có tài khoản?<a href="index.php?act=login"> Đăng Nhập</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
