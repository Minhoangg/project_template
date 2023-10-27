
<div class="container row">
    <div class="container mt-5 col-6">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                    <h3 class="mb10">Đăng nhập</h3>
                </div>
                <!-- form -->
                <form action="index.php?act=login" method="post" onsubmit="return validateForm() ">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="login-input">
                                <input  name="name" id="name" type="text" class="form-control" placeholder="Tên đăng nhập" >
                                <div class="login-icon"><i class="fa fa-user"></i></div>
                            </div>
                            <p id="name_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="login-input">
                                <input name="pass" id="pass" type="password" class="form-control" placeholder="Mật khẩu" >
                                <div class="login-icon"><i class="fa fa-lock"></i></div>
                                <div class="eye-icon"><i class="fa fa-eye"></i></div>
                            </div>
                            <p id="pass_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                    <input type="submit" class="btn btn-primary" value="Đăng nhập" name="login">
                        <div style="margin: 0 auto; width: 50%">
                            <a href="index.php?act=register" style="margin-right: 40px;" class="text-blue">Đăng ký</a>
                            <a href="index.php?act=form-forget" class="text-blue">Quên mật khẩu </a>
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

<script>
   function validateForm() {
    var valid = true;

    var name = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;

    if (name === "") {
        document.getElementById("name_error").innerText = "Vui lòng nhập tên đăng nhập";
        valid = false;
    } else {
        document.getElementById("name_error").innerText = "";
    }

    if (pass === "") {
        document.getElementById("pass_error").innerText = "Vui lòng nhập pass.";
        valid = false;
    } else {
        document.getElementById("pass_error").innerText = "";
    }

   

    return valid;
}

</script>