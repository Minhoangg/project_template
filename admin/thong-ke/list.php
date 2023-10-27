<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">THỐNG KÊ HÀNG HÓA </h4>
    </div>
    <div class="row">
        <div class="box mx-auto">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="bg-dark">
                    <tr class="text-white">
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_loai ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($gia_min, 0) ?>đ</td>
                        <td><?= number_format($gia_max, 0) ?>đ</td>
                        <td><?= number_format($gia_avg, 0) ?>đ</td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?chart" class="btn btn-info text-white float-right">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
        </div>
    </div>
</div>