<?php

session_start();
include "../../dao/pdo.php";
include "../../dao/binh-luan.php";

$ma_hh = $_REQUEST['ma_hh'];

$dsbl = list_binhluan($ma_hh);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-12">
        <div class="tilte">
            <div class="row">
                <ul class="mt-3   ">
                    <table class="table boder table-bordered">
                        <thead class="table-secondary ">
                            <tr>

                                <th><b>Nội dung bình luận</b></th>
                                <th><b>Mã khách hàng</b></th>
                                <th><b>Thời gian bình luận</b></th>

                            </tr>
                        </thead>
                        <?php
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '
                            <tr>
                                <td>' . $noi_dung . '</td>
                                <td>' . $ma_kh . '</td>
                                <td>' . $ngay_bl . '</td>
                            </tr>';
                        }
                        ?>
                    </table>
                    <?php
                    if (isset($_SESSION['user'])) :
                    ?>
                        <div class=" row">
                            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                <b>
                                    <li class=" d-lg-block  item rounded-2 ml-3  ">
                                        <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                                        <input type="text" name="noi_dung" style="outline: none;" placeholder="Phần bình luận" class=" col-sm-4 rounded-2">
                                        <input type="submit" value="Gửi" name="guibinhluan" class="">
                                    </li>
                                </b>
                            </form>
                        </div>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <?php

        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noi_dung'];
            $ma_hh = $_POST['ma_hh'];
            $ma_kh = $_SESSION['user']['ma_kh'];
            $ngay_bl = date('Y-m-d H:i:s');
            insert_binhluan($noi_dung, $ma_kh, $ma_hh, $ngay_bl);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>