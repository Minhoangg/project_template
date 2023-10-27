<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách hàng hóa</h4>
    </div>
    <div class="row">
        <div class="cart mx-auto">
            <form action="?btn_delete_all" method="post" class="table-responsive">
            <a href="index.php" class="btn btn-success text-white mb-2">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="bg-dark">
                        <tr class="text-white">
                        <th><input type="checkbox" id="select-all-hang-hoa" onclick="toggleCheckboxes('select-all-hang-hoa')"></th>
                            <th>Mã HH</th>
                            <th>Tên hàng hóa</th>
                            <th>Ảnh</th>
                            <th>Đơn giá</th>
                            <th>Giảm giá</th>
                            <th>Lượt xem</th>
                            <th>Ngày nhập</th>
                            <th>Đặc biệt</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody ></tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suahh = "index.php?btn_edit&ma_hh=" . $ma_hh;
                            $xoahh = "index.php?btn_delete&ma_hh=" . $ma_hh;
                            $img_path = $UPLOAD_URL . '/products/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='60' width='60' class='object-fit-contain'>";
                            } else {
                                $img = "Không có ảnh";
                            }
                            //Tính giảm bn %
                            if ($don_gia > 0) {
                                $percent_discount = number_format($giam_gia / $don_gia * 100);
                            }
                            ?>
                            <tr class="mx-auto">
                                <td><input type="checkbox" name="ma_hh[]" value="<?= $ma_hh ?>"></td>
                                <td >
                                    <?= $ma_hh ?>
                                </td>
                                <td>
                                    <?= $ten_hh ?>
                                </td>
                                <td>
                                    <?= $img ?>
                                </td>
                                <td>
                                    <?= number_format($don_gia, 0) ?>đ
                                </td>
                                <td>
                                    <?= number_format($giam_gia, 0) ?>đ<i class="text-danger">(
                                        <?= isset($percent_discount) ? $percent_discount : '' ?>%)
                                    </i>
                                </td>
                                <td>
                                    <?= $so_luot_xem ?>
                                </td>
                                <td>
                                    <?= $ngay_nhap ?>
                                </td>
                                <td>
                                    <?= ($dac_biet == 1) ? "Đặc biệt" : "Không"; ?>
                                </td>

                                <td class="text-end d-flex justify-content-around">
                                    <a href="<?= $suahh ?>" class="btn btn-outline-info btn-rounded"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="<?= $xoahh ?>" class="btn btn-outline-danger btn-rounded"
                                        onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }

                        ?>
                    </tbody>

                </table>
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                
            </form>
        </div>
    </div>
</div>