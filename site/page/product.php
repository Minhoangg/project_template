<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- sidenav-section -->
                <div id='cssmenu'>
                    <ul>
                        <?php
                        $dsdm = loai_select_all();
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $link = "index.php?act=product&iddm=" . $ma_loai;
                            echo ' <li class="mx-2"><a href="' . $link . '">' . $ten_loai . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.sidenav-section -->
            </div>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <!-- Lấy sản phẩm theo danh mục -->
                    <?php
                    if (isset($product_cate) && is_array($product_cate)) {
                        foreach ($product_cate as $sp) {
                            extract($sp);
                            $img = $img_path . $hinh;

                            // Định dạng giá gốc và giảm giá với dấu "."
                            $don_gia_formatted = number_format($don_gia, 0, ',', '.');
                            $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');


                            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                <a href="index.php?act=product-detail&idsp=' . $ma_hh . '">
                    <div class="product-block">
                        <div class="product-img"><img src="' . $img . '" alt=""></div>
                        <div class="product-content">
                            <h5 class="product-title">' . $ten_hh . '</h5>
                            <div class="product-meta">
                                <p class="product-price">' . $giam_gia_formatted . ' VNĐ</p>
                                <p class="discounted-price">' . $don_gia_formatted . ' VNĐ</p>
                            </div>
                            <div class="shopping-btn">
                                <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';
                        }
                    } else if (isset($keyone) && is_array($keyone)) {
                        foreach ($keyone as $sp) {
                            extract($sp);
                            $img = $img_path . $hinh;

                            // Định dạng giá gốc và giảm giá với dấu "."
                            $don_gia_formatted = number_format($don_gia, 0, ',', '.');
                            $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

                            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                <a href="index.php?act=product-detail&idsp=' . $ma_hh . '">
                    <div class="product-block">
                        <div class="product-img"><img src="' . $img . '" alt=""></div>
                        <div class="product-content">
                            <h5 class="product-title">' . $ten_hh . '</h5>
                            <div class="product-meta">
                                <p class="product-price">' . $giam_gia_formatted . ' VNĐ</p>
                                <p class="discounted-price">' . $don_gia_formatted . ' VNĐ</p>
                            </div>
                            <div class="shopping-btn">
                                <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';
                        }
                    } else {
                    ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="head-title">Tất cả sản phẩm</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <!-- product -->

                                        <?php
                                        $spmoi = hang_hoa_select_all();
                                        // Biến đếm số lượng sản phẩm đã được hiển thị
                                        foreach ($spmoi as $sp) {
                                            extract($sp);
                                            $img = $img_path . $hinh;

                                            // Định dạng giá gốc và giảm giá với dấu "."
                                            $don_gia_formatted = number_format($don_gia, 0, ',', '.');
                                            $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

                                            echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                <a href="index.php?act=product-detail&idsp=' . $ma_hh . '">
                    <div class="product-block">
                        <div class="product-img"><img src="' . $img . '" alt=""></div>
                        <div class="product-content">
                            <h5 class="product-title">' . $ten_hh . '</h5>
                            <div class="product-meta">
                                <p class="product-price">' . $giam_gia_formatted . ' VNĐ</p>
                                <p class="discounted-price">' . $don_gia_formatted . ' VNĐ</p>
                            </div>
                            <div class="shopping-btn">
                                <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>