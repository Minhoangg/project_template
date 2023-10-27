<div class="row my-3 mx-0 h-auto py-3 products-search">
    <?php
    foreach ($keyone as $sp) {
        extract($sp);
        $img = $img_path . $hinh;

        // Định dạng giá gốc và giảm giá với dấu "."
        $don_gia_formatted = number_format($don_gia, 0, ',', '.');
        $giam_gia_formatted = number_format($giam_gia, 0, ',', '.');

        echo ' <div class="col-3 h-100 product-item my-2">
        <div class="px-1 py-1 border bg-white product-search-item">
            <div class="img-pr-search "><a href="index.php?act=product-detail&idsp=' . $ma_hh . '"><img src="' . $img . '"></a></div>
            <div class="text-center text-center my-2">
            <h3 class="name-product product px-4">' . $ten_hh . '</h3>
            <p class="price-giam-product">' . $giam_gia_formatted . '<strong class="fs-6 fw-light"> VNĐ</strong></p>
            <p class="price-product">' . $don_gia_formatted . '<strong class="fs-6 fw-light text-danger"> VNĐ</strong></p>
        </div>
        </div>
    </div>';
    }
    ?>
</div>