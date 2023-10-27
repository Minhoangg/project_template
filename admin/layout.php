<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/admin/admin.css">
</head>

<body>
    <div class="d-flex " id="wrapper">
        <?php
        include 'menu.php';
        ?>
        <div class="main">
            <nav class="navbar navbar-expand px-3 py-3 border-bottom border-dark">
                <!-- Button for sidebar toggle -->
                <button class="btn fs-4" type="button">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </nav>

            <?php include $VIEW_NAME; ?>
        </div>
    </div>


    <script type="text/javascript" src='https://cdn.tiny.cloud/1/knslyg5itucw7crhulwtavh3mbca4j42iass9vuqg5sn59k5/tinymce/6/tinymce.min.js' referrerpolicy="origin">
    </script>

    <script src="<?= $CONTENT_URL ?> /js/tinymce.js"></script>
    <script src="<?= $CONTENT_URL ?> /js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script>
        // =============Check delete=================//
        function checkDelete() {
            var x = confirm("Bạn muốn xóa không ?")
            if (x) {
                return true;
            } else {
                return false;
            }
        }


        // chọn cọn tất cả trong các danh sách
        function toggleCheckboxes(selectAllCheckboxId) {
            // Lấy tất cả các checkbox trong tbody của bảng
            var checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');

            // Lấy ô checkbox ở hàng tiêu đề của bảng
            var selectAllCheckbox = document.getElementById(selectAllCheckboxId);

            // Lấy trạng thái hiện tại của ô checkbox ở hàng tiêu đề
            var isChecked = selectAllCheckbox.checked;

            // Duyệt qua danh sách checkbox và cập nhật trạng thái của chúng
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = isChecked;
            }
        }
    </script>
</body>

</html>