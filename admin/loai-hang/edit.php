<div class="container ">
    <div class="row mt-5 ">
        <div class="card col-6 m-auto">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật loại hàng</div>
            <div class="card-body col-sm-12">
                <form action="index.php?btn_update" method="POST" id="edit_loai">
                    <div class="mb-3">
                        <label for="ma_loai" class="form-label">Mã loại</label>
                        <input type="text" name="ma_loai" class="form-control" disabled value="<?= $ma_loai ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ten_loai" class="form-label">Tên loại</label>
                        <input type="text" name="ten_loai" placeholder="Nhập tên loại" class="form-control" required
                            value="<?= $ten_loai ?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="hidden" name="ma_loai" value="<?= $ma_loai ?>">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-info mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>