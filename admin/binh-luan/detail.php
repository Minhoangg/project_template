<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Chi tiết bình luận</h4>
    </div>
    <div class="row col-sm-10 mx-auto">
        <div class="box-body mx-auto">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead >
                        <tr class="bg-dark text-white">
                        <th><input type="checkbox" id="select-all-bl" onclick="toggleCheckboxes('select-all-bl')"></th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Người bình luận</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $xoabl = "index.php?btn_delete&ma_bl=" . $ma_bl;
                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></td>
                            <td><?= $noi_dung?></td>
                            <td><?= $ngay_bl ?></td>
                            <td><?= $ma_kh ?></td>
                            <td class="d-flex justify-content-around">
                            <a href="<?= $xoabl ?>" class="btn btn-outline-danger btn-rounded"
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

