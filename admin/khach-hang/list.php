
<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách khách hàng</h4>
    </div>
    <div class="row col-sm-12 mx-auto">
        <div class="row mx-auto">
            <form action="?btn_delete_all" method="post" class="table-responsive">
            <a href="index.php" class="btn btn-success mb-2 text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a>
                <table width="100%" class="table table-hover table-bordered text-center ">
                    <div >
                        <tr class="bg-dark text-white" >
                        <th><input type="checkbox" id="select-all-khach-hang" onclick="toggleCheckboxes('select-all-khach-hang')"></th>
                            <th>Mã KH</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ email</th>
                            <th>Ảnh</th>
                            <th>Vai trò</th>
                            <th>Tác vụ</th>
                        </tr>
                    </div>
                    <tbody>
                        <?php
                        foreach ($items as $item) {
                            extract($item);
                            $suakh = "index.php?btn_edit&ma_kh=" . $ma_kh;
                            $xoakh = "index.php?btn_delete&ma_kh=" . $ma_kh;
                            $img_path = $UPLOAD_URL . '/users/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='50' width='50' class='rounded-circle object-fit-cover'>";
                            } else {
                                $img = "no photo";
                            }
                         
                        ?>
                        <tr >
                            <td><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></td>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $email ?></td>
                            <td>
                                <img src="<?=$UPLOAD_URL . '/users/' . $hinh?>" alt="" width="40px" height="30px">
                            </td>
                            <td><?= ($vai_tro == 1) ? "Nhân viên" : "Khách hàng"; ?></td>
                            <td class="d-flex justify-content-around">
                                <a href="<?= $suakh ?>" class="btn btn-outline-primary btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoakh ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <button type="submit" class="btn btn-danger mb-1 text-white" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
            </form>
        </div>
    </div>
</div>