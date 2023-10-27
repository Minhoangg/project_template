<?php
extract($onesp);
// Định dạng giá gốc và giảm giá với dấu "."
$don_gia_formatted = number_format($don_gia, 0, ',', '.');
$giam_gia_formatted = number_format($giam_gia, 0, ',', '.');
$img = $img_path . $hinh;

?>


<div class="box-body">
    <div class="row">

        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <div id="slideshow"><img id="main-image" src="<?= $img ?>" /></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="product-single">
                <h2><?= $ten_hh ?></h2>
                <div class="product-rating">
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                    <span><i class="fa fa-star-o"></i></span>
                </div>
                <p class="product-price" style="font-size: 25px;"><?= $giam_gia_formatted ?>VNĐ<strike style="color:rgba(128, 128, 128, 0.658); font-size: 18px;">
                        <?= $don_gia_formatted ?>VNĐ</strike>
                </p>
                <p class="box-capacity">
                <?= $mo_ta ?>
                </p>

                
                <div class="product-quantity">
                    <h4>Số lượng</h4>
                    <div class="quantity mb20">
                        <input class="btn-quantity decrease-quantity" onclick="dcQuantity()" type="button" value="-">
                        <input type="number" max="10" min="1" name="quantity" value="1" class="quantity-input" id="quantity-input">
                        <input class="btn-quantity increase-quantity" onclick="icQuantity()" type="button" value="+">
                    </div>
                    <span class="rest-quantity">5 sản phẩm có sẵn</span>
                </div>
                <div>
                    <button class="btn btn-default btn-buy-now">
                        Mua Ngay
                    </button>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-shopping-cart"></i>&nbsp;Thêm vào giỏ hàng
                    </button>

                </div>


            </div>
        </div>
    </div>
</div>

<div id="rating">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="col-sm-12">
                <h2>BÌNH LUẬN <?= $ten_hh ?></h2>
                <iframe src="site/page/comment.php?ma_hh=<?= $ma_hh ?>" frameborder="0" width="100%" height="300px"></iframe>
            </div>
        </div>
    </div>

  

</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box-head">
                <h3 class="head-title">Sản phẩm liên quan</h3>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="box-body">
            <div class="row">
                <?php
                foreach ($spcungloai as $sp) {
                    extract($sp);
                    $img = $img_path . $hinh;

                    // Định dạng giá gốc và giảm giá với dấu "."
                    $don_gia_formatted = number_format($don_gia, 0, ',', '.');
                    $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

                    echo '    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30">
                    <div class="product-block">
                        <div class="product-img"><a href="index.php?act=product-detail&idsp=' . $ma_hh . '"><img src="' . $img . '"></a></div>
                        <div class="product-content">
                            <h5><a href="#" class="product-title">' . $ten_hh . '</a></h5>
                            <div class="product-meta"><a href="#" class="product-price">' . $giam_gia_formatted . ' </a>
                                <a href="#" class="discounted-price"> ' . $don_gia_formatted . '</a>
                               
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
        </div>
    </div>
</div>