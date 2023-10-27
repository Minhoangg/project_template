<?php

// truy vấn bình luận theo mã hàng hóa
function binh_luan_select_by_hang_hoa($ma_hh)
{
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ";
    return pdo_query($sql, $ma_hh);
}



//  xóa một hoặc nhiều
function binh_luan_delete($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}







// client------------------------------

// thêm bình luận
function insert_binhluan($noi_dung,$ma_kh, $ma_hh,  $ngay_bl)
{
    $sql = "INSERT INTO binh_luan (noi_dung,ma_kh, ma_hh,  ngay_bl) VALUES ('$noi_dung','$ma_kh', '$ma_hh',  '$ngay_bl')";
    pdo_execute($sql);
}


// show các bình luận
function list_binhluan($ma_hh)
{
    $sql = "SELECT * FROM binh_luan WHERE 1";
    if ($ma_hh > 0)
        $sql .= " AND ma_hh = '" . $ma_hh . "'";

    $sql .= " ORDER BY ma_bl DESC";
    $list_bl = pdo_query($sql);
    return $list_bl;
}
