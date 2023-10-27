<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách bình luận</h4>
    </div>
    <div class="row col-sm-10 mx-auto">
        <div class="box-body mx-auto">
            <form action="?btn_delete".$ma_hh method="post" class="table-responsive">
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead >
                        <tr class="bg-dark text-white">
                            <th>Hàng hóa</th>
                            <th>Số bình luận</th>
                            <th>Mới nhất</th>
                            <th>Cũ nhất</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                        ?>
                        <tr>
                            <td><?= $ten_hh?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= $moi_nhat ?></td>
                            <td><?= $cu_nhat ?></td>
                            <td class="d-flex justify-content-around">
                                <a href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>" class="btn btn-outline-primary btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
        </div>
    </div>
</div>

