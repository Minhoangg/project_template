<div class="container">
    <div class="row mt-5 col-11 m-auto">
        <div class="card mx-auto">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới khách hàng</div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="admin_add_kh" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="ma_kh" class="form-label">Mã khách hàng</label>
                            <input type="text" name="ma_kh" id="ma_kh" class="form-control" disabled placeholder="Tự động tăng">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ho_ten" class="form-label">Họ và tên</label>
                            <input type="text" name="ho_ten" id="ho_ten" class="form-control" placeholder="Nhập họ và tên...">
                            <p id="ho_ten_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Mật khẩu</label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" placeholder="Nhập mật khẩu...">
                            <p id="mat_khau_error" style="color: red;"></p>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="mat_khau" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" name="mat_khau2" id="mat_khau2" class="form-control" placeholder="Nhập lại mật khẩu...">
                            <p id="mat_khau2_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="hinh" class="form-label">Ảnh</label>
                            <input type="file" name="up_hinh" id="hinh" class="form-control">
                            <p id="hinh_error" style="color: red;"></p>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="form-label">Địa chỉ email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập địa chỉ email...">
                            <p id="email_error" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Kích hoạt?</label>
                            <div class="form-control">
                                <label class="radio-inline mr-3">
                                    <input type="radio" value="0" name="vai_tro">Khách hàng
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="1" name="vai_tro" checked>Nhân viên
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 text-center mt-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var valid = true;

        var ho_ten = document.getElementById("ho_ten").value;
        var mat_khau = document.getElementById("mat_khau").value;
        var mat_khau2 = document.getElementById("mat_khau2").value;
        var hinh = document.getElementById("hinh").value;
        var email = document.getElementById("email").value;

        if (ho_ten === "") {
            document.getElementById("ho_ten_error").innerText = "Vui lòng nhập họ vè tên.";
            valid = false;
        } else {
            document.getElementById("ho_ten_error").innerText = "";
        }

        if (mat_khau === "") {
            document.getElementById("mat_khau_error").innerText = "Vui lòng nhập mật khẩu.";
            valid = false;
        } else {
            document.getElementById("mat_khau_error").innerText = "";
        }

        if (mat_khau2 === "") {
            document.getElementById("mat_khau2_error").innerText = "Vui lòng nhập lại mật khẩu";
            valid = false;
        } else if (mat_khau != mat_khau2) {
            document.getElementById("mat_khau2_error").innerText = "Nhập lại mật khẩu không đúng";
        } else {
            document.getElementById("mat_khau2_error").innerText = "";
        }



        if (hinh === "") {
            document.getElementById("hinh_error").innerText = "Vui lòng chọn một ảnh.";
            valid = false;
        } else {
            document.getElementById("hinh_error").innerText = "";
        }

        if (email === "") {
            document.getElementById("email_error").innerText = "Vui lòng nhập một địa chỉ email hợp lệ.";
            valid = false;
        } else {
            document.getElementById("email_error").innerText = "";
        }

        return valid;
    }
</script>