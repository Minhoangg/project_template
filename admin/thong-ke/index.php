<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
//--------------------------------//


if (exist_param("chart")) {
    $VIEW_NAME = "bieu-do.php";
} else {
    $VIEW_NAME = "list.php";
}
$items = thong_ke_hang_hoa();
require "../layout.php";