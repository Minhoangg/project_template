<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách loại hàng</h4>
    </div>
    <div class="row col-sm-10 mx-auto">
        <div class="box-body mx-auto">
            <form action="?btn_delete_all" method="post" class="table-responsive">
            <a href="index.php" class="btn btn-success text-white mb-2">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead >
                        <tr class="bg-dark text-white">
                        <th><input type="checkbox" id="select-all-loai-hang" onclick="toggleCheckboxes('select-all-loai-hang')"></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suadm = "index.php?btn_edit&ma_loai=" . $ma_loai;
                            $xoadm = "index.php?btn_delete&ma_loai=" . $ma_loai;
                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_loai[]" value="<?= $ma_loai ?>"></td>
                            <td><?= $ma_loai ?></td>
                            <td><?= $ten_loai ?></td>
                            <td class="d-flex justify-content-around">
                                <a href="<?= $suadm ?>" class="btn btn-outline-primary btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoadm ?>" class="btn btn-outline-danger btn-rounded"
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

