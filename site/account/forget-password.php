<div class="container row">
    <div class="container mt-5 col-6">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                    <h3 class="mb10">Lấy lại mật khẩu</h3>
                </div>
                <!-- form -->
                <form action="index.php?act=forget-pass" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only" for="email"></label>
                            <div class="login-input">
                                <input name="email" type="text" class="form-control" placeholder="Nhập email...">
                                <div class="login-icon"><i class="fa fa-user"></i></div>
                            </div>
                            <?php
                            if (isset($_SESSION['email_error']) && !empty($_SESSION['email_error'])) {
                                echo $_SESSION['email_error'];
                                unset($_SESSION['email_error']); 
                            }
                            if (isset($_SESSION['error_no_email']) && !empty($_SESSION['error_no_email'])) {
                                echo $_SESSION['error_no_email'];
                                unset($_SESSION['error_no_email']);
                            }
                            if (isset($_SESSION['error_send_email']) && !empty($_SESSION['error_send_email'])) {
                                echo $_SESSION['error_send_email'];
                                unset($_SESSION['error_send_email']);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                        <input type="submit" class="btn btn-primary" value="Gửi email" name="forgot">
                        <div>
                            <a href="index.php?act=register" class="text-blue">Đăng ký</a>
                        </div>
                    </div>
                </form>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <h4 class="mb20">Hoặc đăng nhập với</h4>
                    <div class="social-media">
                        <a href="#" class="btn-social-rectangle btn-facebook"><i class="fa fa-facebook"></i><span class="social-text">Facebook</span></a>
                        <a href="#" class="btn-social-rectangle btn-twitter"><i class="fa fa-twitter"></i><span class="social-text">Twitter</span> </a>
                        <a href="#" class="btn-social-rectangle btn-googleplus"><i class="fa fa-google-plus"></i><span class="social-text">Google
                                Plus</span></a>
                    </div>
                </div>
                <!-- /.form -->
            </div>
        </div>
    </div>
</div>