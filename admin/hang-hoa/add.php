<div class="container">
    <div class="row col-11 mt-5 m-auto">
        <div class="card mx-auto">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới hàng hóa</div>
            <div class="card-body">
                <form action="index.php" method="POST" enctype="multipart/form-data" id="add_hang_hoa" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ma_loai" class="form-label">Loại hàng</label>
                            <select name="ma_loai" class="form-control" id="ma_loai">
                                <?php

                                foreach ($loai_hang as $loai_hang) {
                                    extract($loai_hang);
                                    echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ma_hh" class="form-label">Mã hàng hóa</label>
                            <input type="text" name="ma_hh" id="ma_hh" readonly class="form-control" value="Tự động">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Đặc biệt</label>
                            <div class="form-control">
                                <label class="radio-inline  mr-3">
                                    <input type="radio" value="1" name="dac_biet">Đặc biệt
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="0" name="dac_biet" checked>Bình thường
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ten_hh" class="form-label">Tên hàng hóa</label>
                            <input type="text" name="ten_hh" id="ten_hh" class="form-control">
                            <p id="ten_hh_error" style="color: red;"></p>

                        </div>
                        <div class="form-group col-sm-4">
                            <label for="hinh" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" name="hinh" id="hinh" class="form-control">
                            <p id="hinh_error" style="color: red;"></p>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="don_gia" class="form-label">Đơn giá (vnđ)</label>
                            <input type="number" name="don_gia" id="don_gia" class="form-control">
                            <p id="don_gia_error" style="color: red;"></p>
                        </div>

                    </div>
                    <div class="row">

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="giam_gia" class="form-label">Giảm giá (vnđ)</label>
                            <input type="number" name="giam_gia" id="giam_gia" class="form-control">
                            <p id="giam_gia_error" style="color: red;"></p>
                        </div>
                        <div class="form-group col-sm-4">
                            <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                            <label for="ngay_nhap" class="form-label">Ngày nhập</label>
                            <input type="date" name="ngay_nhap" id="ngay_nhap" class="form-control" value="<?= $today ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="so_luot_xem" class="form-label">Số lượt xem</label>
                            <input type="text" name="so_luot_xem" id="so_luot_xem" readonly class="form-control" value="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="mo_ta" class="form-label">Mô tả sản phẩm</label>
                            <textarea id="txtarea" spellcheck="false" name="mo_ta" class="form-control form-control-lg mb-3 myTextarea" id="textareaExample" rows="3"></textarea>
                        </div>
                        <p id="mo_ta_error" style="color: red;"></p>
                    </div>

                    <div class="mb-3 text-center">
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

        var ten_hh = document.getElementById("ten_hh").value;
        var hinh = document.getElementById("hinh").value;
        var don_gia = parseInt(document.getElementById("don_gia").value, 10); // chuyển sang kiểu số nguyên để so sánh
        var giam_gia = parseInt(document.getElementById("giam_gia").value, 10);
        var mo_ta = document.getElementById("txtarea").value;

        if (ten_hh === "") {
            document.getElementById("ten_hh_error").innerText = "Vui lòng nhập tên hàng hóa.";
            valid = false;
        } else {
            document.getElementById("ten_hh_error").innerText = "";
        }

        if (hinh === "") {
            document.getElementById("hinh_error").innerText = "Vui lòng chọn một ảnh.";
            valid = false;
        } else {
            document.getElementById("hinh_error").innerText = "";
        }

        if (isNaN(don_gia) || don_gia <= 0) {
            document.getElementById("don_gia_error").innerText = "Vui lòng nhập giá trị hợp lệ cho đơn giá.";
            valid = false;
        } else {
            document.getElementById("don_gia_error").innerText = "";
        }

        if (isNaN(giam_gia) || giam_gia < 0) {
            document.getElementById("giam_gia_error").innerText = "Vui lòng nhập giá trị hợp lệ cho giảm giá.";
            valid = false;
        } else if (giam_gia > don_gia) {
            document.getElementById("giam_gia_error").innerText = "Giảm giá không được lớn hơn đơn giá.";
            valid = false;
        } else {
            document.getElementById("giam_gia_error").innerText = "";
        }

        if (mo_ta === "") {
            document.getElementById("mo_ta_error").innerText = "Vui lòng nhập mô tả.";
            valid = false;
        } else {
            document.getElementById("mo_ta_error").innerText = "";
        }

        return valid;
    }
</script>