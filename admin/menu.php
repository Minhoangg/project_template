<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<aside id="sidebar">
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="#">ADMIN</a>
        </div>
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Quảng lý
            </li>
            <li class="sidebar-item">
                <a href="<?= $ADMIN_URL ?>/hang-hoa/index.php?btn_list" class="sidebar-link text-decoration-none">
                    <i class="fa-regular fa-file-lines pe-2"></i>
                    Sản phẩm
                </a>


            </li>
            <li class="sidebar-item">
                <a href="<?= $ADMIN_URL ?>/loai-hang/index.php?btn_list" class="sidebar-link collapsed text-decoration-none">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Loại sản phẩm
                </a>

            </li>

            <li class="sidebar-item">
                <a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list" class="sidebar-link collapsed text-decoration-none">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Người dùng
                </a>

            </li>
            <li class="sidebar-item">
                <a href="<?= $ADMIN_URL ?>/binh-luan/" class="sidebar-link collapsed text-decoration-none">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Bình luận
                </a>

            </li>
            <li class="sidebar-item">
                <a href="<?= $ADMIN_URL ?>/thong-ke/" class="sidebar-link collapsed">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Thống kê
                </a>

            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed text-decoration-none" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="fa-regular fa-user pe-2"></i>
                    Admin
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="<?= $ADMIN_URL ?>/logout.php" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Đăng xuất
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</aside>