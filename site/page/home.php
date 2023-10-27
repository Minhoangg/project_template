<!-- sản phẩm mới -->






<?php
$spdatbiet =  hang_hoa_select_dac_biet();
$spmoi = hang_hoa_select_all();
$sptop8 = hang_hoa_select_top8();
?>


<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Sản phẩm mới nhất</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- product -->


                        <?php
                        $count = 0; // Biến đếm số lượng sản phẩm đã được hiển thị
                        foreach ($spmoi as $sp) {
                            extract($sp);
                            $img = $img_path . $hinh;

                            // Định dạng giá gốc và giảm giá với dấu "."
                            $don_gia_formatted = number_format($don_gia, 0, ',', '.');
                            $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

                            echo ' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="index.php?act=product-detail&idsp=' . $ma_hh . '"> <img src="' . $img . '" alt=""></a></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">' . $ten_hh . '</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">' . $giam_gia_formatted . '</a>
                                        <a href="#" class="discounted-price">' . $don_gia_formatted . '</a>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>';

                            $count++;
                            if ($count >= 8) {
                                break; // Dừng vòng lặp khi đã hiển thị đủ 8 sản phẩm
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- end sản phẩm mới  -->



<!-- top 8 sp  -->

<div class="row my-3 mx-0 h-auto py-3 bg-white products-top">
    <div>
        <h4> Sản phẩm nhiều lượt xem </h4>
    </div>
    <?php
    $count = 0; // Biến đếm số lượng sản phẩm đã được hiển thị
    foreach ($sptop8 as $sp) {
        extract($sp);
        $img = $img_path . $hinh;

        // Định dạng giá gốc và giảm giá với dấu "."
        $don_gia_formatted = number_format($don_gia, 0, ',', '.');
        $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

        echo ' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="product-block">
            <div class="product-img"><a href="index.php?act=product-detail&idsp=' . $ma_hh . '"> <img src="' . $img . '" alt=""></a></div>
            <div class="product-content">
                <h5><a href="#" class="product-title">' . $ten_hh . '</a></h5>
                <div class="product-meta"><a href="#" class="product-price">' . $giam_gia_formatted . '</a>
                    <a href="#" class="discounted-price">' . $don_gia_formatted . '</a>
                </div>
                <div class="shopping-btn">
                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                    <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>';

        $count++;

        if ($count >= 8) {
            break; // Dừng vòng lặp khi đã hiển thị đủ 8 sản phẩm
        }
    }
    ?>

</div>


<!-- end top 8 sp  -->

<!-- load sản phẩm đặt biệt  -->
<div class="row my-3 mx-0 h-auto bg-white py-3 products-db">
    <div>
        <h4>Sản phẩm đặc biệt </h4>
    </div>
    <?php
    foreach ($spdatbiet as $sp) {
        extract($sp);
        $img = $img_path . $hinh;

        // Định dạng giá gốc và giảm giá với dấu "."
        $don_gia_formatted = number_format($don_gia, 0, ',', '.');
        $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

        echo ' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="index.php?act=product-detail&idsp=' . $ma_hh . '"> <img src="' . $img . '" alt=""></a></div>
                                <div class="product-content">
                                    <h5><a href="#" class="product-title">' . $ten_hh . '</a></h5>
                                    <div class="product-meta"><a href="#" class="product-price">' . $giam_gia_formatted . '</a>
                                        <a href="#" class="discounted-price">' . $don_gia_formatted . '</a>
                                    </div>
                                    <div class="shopping-btn">
                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>';
    }
    ?>
</div>