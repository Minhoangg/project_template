<!-- header-section-->
<div class="header-wrapper">
  <div class="container">
    <div class="row">
      <!-- logo -->
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 ">
        <div class="logo_header w-50 ">
          <a href=""><img src="<?= $CONTENT_URL ?>/img/logo-remove-bg.png" > </a>
        </div>
      </div>
      <!-- /.logo -->
      <!-- search -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <form action="index.php?act=product" class="search-bg" method="POST">
          <input type="text" class="form-control" placeholder="Tìm kiếm..." name="key">
          <button type="submit" name="btn-search"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <!-- /.search -->
      <!-- account -->
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 d-flex justify-content-center align-center">

          <?php
          if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
          ?>
              <div class="align-center align-items-center bg-info d-flex justify-content-center p-2" style="border-radius: 50px;"><a href="index.php?act=account" style="font-size: 25px;"><?= $ho_ten ?></a></div>
          <?php

          } else {
          ?>
            <div class="d-flex justify-content-around">
              <div><a href="index.php?act=register" class="title hidden-xs">Đăng ký</a></div>
              <div class="hidden-xs mx-3">|</div>
              <div><a href="index.php?act=login" class="title hidden-xs">Đăng nhập</a></div>
            </div>
          <?php
          }
          ?>


    
        <!-- /.account -->
      </div>
      <!-- search -->
    </div>
  </div>
  <!-- navigation -->
  <div class="navigation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- navigations-->
          <div id="navigation">
            <ul>
              <li class="active"><a href="index.php?act=home">Trang chủ</a></li>
              <li><a href="index.php?act=product">Sản phẩm</a>
              </li>
              <li><a href="#">Thông tin</a>
              </li>
              <li><a href="#">Bài viết</a> </li>
            </ul>
          </div>
        </div>
        <!-- /.navigations-->
      </div>
    </div>
  </div>
</div>